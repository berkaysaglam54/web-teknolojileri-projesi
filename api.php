<?php
// Sayfanın JSON formatında olduğunu ve herkesin erişebileceğini belirtiyoruz
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$url = 'https://api.football-data.org/v4/competitions/CL/matches';
$apiKey = '12f9bf874c944a998cbc0abd05b92d94';

// cURL ile dış sunucuya (football-data) güvenli istek atıyoruz
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-Auth-Token: ' . $apiKey]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 

$response = curl_exec($ch);
curl_close($ch);

// Gelen veriyi  siteye aktarıyoruz
echo $response;
?>