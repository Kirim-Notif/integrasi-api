<?php 
    $ch = curl_init( "http://localhost:8080/api/m/login" );
    
    $arr_post = array(
        "email" => "",
        "password" => "",
    );

    $payload = json_encode($arr_post);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    $result = curl_exec($ch);
    curl_close($ch);
    echo "<pre>$result</pre>";
?>