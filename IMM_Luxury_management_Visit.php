<?php
include_once('../classes/config.php');
include_once('../classes/campaign.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function backWithError($msg)
{
    $_SESSION['form_error'] = $msg;
    header("Location: IMM_Luxury_management.php");
    exit();
}

function clean($v)
{
    return trim((string)$v);
}
function only_digits($v)
{
    return preg_replace('/\D+/', '', (string)$v);
}

// ---- CAPTCHA CHECK ----
$captcha = clean($_POST['captcha'] ?? '');

if (empty($_SESSION['captcha_code'])) {
    backWithError("Captcha session expired. Please refresh captcha.");
}

if (!empty($_SESSION['captcha_time']) && (time() - $_SESSION['captcha_time'] > 300)) {
    unset($_SESSION['captcha_code'], $_SESSION['captcha_time']);
    backWithError("Captcha expired. Please refresh captcha.");
}

$expected = $_SESSION['captcha_code'];
if ($captcha === '' || strcasecmp($captcha, $expected) !== 0) {
    backWithError("Captcha does not match.");
}

unset($_SESSION['captcha_code'], $_SESSION['captcha_time']); // one-time use

// ---- READ FORM ----
$fullName      = clean($_POST['fullName'] ?? '');
$email         = clean($_POST['email'] ?? '');
$mobile        = only_digits($_POST['contact'] ?? '');
$qualification = clean($_POST['qualification'] ?? '');
$city          = clean($_POST['city'] ?? '');

// ✅ campaign.php expects this sometimes (avoid undefined key warning)
$work_experience = clean($_POST['work_experience'] ?? ''); // keep blank if not used

// ---- VALIDATION ----
$errors = [];
if ($fullName === '' || strlen($fullName) < 3) $errors[] = "Invalid full name";
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email";
if ($mobile === '' || strlen($mobile) !== 10) $errors[] = "Invalid mobile";
if ($qualification === '') $errors[] = "Qualification required";
if ($city === '' || strlen($city) < 2) $errors[] = "City required";

if (!empty($errors)) {
    backWithError(implode(", ", $errors));
}

// ---- UTM ----
$RefUrl = $_SERVER['HTTP_REFERER'] ?? '';
$utm_param = parse_url($RefUrl, PHP_URL_QUERY) ?: '';

$utm_source   = clean($_POST['utm_source'] ?? 'Apply from Website');
$utm_medium   = clean($_POST['utm_medium'] ?? '');
$utm_campaign = clean($_POST['utm_campaign'] ?? '');
$utm_content  = clean($_POST['utm_content'] ?? '');
$utm_term     = clean($_POST['utm_term'] ?? '');
$utm_device   = clean($_POST['utm_device'] ?? '');
$utm_keyword  = clean($_POST['utm_keyword'] ?? '');
$gclid        = clean($_POST['gclid'] ?? '');
$fbclid       = clean($_POST['fbclid'] ?? '');

// ---- INSERT CAMPAIGN ----
$camp_obj = new Campaign();

$tdata = [];
$tdata['user_id']        = $camp_obj->generateUserId();
$tdata['name']           = $fullName;
$tdata['email']          = $email;
$tdata['mobile']         = $mobile;
$tdata['city']           = $city;
$tdata['qualification']  = $qualification;
$tdata['work_experience'] = $work_experience; // ✅ prevents warning

$tdata['programme_name'] = 'Certificate in Luxury Management';
$tdata['institute_name'] = 'MET Institute of Mass Media';
$tdata['course_id']      = '';
$tdata['extraegde_id']   = ''; // put real id if you have
$tdata['inst_id']        = '';

$tdata['RefUrl']         = $RefUrl;
$tdata['utm_param']      = $utm_param;

$tdata['refscript_name'] = $RefUrl;
$tdata['scriptname']     = $_SERVER['SCRIPT_NAME'] ?? '';
$tdata['httpuser_agent'] = $_SERVER['HTTP_USER_AGENT'] ?? '';
$tdata['httpvia']        = $_SERVER['HTTP_VIA'] ?? '';
$tdata['pagevalue_count'] = 1;
$tdata['hitdatetime']    = date('Y-m-d H:i:s');

$tdata['remote_host']    = $_SERVER['REMOTE_HOST'] ?? '';
$tdata['remote_address'] = $_SERVER['REMOTE_ADDR'] ?? '';
$tdata['httpxforwardedfor'] = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? '';

$_SESSION['eduworld_params'] = [
    'mobile' => $mobile,
    'email'  => $email,
    'fname'  => $fullName,
    'lname'  => ''
];

$camp_obj->insertCampaignData($tdata);

// ---- EXTRAAEDGE (same simple style) ----
$leadData = [];
$leadData['Fname'] = $fullName;
$leadData['Lname'] = '';
$leadData['email'] = $email;
$leadData['mobile'] = $mobile;
$leadData['city']  = $city;
$leadData['state'] = '';

$leadData['institute_name'] = $tdata['institute_name'];
$leadData['extraegde_id']   = $tdata['extraegde_id'];
$leadData['leadName']       = 'Ad Film Making';

$leadData['utm_source']   = $utm_source;
$leadData['utm_medium']   = $utm_medium;
$leadData['utm_campaign'] = $utm_campaign;
$leadData['utm_content']  = $utm_content;
$leadData['utm_term']     = $utm_term;
$leadData['utm_device']   = $utm_device;
$leadData['utm_keyword']  = $utm_keyword;
$leadData['gclid']        = $gclid;
$leadData['fbclid']       = $fbclid;

extraaedgeApi($leadData);

// ✅ success redirect
header("Location: IMM_Luxury_management_Res.php");
exit();


// ---- ExtraaEdge API (your same function) ----
function extraaedgeApi($array_data)
{
    $url = 'https://thirdpartyapi.extraaedge.com/api/SaveRequest';
    $ch = curl_init($url);

    $jsonData = [
        "AuthToken"     => 'MET-07-02-2017',
        "Source"        => 'met',
        "FirstName"     => $array_data['Fname'],
        "LastName"      => $array_data['Lname'],
        "Email"         => $array_data['email'],
        "MobileNumber"  => $array_data['mobile'],
        "Course"        => $array_data['institute_name'],
        "Location"      => $array_data['extraegde_id'],
        "LeadType"      => "Digital Paid",
        "LeadSource"    => "MediaDonuts_2026",
        "LeadName"      => $array_data['leadName'],
        "State"         => $array_data['state'],
        "City"          => $array_data['city'],
        "SourceTo"      => $array_data['utm_source'],
        "leadMedium"    => $array_data['utm_medium'],
        "leadCampaign"  => $array_data['utm_campaign'],
        "leadChannel"   => $array_data['utm_content'],
        "Field10"       => $array_data['utm_device'],
        "Entity4"       => $array_data['utm_keyword'],
    ];

    $jsonDataEncoded = json_encode($jsonData);

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_HEADER, false);

    $response = curl_exec($ch);
    $error_msg = curl_error($ch);
    curl_close($ch);

    // optional debug
    debuglog('[ExtraaEdge Request]<pre>' . $jsonDataEncoded . '</pre>');
    debuglog('[ExtraaEdge Response]<pre>' . $response . '</pre>');
    if ($error_msg) debuglog('[ExtraaEdge cURL Error]<pre>' . $error_msg . '</pre>');
}

    function debuglog($stringData){
        $logFile = "log/debuglog_Luxury_Management".date("Y-m-d").".txt";
        $fh = fopen($logFile, 'a');
        fwrite($fh, "\n\n----------------------------------------------------\nDEBUG_START - time: ".date("Y-m-d H:i:s")."\n".$stringData."\nDEBUG_END - time: ".date("Y-m-d H:i:s")."\n----------------------------------------------------\n\n");
        fclose($fh);  
    }
