<?php

include_once('./callapi.php');
 $make_call = callAPI('POST', 'http://localhost:3002/api/book', json_encode($_POST));
 $response = json_decode($make_call, true);
 //$errors   = $response['response']['errors'];
 //$data     = $response['response']['data'][0];

/*$ch = require "init_curl.php";
curl_setopt($ch, CURLOPT_URL, "http://localhost:3002/api/book");
//$ch = curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_POST));
$response = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
curl_close($ch);
$data=json_decode($response, true);
if($status_code === 422){
    echo "Invalid data: ";
    print_r($data["errors"]);
    exit;
}

if($status_code !== 201){
    echo "Unexpected status code: $status_code ";
    var_dump($data);
    exit;
}*/
?>
<h1> New </h1>
<p>success
    <a href="getcontent.php">show</a>
</p>