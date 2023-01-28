<?php

$access_token = 'YOUR_TOKEN';

$headers = array(
    'Authorization: token ' . $access_token
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/users/USERNAME');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);

$user = json_decode($response);

print_r($user);
