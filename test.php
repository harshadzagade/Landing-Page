<?php
if (extension_loaded('mysqli')) {
    echo 'MySQLi is enabled!';


if (function_exists('curl_multi_init')) {
    echo "cURL is enabled and supports curl_multi_init.";
} else {
    echo "cURL is not enabled.";
}

// Test JSON
if (function_exists('json_encode')) {
    echo "JSON is enabled.\n";
} else {
    echo "JSON is not enabled.\n";
}

// Test Date
if (function_exists('date')) {
    echo "Date is enabled.\n";
} else {
    echo "Date is not enabled.\n";
}


} else {
    echo 'MySQLi is not enabled!';
}

?>