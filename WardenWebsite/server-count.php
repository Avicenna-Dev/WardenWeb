<?php
// Webhook URL and API key
$webhookURL = "https://api.botghost.com/webhook/1271878772576092180/ktzlisqm45iaut0b51v39v";
$apiKey = "hz0OR0ZlOd9txl3LLGZKGFMzgm7lGpIQgYMz9TbcEEhkZjW2BH";

// Data to be sent in the POST request
$data = [
    "variables" => [
        [
            "name" => "message",
            "variable" => "{event_message}",
            "value" => "HELLO from webhooks"
        ]
    ]
];

// Initialize cURL session
$ch = curl_init($webhookURL);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: $apiKey",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute cURL request
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Close cURL session
curl_close($ch);

// Check if the request was successful
if ($httpCode == 200) {
    echo "Success: Webhook sent successfully!";
} else {
    echo "Fail: Error sending webhook. HTTP Status Code: $httpCode";
}
