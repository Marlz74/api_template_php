<?php
// EXECUTED EVERY 5 MINUTES
function getBaseURL()
{
    return "BASE_URL"; // Replace with your actual base URL
}

function sendPostRequest($endpoint, $logFile=null)
{
    $baseURL = getBaseURL();
    $url = $baseURL . $endpoint;

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST => 1,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false
    ]);
    $response = curl_exec($ch);
    $error = curl_errno($ch) ? curl_error($ch) : null;
    curl_close($ch);

    // Log response or error for debugging purposes
    if($logFile){
        $logData = '[' . date("Y-m-d H:i:s") . '] ' . ($error ?: 'Response: ' . $response) . PHP_EOL;
        file_put_contents($logFile, $logData, FILE_APPEND);
    }

    return $response ?: $error;
}



function request()
{
    // Replace with your actual endpoints
    sendPostRequest('api/cron', 'cronlogfile.txt');
    
}

// Execute the processes
request();
