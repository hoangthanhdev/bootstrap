<?php
$url="https://ok.ru/video/1062699404022";
$ch = curl_init(); /*khoi tao*/
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, $url); /*tat tinh nang tu echo cua curl*/
$data = curl_exec($ch);
curl_close($ch);
echo $data;
?>