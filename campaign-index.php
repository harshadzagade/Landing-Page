<?php
// campaign-index.php
// Filters + Pagination + CSV Export (same filters)

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
function buildQuery(array $overrides = []) {
  $q = $_GET;
  foreach ($overrides as $k => $v) {
    if ($v === null) unset($q[$k]);
    else $q[$k] = $v;
  }
  return http_build_query($q);
}

// -------------------- INPUTS (FILTERS) --------------------
$name           = getParam('name');
$email          = getParam('email');
$mobile         = getParam('mobile');
$city           = getParam('city');
$qualification  = getParam('qualification');

$programme_name = getParam('programme_name');   // separated
$institute_name = getParam('institute_name');   // separated
$page_name      = getParam('page_name');        // separated
$extraedge_id   = getParam('extraegde_id');

$utm_source   = getParam('utm_source');
$utm_medium   = getParam('utm_medium');
$utm_campaign = getParam('utm_campaign');
$gclid        = getParam('gclid');
$fbclid       = getParam('fbclid');

$date_from = getParam('date_from');
$date_to   = getParam('date_to');

// Pagination
$page  = (int)getParam('page', 1);
$limit = (int)getParam('limit', 25);
if ($page < 1) $page = 1;
if (!in_array($limit, [10, 25, 50, 100, 200], true)) $limit = 25;
$offset = ($page - 1) * $limit;

// Export
$export = getParam('export');

// -------------------- BUILD WHERE CLAUSE --------------------
$where = [];
$params = [];

if ($name !== '') { $where[] = "name LIKE :name"; $params[':name'] = likeParam($name); }
if ($email !== '') { $where[] = "email LIKE :email"; $params[':email'] = likeParam($email); }
if ($mobile !== '') { $where[] = "mobile LIKE :mobile"; $params[':mobile'] = likeParam($mobile); }
if ($city !== '') { $where[] = "city LIKE :city"; $params[':city'] = likeParam($city); }
if ($qualification !== '') { $where[] = "qualification LIKE :qualification"; $params[':qualification'] = likeParam($qualification); }

if ($programme_name !== '') { $where[] = "programme_name LIKE :programme_name"; $params[':programme_name'] = likeParam($programme_name); }
if ($institute_name !== '') { $where[] = "institute_name LIKE :institute_name"; $params[':institute_name'] = likeParam($institute_name); }
if ($page_name !== '') { $where[] = "page_name LIKE :page_name"; $params[':page_name'] = likeParam($page_name); }

if ($extraedge_id !== '') { $where[] = "extraegde_id LIKE :extraegde_id"; $params[':extraegde_id'] = likeParam($extraedge_id); }

if ($utm_source !== '') { $where[] = "utm_source LIKE :utm_source"; $params[':utm_source'] = likeParam($utm_source); }
if ($utm_medium !== '') { $where[] = "utm_medium LIKE :utm_medium"; $params[':utm_medium'] = likeParam($utm_medium); }
if ($utm_campaign !== '') { $where[] = "utm_campaign LIKE :utm_campaign"; $params[':utm_campaign'] = likeParam($utm_campaign); }

if ($gclid !== '') { $where[] = "gclid LIKE :gclid"; $params[':gclid'] = likeParam($gclid); }
if ($fbclid !== '') { $where[] = "fbclid LIKE :fbclid"; $params[':fbclid'] = likeParam($fbclid); }

// Date filters
if ($date_from !== '') {
  $where[] = "submitted_at >= :date_from";
  $params[':date_from'] = $date_from . " 00:00:00";
}
if ($date_to !== '') {
  $where[] = "submitted_at <= :date_to";
  $params[':date_to'] = $date_to . " 23:59:59";
}

$whereSql = count($where) ? ("WHERE " . implode(" AND ", $where)) : "";
$orderSql = "ORDER BY submitted_at DESC, id DESC";

// -------------------- EXPORT CSV --------------------
if ($export === 'csv') {
  $sql = "SELECT
            id, name, email, mobile, city, qualification,
            programme_name, institute_name, page_name, extraegde_id,
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
  fputcsv($out, [
    'id','name','email','mobile','city','qualification',
    'programme_name','institute_name','page_name','extraegde_id',
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

// -------------------- COUNT + DATA --------------------
$countSql = "SELECT COUNT(*) AS total FROM landing_page {$whereSql}";
$countStmt = $pdo->prepare($countSql);
$countStmt->execute($params);
$totalRows = (int)$countStmt->fetch()['total'];
$totalPages = max(1, (int)ceil($totalRows / $limit));

$dataSql = "SELECT
              id, name, email, mobile, city, qualification,
              programme_name, institute_name, page_name, extraegde_id,
              utm_source, utm_medium, utm_campaign,
              gclid, fbclid, url, submitted_at
            FROM landing_page
            {$whereSql}
            {$orderSql}
            LIMIT :limit OFFSET :offset";

$dataStmt = $pdo->prepare($dataSql);
foreach ($params as $k => $v) $dataStmt->bindValue($k, $v);
$dataStmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$dataStmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$dataStmt->execute();
$rows = $dataStmt->fetchAll();

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Landing Page Leads Report</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    *{box-sizing:border-box}
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif; margin:16px; background:#f3f4f6; color:#111827;}
    .wrap{max-width:1200px; margin:0 auto;}
    .topbar{display:flex; align-items:flex-start; justify-content:space-between; gap:12px; flex-wrap:wrap;}
    .title{margin:0; font-size:22px; font-weight:800;}
    .sub{color:#6b7280; font-size:13px; margin-top:4px;}
    .card{background:#fff; padding:16px; border-radius:14px; box-shadow:0 6px 22px rgba(0,0,0,.06); margin-bottom:14px;}
    .grid{display:grid; grid-template-columns: repeat(4, 1fr); gap:10px;}
    @media(max-width:1100px){ .grid{grid-template-columns: repeat(2, 1fr);} }
    @media(max-width:600px){ .grid{grid-template-columns: 1fr;} }
    label{font-size:12px; color:#374151; font-weight:600;}
    input, select{width:100%; padding:10px 11px; border:1px solid #e5e7eb; border-radius:10px; outline:none;}
    input:focus{border-color:#93c5fd; box-shadow:0 0 0 4px rgba(147,197,253,.35);}
    .actions{display:flex; gap:10px; flex-wrap:wrap; align-items:center; margin-top:12px;}
    button,a.btn{padding:10px 14px; border-radius:12px; border:0; cursor:pointer; text-decoration:none; display:inline-flex; align-items:center; gap:8px; font-weight:700;}
    button{background:#2563eb; color:white;}
    a.btn{background:#16a34a; color:white;}
    a.btn.secondary{background:#6b7280;}
    .pill{background:#eef2ff; color:#3730a3; padding:6px 10px; border-radius:999px; font-size:12px; font-weight:700;}
    .tablewrap{overflow:auto; border-radius:14px; border:1px solid #e5e7eb;}
    table{width:100%; border-collapse:separate; border-spacing:0; background:#fff;}
    th,td{padding:12px; border-bottom:1px solid #eef2f7; font-size:13px; vertical-align:top; white-space:nowrap;}
    th{background:#f9fafb; text-align:left; font-size:12px; letter-spacing:.02em; text-transform:uppercase; color:#374151;}
    tr:hover td{background:#fafafa;}
    .muted{color:#6b7280; font-size:12px;}
    .strong{font-weight:800;}
    .col-wide{white-space:normal; min-width:260px;}
    .col-mid{white-space:normal; min-width:220px;}
    .pagination{display:flex; gap:8px; flex-wrap:wrap; margin-top:12px;}
    .pagination a{padding:8px 10px; background:#fff; border:1px solid #e5e7eb; border-radius:10px; text-decoration:none; color:#111827; font-weight:700;}
    .pagination a.active{background:#111827; color:#fff; border-color:#111827;}
  </style>
</head>
<body>
<div class="wrap">

  <div class="card">
    <div class="topbar">
      <div>
        <h1 class="title">Landing Page Leads</h1>
        <div class="sub">Filters • Export CSV • Pagination</div>
      </div>
      <div class="pill">
        Total: <?= htmlspecialchars((string)$totalRows) ?> • Page <?= htmlspecialchars((string)$page) ?>/<?= htmlspecialchars((string)$totalPages) ?>
      </div>
    </div>
  </div>

  <div class="card">
    <form method="get">
      <div class="grid">
        <div>
          <label>Name</label>
          <input name="name" value="<?= htmlspecialchars($name) ?>" placeholder="e.g. Rahul">
        </div>
        <div>
          <label>Email</label>
          <input name="email" value="<?= htmlspecialchars($email) ?>" placeholder="e.g. abc@gmail.com">
        </div>
        <div>
          <label>Mobile</label>
          <input name="mobile" value="<?= htmlspecialchars($mobile) ?>" placeholder="e.g. 9876543210">
        </div>
        <div>
          <label>City</label>
          <input name="city" value="<?= htmlspecialchars($city) ?>" placeholder="e.g. Pune">
        </div>

        <div>
          <label>Qualification</label>
          <input name="qualification" value="<?= htmlspecialchars($qualification) ?>" placeholder="e.g. BSc / HSC">
        </div>
        <div>
          <label>Programme Name</label>
          <input name="programme_name" value="<?= htmlspecialchars($programme_name) ?>" placeholder="e.g. MBA">
        </div>
        <div>
          <label>Institute Name</label>
          <input name="institute_name" value="<?= htmlspecialchars($institute_name) ?>" placeholder="e.g. MET Institute">
        </div>
        <div>
          <label>Page Name</label>
          <input name="page_name" value="<?= htmlspecialchars($page_name) ?>" placeholder="e.g. mba-2026">
        </div>

        <div>
          <label>ExtraEdge ID</label>
          <input name="extraegde_id" value="<?= htmlspecialchars($extraedge_id) ?>" placeholder="extraegde_id">
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
          <label>Date From</label>
          <input type="date" name="date_from" value="<?= htmlspecialchars($date_from) ?>">
        </div>
        <div>
          <label>Date To</label>
          <input type="date" name="date_to" value="<?= htmlspecialchars($date_to) ?>">
        </div>

        <div>
          <label>Rows per page</label>
          <input name="limit" value="<?= htmlspecialchars((string)$limit) ?>" placeholder="10/25/50/100/200">
        </div>
      </div>

      <div class="actions">
        <button type="submit">Apply Filters</button>

        <a class="btn" href="?<?= htmlspecialchars(buildQuery(['export' => 'csv', 'page' => null])) ?>">
          Export CSV
        </a>

        <a class="btn secondary" href="campaign-index.php">Reset</a>
      </div>
    </form>
  </div>

  <div class="card">
    <div class="tablewrap">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th class="col-wide">Lead</th>
            <th class="col-mid">Programme</th>
            <th class="col-mid">Institute</th>
            <th class="col-mid">Page Name</th>
            <th class="col-mid">Tracking</th>
            <th>Submitted</th>
          </tr>
        </thead>
        <tbody>
        <?php if (!$rows): ?>
          <tr><td colspan="7" style="padding:16px;">No records found.</td></tr>
        <?php else: ?>
          <?php foreach ($rows as $r): ?>
            <tr>
              <td><?= htmlspecialchars((string)$r['id']) ?></td>

              <td class="col-wide">
                <div class="strong"><?= htmlspecialchars($r['name']) ?></div>
                <div class="muted"><?= htmlspecialchars($r['email']) ?></div>
                <div class="muted"><?= htmlspecialchars($r['mobile']) ?></div>
                <div class="muted"><?= htmlspecialchars($r['city']) ?> • <?= htmlspecialchars($r['qualification']) ?></div>
                <div class="muted">ExtraEdge: <?= htmlspecialchars($r['extraegde_id']) ?></div>
              </td>

              <td class="col-mid">
                <div class="strong"><?= htmlspecialchars($r['programme_name']) ?></div>
              </td>

              <td class="col-mid">
                <div class="strong"><?= htmlspecialchars($r['institute_name']) ?></div>
              </td>

              <td class="col-mid">
                <div class="strong"><?= htmlspecialchars($r['page_name']) ?></div>
                <?php if (!empty($r['url'])): ?>
                  <div class="muted">URL: <a href="<?= htmlspecialchars($r['url']) ?>" target="_blank">Open</a></div>
                <?php endif; ?>
              </td>

              <td class="col-mid">
                <div class="muted">utm_source: <?= htmlspecialchars((string)$r['utm_source']) ?></div>
                <div class="muted">utm_medium: <?= htmlspecialchars((string)$r['utm_medium']) ?></div>
                <div class="muted">utm_campaign: <?= htmlspecialchars((string)$r['utm_campaign']) ?></div>
                <div class="muted">gclid: <?= htmlspecialchars((string)$r['gclid']) ?></div>
                <div class="muted">fbclid: <?= htmlspecialchars((string)$r['fbclid']) ?></div>
              </td>

              <td><?= htmlspecialchars((string)$r['submitted_at']) ?></td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
      </table>
    </div>

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