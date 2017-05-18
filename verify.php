<?php
$access_token = 'gnl6UsOulB/NHH9tPAZr3M4IScx105m2aJ5th1yKBHD5iTLK7POa7xwOuvE3LmFfNgAfa9CPtK4oilK7zGO4n1FNrjhHS0nHwGA7mQ84f89fKHhBZMLzQeADfPz7jRNjacr2+8SQvuSk7F40kKsLfQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
