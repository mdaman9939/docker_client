<?php
$url = $_GET['url'] ?? '';
if (!filter_var($url, FILTER_VALIDATE_URL)) die('Invalid URL');

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
]);
$content = curl_exec($ch);
$content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
curl_close($ch);

header('Content-Type: ' . $content_type);
header('Access-Control-Allow-Origin: *');
echo $content;
?>