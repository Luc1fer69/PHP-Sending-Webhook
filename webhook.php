<?php
$webhookurl = "WEBHOOK URL HERE";

$json_data = json_encode([

    // Username
    "username" => "𝘿𝙚𝙫𝙞𝙡",

    "content" => "Github"

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
$response = curl_exec( $ch );
curl_close( $ch );
?>
