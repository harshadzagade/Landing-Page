<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$mobile = str_replace(' ', '', $_POST['mobile']);
$city = $_POST['college_name']; // Map college name to city for DB insertion
$qualification = $_POST['qualification'];
$page_name = $_POST['page_name'];
$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_campaign = $_POST['utm_campaign'];
$utm_adgroup = $_POST['utm_adgroup'];
$utm_device = $_POST['utm_device'];
$utm_term = $_POST['utm_term'];
$gclid = $_POST['gclid'];
$fbclid = $_POST['fbclid'];
$url = $_POST['url'];
$institute_name = "Institute of Mass Media";

$programme_name = 'Attention Economy Workshop';
$extraegde_id = '159'; // Default extraedge ID for this campaign

// Database configuration
$servername = "localhost"; // Change if needed
$username = "root";        // Database username
$password = "root";        // Database password
$dbname = "met_db";  // Database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connection established successfully!";
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize form data
    $fname = $conn->real_escape_string($_POST['fname']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $city = $conn->real_escape_string($_POST['college_name']); // Capture college name in city column
    $qualification = $conn->real_escape_string($_POST['qualification']);
    $programme_name = $conn->real_escape_string($programme_name);
    $extraegde_id = $conn->real_escape_string($extraegde_id);
    $institute_name = $conn->real_escape_string($institute_name);
    $page_name = $conn->real_escape_string($_POST['page_name']);
    $utm_source = $conn->real_escape_string($_POST['utm_source']);
    $utm_medium = $conn->real_escape_string($_POST['utm_medium']);
    $utm_campaign = $conn->real_escape_string($_POST['utm_campaign']);
    $utm_adgroup = $conn->real_escape_string($_POST['utm_adgroup']);
    $utm_device = $conn->real_escape_string($_POST['utm_device']);
    $utm_term = $conn->real_escape_string($_POST['utm_term']);
    $gclid = $conn->real_escape_string($_POST['gclid']);
    $fbclid = $conn->real_escape_string($_POST['fbclid']);
    $url = $conn->real_escape_string($_POST['url']);

    // SQL query to insert data
    $sql = "INSERT INTO landing_page (name, email, mobile, city, qualification, programme_name, extraegde_id, institute_name, page_name, utm_source, utm_medium, utm_campaign, utm_adgroup, utm_device, utm_term, gclid, fbclid, url) VALUES ('$fname', '$email', '$mobile', '$city', '$qualification', '$programme_name', '$extraegde_id', '$institute_name', '$page_name', '$utm_source', '$utm_medium', '$utm_campaign', '$utm_adgroup', '$utm_device', '$utm_term', '$gclid', '$fbclid', '$url')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        // URLs to be requested
        $urls = [
            'https://docs.google.com/forms/d/e/1FAIpQLSdfJNuCYx9hvHkOQjaHspQw9gyzeh19gFn-KD6xRYIJg5uGuQ/formResponse',
            'https://thirdpartyapi.extraaedge.com/api/SaveRequest'
        ];

        // Data to be sent with each request
        $postData = [
            [
                'entry.1265372331' => $fname,
                'entry.1003163131' => $email,
                'entry.943132111' => $mobile,
                'entry.839580368' => $city, // stores college name
                'entry.1135860763' => $qualification,
                'entry.1107844979' => $programme_name,
                'entry.1694248235' => $page_name,
                'entry.104902418' => $utm_source,
                'entry.31898510' => $utm_medium,
                'entry.2016435120' => $utm_campaign,
                'entry.1541579396' => $utm_adgroup,
                'entry.1378479939' => $utm_device,
                'entry.1060400701' => $utm_term,
                'entry.403620755' => $utm_content,
                'entry.1452753937' => $utm_keyword,
                'entry.1392899682' => $utm_adposition,
                'entry.361234515' => $utm_placement,
                'entry.682284697' => $utm_matchtype,
                'entry.1512719542' => $utm_creative,
                'entry.1268481534' => $gclid,
                'entry.1550907532' => $fbclid,
                'entry.1948316156' => $url,
            ],
            json_encode(
                [
                    'AuthToken' => 'MET-07-02-2017',
                    'Source' => 'met',
                    'FirstName' => $fname,
                    'Email' => $email,
                    'MobileNumber' => $mobile,
                    'City' => $city, // stores college name
                    'highestQualification' => $qualification,
                    'Course' => $institute_name,
                    'LeadName' => $page_name,
                    'LeadType' => "Digital Paid",
                    'LeadSource' => "LogicLoop",
                    'Location' => $extraegde_id,
                    'SourceTo' => $utm_source,
                    'leadMedium' => $utm_medium,
                    'leadCampaign' => $utm_campaign,
                    'leadChannel' => $utm_term,
                    'Field10' => $utm_device,
                ],
            )
        ];

        $jsonEncodedData = $postData[1];

        debuglog('[Request] #::<pre>' . $jsonEncodedData . '</pre>');

        // Initialize the multi cURL handler
        $multiCurl = curl_multi_init();

        // Array to store individual cURL handles
        $curlHandles = [];

        // Create individual cURL handles and add them to the multi handler
        foreach ($urls as $i => $url) {
            $curlHandles[$i] = curl_init($url);
            curl_setopt($curlHandles[$i], CURLOPT_RETURNTRANSFER, true); // Return the response as a string
            curl_setopt($curlHandles[$i], CURLOPT_TIMEOUT, 10);         // Optional: Set timeout
            curl_setopt($curlHandles[$i], CURLOPT_POST, true);          // Indicate POST request
            curl_setopt($curlHandles[$i], CURLOPT_POSTFIELDS, $postData[$i]); // Attach POST data
            curl_multi_add_handle($multiCurl, $curlHandles[$i]);
        }

        // Execute all requests simultaneously
        do {
            $status = curl_multi_exec($multiCurl, $active);
            if ($active) {
                curl_multi_select($multiCurl);
            }
        } while ($active && $status == CURLM_OK);

        // Collect responses and errors
        $responses = [];
        foreach ($curlHandles as $i => $ch) {
            $errorNo = curl_errno($ch);     // Get cURL error number
            $error = curl_error($ch);       // Get cURL error message
            $responses[$i] = [
                'url' => $urls[$i],
                'response' => $errorNo === 0 ? curl_multi_getcontent($ch) : null,
                'error' => $errorNo !== 0 ? $error : null,
                'success' => $errorNo === 0
            ];

            curl_multi_remove_handle($multiCurl, $ch); // Remove the handle
            curl_close($ch);                           // Close the handle
        }

        $response = $responses[1]['response'];
        $error_msg = $responses[1]['error'];

        debuglog('[Response Success] ::<pre>' . $response . '</pre>');
        debuglog('[Response Failer] ::<pre>' . $error_msg . '</pre>');

        // Close the multi cURL handler
        curl_multi_close($multiCurl);

        // Display results
        $redirect = false;
        foreach ($responses as $result) {
            if ($result['success']) {
                $redirect = true;
                break; // Redirect after the first success
            } else {
                error_log("Request to {$result['url']} failed with error: {$result['error']}");
            }
        }
        
        // Redirect if success to IMM-Workshop-Res.php
        if ($redirect) {
            header("Location: IMM-Workshop-Res.php");
            exit; // Stop further script execution
        }

        // Fallback redirect in case of curl failures (still redirect to thank you page since DB saved successfully)
        header("Location: IMM-Workshop-Res.php");
        exit;
    } else {
        error_log("Error: " . $sql . "<br>" . $conn->error);
    }
}

$conn->close();

function debuglog($stringData)
{
    $logFile = "log/debuglog_" . date("Y-m-d") . ".txt";
    $fh = fopen($logFile, 'a');
    fwrite($fh, "\n\n----------------------------------------------------\nDEBUG_START - time: " . date("Y-m-d H:i:s") . "\n" . $stringData . "\nDEBUG_END - time: " . date("Y-m-d H:i:s") . "\n----------------------------------------------------\n\n");
    fclose($fh);
}
