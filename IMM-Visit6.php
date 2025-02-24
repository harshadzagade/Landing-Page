<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$mobile = str_replace(' ', '', $_POST['mobile']);
$city = $_POST['city'];
$qualification = $_POST['qualification'];
$page_name = $_POST['page_name'];
$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_campaign = $_POST['utm_campaign'];
$utm_adgroup = $_POST['utm_adgroup'];
$utm_device = $_POST['utm_device'];
$utm_content = $_POST['utm_content'];
$utm_keyword = $_POST['utm_keyword'];
$utm_adposition = $_POST['utm_adposition'];
$utm_placement = $_POST['utm_placement'];
$utm_matchtype = $_POST['utm_matchtype'];
$utm_creative = $_POST['utm_creative'];
$gclid = $_POST['gclid'];
$fbclid = $_POST['fbclid'];
$url = $_POST['url'];
$institute_name = "Institute of Mass Media";

if (isset($_POST['Course'])) {
    switch ($_POST['Course']) {
        case "PGP MCMM - Advertising & PR":
            $programme_name = 'PGP MCMM - Advertising & PR';
            $extraegde_id ='28';
            break;
        case "PGP MCMM - Entertainment":
            $programme_name = 'PGP MCMM - Entertainment';
            $extraegde_id ='29';
            break;
        case "PGP MCMM - Journalism":
            $programme_name = 'PGP MCMM - Journalism';
            $extraegde_id ='31';
            break;
        case "PGP MCMM - Digital Marketing":
            $programme_name = 'PGP MCMM - Digital Marketing';
            $extraegde_id ='30';
            break;
    }  //  Displaying Selected Value
}

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
}else {
    echo "Database connection established successfully!";
}

//Create Table in Database
// CREATE DATABASE IF NOT EXISTS met_db;

// CREATE TABLE landing_page (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, mobile VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, qualification VARCHAR(255) NOT NULL, programme_name VARCHAR(255) NOT NULL, extraegde_id VARCHAR(255) NOT NULL, institute_name VARCHAR(255) NOT NULL, page_name VARCHAR(255) NOT NULL, utm_source VARCHAR(255), utm_medium VARCHAR(255), utm_campaign VARCHAR(255), utm_adgroup VARCHAR(255), utm_device VARCHAR(255), utm_term VARCHAR(255), gclid VARCHAR(255), fbclid VARCHAR(255), url TEXT, submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

// CREATE TABLE landing_page (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255), email VARCHAR(255), submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize form data
    $fname = $conn->real_escape_string($_POST['fname']);
    $email = $conn->real_escape_string($_POST['email']);
    $mobile = $conn->real_escape_string($_POST['mobile']);
    $city = $conn->real_escape_string($_POST['city']);
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
    $utm_content = $conn->real_escape_string($_POST['utm_content']);
    $utm_keyword = $conn->real_escape_string($_POST['utm_keyword']);
    $utm_adposition = $conn->real_escape_string($_POST['utm_adposition']);
    $utm_placement = $conn->real_escape_string($_POST['utm_placement']);
    $utm_matchtype = $conn->real_escape_string($_POST['utm_matchtype']);
    $utm_creative = $conn->real_escape_string($_POST['utm_creative']);
    $gclid = $conn->real_escape_string($_POST['gclid']);
    $fbclid = $conn->real_escape_string($_POST['fbclid']);
    $url = $conn->real_escape_string($_POST['url']);

    // SQL query to insert data
        $sql = "INSERT INTO landing_page (name, email, mobile, city, qualification, programme_name, extraegde_id, institute_name, page_name, utm_source, utm_medium, utm_campaign, utm_adgroup, utm_device, utm_term, utm_content, utm_keyword, utm_adposition, utm_placement, utm_matchtype, utm_creative, gclid, fbclid, url) VALUES ('$fname', '$email', '$mobile', '$city', '$qualification', '$programme_name', '$extraegde_id', '$institute_name', '$page_name', '$utm_source', '$utm_medium', '$utm_campaign', '$utm_adgroup', '$utm_device', '$utm_term', '$utm_content', '$utm_keyword', '$utm_adposition', '$utm_placement', '$utm_matchtype', '$utm_creative', '$gclid', '$fbclid', '$url')";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        // echo "Data submitted successfully!";
        // URLs to be requested
        $urls = [
            'https://docs.google.com/forms/d/e/1FAIpQLSeoVCr1fJ03gq5ogwXSRy9B1uPmAAahjNUZ4s8xuswLB9q28Q/formResponse',
            'https://thirdpartyapi.extraaedge.com/api/SaveRequest'
        ];



        // Data to be sent with each request
        $postData = [
            [
                'entry.1265372331' => $fname,
                'entry.1003163131' => $email,
                'entry.943132111' => $mobile,
                'entry.839580368' => $city,
                'entry.1135860763' => $qualification,
                'entry.1107844979' => $programme_name,
                'entry.1694248235' => $page_name,
                'entry.104902418' => $utm_source,
                'entry.31898510' => $utm_medium,
                'entry.2016435120' => $utm_campaign,
                'entry.1541579396' => $utm_adgroup,
                'entry.1378479939' => $utm_device,
                'entry.1060400701' => $utm_term,
                'entry.1083883795' => $utm_content,
                'entry.419177250' => $utm_keyword,
                'entry.981440918' => $utm_adposition,
                'entry.249485828' => $utm_placement,
                'entry.1712193093' => $utm_matchtype,
                'entry.164262656' => $utm_creative,
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
                    'City' => $city,
                    'highestQualification' => $qualification,
                    'Course' => $institute_name,
                    'LeadName' => $page_name, 
                    'LeadType' => "Print Media",
                    'LeadSource' => "Newspaper",
                    'Location' => $extraegde_id,
                    'SourceTo' => $utm_source,
                    'leadMedium' => $utm_medium,
                    'leadCampaign' => $utm_campaign,
                    'leadChannel' => $utm_content,
                    'Entity4' => $utm_keyword,
                    'Field9' => $utm_adposition,
                    'Field11' => $utm_placement,
                    'Field2' => $utm_matchtype,
                    'Field4' => $utm_creative,
                    // 'Field9' => $utm_adgroup,
                    'Field10' => $utm_device,
                    // '' => $utm_term,
                    // '' => $gclid,
                    // '' => $fbclid,
                    // '' => $url,
                ]
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
                // Process success but do not echo yet
                $redirect = true;
                break; // Redirect after the first success
            } else {
                // Optionally log failures, but avoid outputting to the browser
                error_log("Request to {$result['url']} failed with error: {$result['error']}");
            }
        }
        // Redirect if success
        if ($redirect) {
            header("Location: IMM-Res6.php");
            exit; // Stop further script execution
        }

        // If not redirecting, optionally output failures
        foreach ($responses as $result) {
            if (!$result['success']) {
                //echo "Request to {$result['url']} failed with error:\n";
                //echo $result['error'] . "\n\n";
            }
        }
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
