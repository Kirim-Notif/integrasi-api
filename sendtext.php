<?php 
    $ch = curl_init( "https://appwa.kirimnotif.id/api/m/send/text" );
    
    $arr_post = array(
        "nopengirim" => "",
        "notujuan" => "",
        "pesan" => "",
        "tipe" => "text",
    );
    $token = "";


    $payload = json_encode($arr_post);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization: Bearer '.$token));
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    $result = curl_exec($ch);
    curl_close($ch);
    echo "<pre>$result</pre>";
?>