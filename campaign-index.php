<?php
// landing_page_report.php
// Features: Filters + Pagination + CSV Export (same filters)
// PHP 7.4+ recommended

// -------------------- DB CONFIG --------------------
$dbHost = "localhost";
$dbName = "met_db";
$dbUser = "root";
$dbPass = "root";
$dsn = "mysql:host={$dbHost};dbname={$dbName};charset=utf8mb4";

try {
  $pdo = new PDO($dsn, $dbUser, $dbPass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
} catch (Exception $e) {
  http_response_code(500);
  die("DB Connection failed: " . htmlspecialchars($e->getMessage()));
}

// -------------------- HELPERS --------------------
function getParam(string $key, $default = '') {
  return isset($_GET[$key]) ? trim((string)$_GET[$key]) : $default;
}

function likeParam($value) {
  return "%" . $value . "%";
}

// -------------------- INPUTS (FILTERS) --------------------
// Text filters
$name           = getParam('name');
$email          = getParam('email');
$mobile         = getParam('mobile');
$city           = getParam('city');
$qualification  = getParam('qualification');
$programme_name = getParam('programme_name');
$extraedge_id   = getParam('extraegde_id'); // column is extraegde_id (typo in schema kept)
$institute_name = getParam('institute_name');
$page_name      = getParam('page_name');

// UTM + ids
$utm_source   = getParam('utm_source');
$utm_medium   = getParam('utm_medium');
$utm_campaign = getParam('utm_campaign');
$gclid        = getParam('gclid');
$fbclid       = getParam('fbclid');

// Date range (submitted_at)
$date_from = getParam('date_from'); // YYYY-MM-DD
$date_to   = getParam('date_to');   // YYYY-MM-DD

// Pagination
$page  = (int)getParam('page', 1);
$limit = (int)getParam('limit', 25);
if ($page < 1) $page = 1;
if (!in_array($limit, [10, 25, 50, 100, 200], true)) $limit = 25;
$offset = ($page - 1) * $limit;

// Export
$export = getParam('export'); // if "csv" -> export

// -------------------- BUILD WHERE CLAUSE --------------------
$where = [];
$params = [];

// Exact / like filters (LIKE for flexible matching)
if ($name !== '') { $where[] = "name LIKE :name"; $params[':name'] = likeParam($name); }
if ($email !== '') { $where[] = "email LIKE :email"; $params[':email'] = likeParam($email); }
if ($mobile !== '') { $where[] = "mobile LIKE :mobile"; $params[':mobile'] = likeParam($mobile); }
if ($city !== '') { $where[] = "city LIKE :city"; $params[':city'] = likeParam($city); }
if ($qualification !== '') { $where[] = "qualification LIKE :qualification"; $params[':qualification'] = likeParam($qualification); }
if ($programme_name !== '') { $where[] = "programme_name LIKE :programme_name"; $params[':programme_name'] = likeParam($programme_name); }
if ($extraedge_id !== '') { $where[] = "extraegde_id LIKE :extraegde_id"; $params[':extraegde_id'] = likeParam($extraedge_id); }
if ($institute_name !== '') { $where[] = "institute_name LIKE :institute_name"; $params[':institute_name'] = likeParam($institute_name); }
if ($page_name !== '') { $where[] = "page_name LIKE :page_name"; $params[':page_name'] = likeParam($page_name); }

if ($utm_source !== '') { $where[] = "utm_source LIKE :utm_source"; $params[':utm_source'] = likeParam($utm_source); }
if ($utm_medium !== '') { $where[] = "utm_medium LIKE :utm_medium"; $params[':utm_medium'] = likeParam($utm_medium); }
if ($utm_campaign !== '') { $where[] = "utm_campaign LIKE :utm_campaign"; $params[':utm_campaign'] = likeParam($utm_campaign); }

if ($gclid !== '') { $where[] = "gclid LIKE :gclid"; $params[':gclid'] = likeParam($gclid); }
if ($fbclid !== '') { $where[] = "fbclid LIKE :fbclid"; $params[':fbclid'] = likeParam($fbclid); }

// Date filters
// submitted_at is timestamp; use >= date_from 00:00:00 and <= date_to 23:59:59
if ($date_from !== '') {
  $where[] = "submitted_at >= :date_from";
  $params[':date_from'] = $date_from . " 00:00:00";
}
if ($date_to !== '') {
  $where[] = "submitted_at <= :date_to";
  $params[':date_to'] = $date_to . " 23:59:59";
}

$whereSql = "";
if (count($where) > 0) {
  $whereSql = "WHERE " . implode(" AND ", $where);
}

// Order
$orderSql = "ORDER BY submitted_at DESC, id DESC";

// -------------------- EXPORT CSV --------------------
if ($export === 'csv') {
  // No pagination for export (exports all filtered rows)
  $sql = "SELECT
            id, name, email, mobile, city, qualification, programme_name, extraegde_id,
            institute_name, page_name,
            utm_source, utm_medium, utm_campaign, utm_adgroup, utm_device, utm_term, utm_content,
            utm_keyword, utm_adposition, utm_placement, utm_matchtype, utm_creative,
            gclid, fbclid, url, submitted_at
          FROM landing_page
          {$whereSql}
          {$orderSql}";
  $stmt = $pdo->prepare($sql);
  $stmt->execute($params);

  $filename = "landing_page_export_" . date("Ymd_His") . ".csv";
  header('Content-Type: text/csv; charset=utf-8');
  header('Content-Disposition: attachment; filename=' . $filename);

  $out = fopen('php://output', 'w');

  // Header row
  fputcsv($out, [
    'id','name','email','mobile','city','qualification','programme_name','extraegde_id',
    'institute_name','page_name',
    'utm_source','utm_medium','utm_campaign','utm_adgroup','utm_device','utm_term','utm_content',
    'utm_keyword','utm_adposition','utm_placement','utm_matchtype','utm_creative',
    'gclid','fbclid','url','submitted_at'
  ]);

  while ($row = $stmt->fetch()) {
    fputcsv($out, $row);
  }
  fclose($out);
  exit;
}

// -------------------- COUNT FOR PAGINATION --------------------
$countSql = "SELECT COUNT(*) AS total FROM landing_page {$whereSql}";
$countStmt = $pdo->prepare($countSql);
$countStmt->execute($params);
$totalRows = (int)$countStmt->fetch()['total'];
$totalPages = max(1, (int)ceil($totalRows / $limit));

// -------------------- FETCH PAGINATED DATA --------------------
$dataSql = "SELECT
              id, name, email, mobile, city, qualification, programme_name, extraegde_id,
              institute_name, page_name,
              utm_source, utm_medium, utm_campaign,
              gclid, fbclid, url, submitted_at
            FROM landing_page
            {$whereSql}
            {$orderSql}
            LIMIT :limit OFFSET :offset";

$dataStmt = $pdo->prepare($dataSql);

// bind filter params
foreach ($params as $k => $v) {
  $dataStmt->bindValue($k, $v);
}
// bind limit/offset as integers
$dataStmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$dataStmt->bindValue(':offset', $offset, PDO::PARAM_INT);

$dataStmt->execute();
$rows = $dataStmt->fetchAll();

// Build querystring helper (keep filters when paginating/exporting)
function buildQuery(array $overrides = []) {
  $q = $_GET;
  foreach ($overrides as $k => $v) {
    if ($v === null) unset($q[$k]);
    else $q[$k] = $v;
  }
  return http_build_query($q);
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Landing Page Leads Report</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family: Arial, sans-serif; margin:16px; background:#f7f7f7;}
    .card{background:#fff; padding:16px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,.06); margin-bottom:14px;}
    .grid{display:grid; grid-template-columns: repeat(4, 1fr); gap:10px;}
    @media(max-width:1100px){ .grid{grid-template-columns: repeat(2, 1fr);} }
    @media(max-width:600px){ .grid{grid-template-columns: 1fr;} }
    label{font-size:12px; color:#444;}
    input{width:100%; padding:9px; border:1px solid #ddd; border-radius:8px;}
    .actions{display:flex; gap:10px; flex-wrap:wrap; align-items:center;}
    button,a.btn{padding:10px 14px; border-radius:10px; border:0; cursor:pointer; text-decoration:none; display:inline-block;}
    button{background:#2563eb; color:white;}
    a.btn{background:#16a34a; color:white;}
    a.btn.secondary{background:#6b7280;}
    table{width:100%; border-collapse:collapse; background:#fff; border-radius:10px; overflow:hidden;}
    th,td{padding:10px; border-bottom:1px solid #eee; font-size:13px; vertical-align:top;}
    th{background:#fafafa; text-align:left;}
    .muted{color:#666; font-size:12px;}
    .pagination{display:flex; gap:8px; flex-wrap:wrap; margin-top:12px;}
    .pagination a{padding:8px 10px; background:#fff; border:1px solid #ddd; border-radius:8px; text-decoration:none; color:#111;}
    .pagination a.active{background:#111; color:#fff; border-color:#111;}
  </style>
</head>
<body>

<div class="card">
  <h2 style="margin:0 0 8px 0;">Landing Page Leads</h2>
  <div class="muted">Total: <?= htmlspecialchars((string)$totalRows) ?> | Page <?= htmlspecialchars((string)$page) ?> of <?= htmlspecialchars((string)$totalPages) ?></div>
</div>

<div class="card">
  <form method="get">
    <div class="grid">
      <div>
        <label>Name</label>
        <input name="name" value="<?= htmlspecialchars($name) ?>" placeholder="name">
      </div>
      <div>
        <label>Email</label>
        <input name="email" value="<?= htmlspecialchars($email) ?>" placeholder="email">
      </div>
      <div>
        <label>Mobile</label>
        <input name="mobile" value="<?= htmlspecialchars($mobile) ?>" placeholder="mobile">
      </div>
      <div>
        <label>City</label>
        <input name="city" value="<?= htmlspecialchars($city) ?>" placeholder="city">
      </div>

      <div>
        <label>Qualification</label>
        <input name="qualification" value="<?= htmlspecialchars($qualification) ?>" placeholder="qualification">
      </div>
      <div>
        <label>Programme Name</label>
        <input name="programme_name" value="<?= htmlspecialchars($programme_name) ?>" placeholder="programme">
      </div>
      <div>
        <label>ExtraEdge ID</label>
        <input name="extraegde_id" value="<?= htmlspecialchars($extraedge_id) ?>" placeholder="extraegde_id">
      </div>
      <div>
        <label>Institute Name</label>
        <input name="institute_name" value="<?= htmlspecialchars($institute_name) ?>" placeholder="institute">
      </div>

      <div>
        <label>Page Name</label>
        <input name="page_name" value="<?= htmlspecialchars($page_name) ?>" placeholder="page name">
      </div>
      <div>
        <label>UTM Source</label>
        <input name="utm_source" value="<?= htmlspecialchars($utm_source) ?>" placeholder="utm_source">
      </div>
      <div>
        <label>UTM Medium</label>
        <input name="utm_medium" value="<?= htmlspecialchars($utm_medium) ?>" placeholder="utm_medium">
      </div>
      <div>
        <label>UTM Campaign</label>
        <input name="utm_campaign" value="<?= htmlspecialchars($utm_campaign) ?>" placeholder="utm_campaign">
      </div>

      <div>
        <label>GCLID</label>
        <input name="gclid" value="<?= htmlspecialchars($gclid) ?>" placeholder="gclid">
      </div>
      <div>
        <label>FBCLID</label>
        <input name="fbclid" value="<?= htmlspecialchars($fbclid) ?>" placeholder="fbclid">
      </div>

      <div>
        <label>Date From (submitted_at)</label>
        <input type="date" name="date_from" value="<?= htmlspecialchars($date_from) ?>">
      </div>
      <div>
        <label>Date To (submitted_at)</label>
        <input type="date" name="date_to" value="<?= htmlspecialchars($date_to) ?>">
      </div>

      <div>
        <label>Rows per page</label>
        <input name="limit" value="<?= htmlspecialchars((string)$limit) ?>" placeholder="10/25/50/100/200">
      </div>
    </div>

    <div class="actions" style="margin-top:12px;">
      <button type="submit">Apply Filters</button>

      <a class="btn" href="?<?= htmlspecialchars(buildQuery(['export' => 'csv', 'page' => null])) ?>">
        Export CSV
      </a>

      <a class="btn secondary" href="landing_page_report.php">Reset</a>
    </div>
  </form>
</div>

<div class="card" style="padding:0;">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Lead</th>
        <th>Programme / Institute</th>
        <th>Tracking</th>
        <th>Submitted</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($rows) === 0): ?>
        <tr><td colspan="5" style="padding:16px;">No records found.</td></tr>
      <?php else: ?>
        <?php foreach ($rows as $r): ?>
          <tr>
            <td><?= htmlspecialchars((string)$r['id']) ?></td>
            <td>
              <div><strong><?= htmlspecialchars($r['name']) ?></strong></div>
              <div class="muted"><?= htmlspecialchars($r['email']) ?></div>
              <div class="muted"><?= htmlspecialchars($r['mobile']) ?></div>
              <div class="muted"><?= htmlspecialchars($r['city']) ?> | <?= htmlspecialchars($r['qualification']) ?></div>
            </td>
            <td>
              <div><strong><?= htmlspecialchars($r['programme_name']) ?></strong></div>
              <div class="muted"><?= htmlspecialchars($r['institute_name']) ?></div>
              <div class="muted">Page: <?= htmlspecialchars($r['page_name']) ?></div>
              <div class="muted">ExtraEdge: <?= htmlspecialchars($r['extraegde_id']) ?></div>
            </td>
            <td>
              <div class="muted">utm_source: <?= htmlspecialchars((string)$r['utm_source']) ?></div>
              <div class="muted">utm_medium: <?= htmlspecialchars((string)$r['utm_medium']) ?></div>
              <div class="muted">utm_campaign: <?= htmlspecialchars((string)$r['utm_campaign']) ?></div>
              <div class="muted">gclid: <?= htmlspecialchars((string)$r['gclid']) ?></div>
              <div class="muted">fbclid: <?= htmlspecialchars((string)$r['fbclid']) ?></div>
              <?php if (!empty($r['url'])): ?>
                <div class="muted">url: <a href="<?= htmlspecialchars($r['url']) ?>" target="_blank">open</a></div>
              <?php endif; ?>
            </td>
            <td><?= htmlspecialchars((string)$r['submitted_at']) ?></td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>

  <div style="padding:12px;">
    <div class="pagination">
      <?php
        $start = max(1, $page - 3);
        $end   = min($totalPages, $page + 3);

        if ($page > 1) {
          echo '<a href="?' . htmlspecialchars(buildQuery(['page' => 1])) . '">First</a>';
          echo '<a href="?' . htmlspecialchars(buildQuery(['page' => $page - 1])) . '">Prev</a>';
        }

        for ($p = $start; $p <= $end; $p++) {
          $cls = ($p === $page) ? 'active' : '';
          echo '<a class="'.$cls.'" href="?' . htmlspecialchars(buildQuery(['page' => $p])) . '">' . $p . '</a>';
        }

        if ($page < $totalPages) {
          echo '<a href="?' . htmlspecialchars(buildQuery(['page' => $page + 1])) . '">Next</a>';
          echo '<a href="?' . htmlspecialchars(buildQuery(['page' => $totalPages])) . '">Last</a>';
        }
      ?>
    </div>
  </div>
</div>

</body>
</html>