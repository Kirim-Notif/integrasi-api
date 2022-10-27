<?php

$url = "https://appwa.kirimnotif.id/api/m/send/text";

$token = "";

$file_name_with_full_path = $_SERVER['DOCUMENT_ROOT']."/image.jpg";

$postData = array(
    "nopengirim" => "",
    "notujuan" => "",
    "pesan" => "",
    "file" => curl_file_create($file_name_with_full_path),
    "tipe" => "image",
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token));
$response = curl_exec($ch);
curl_close($ch);


?>