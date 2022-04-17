<?php
$MaTK = $_GET["MaTK"];

$ch = require "init_curl.php";
curl_setopt($ch, CURLOPT_URL, "http://localhost:3002/api/taikhoan/delete/$MaTK");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_POST));
$response = curl_exec($ch);
if (isset($response)) {
    curl_close($ch);
    $data = json_decode($response, true);
    echo ("<script>alert('Deleted user success')</script>");
    echo ("<script>window.location = 'list-user.php';</script>");
    // header('Location: list-user.php');
}else{
    echo ("<script>alert('Deleted user false')</script>");
    echo ("<script>window.location = 'delete-user.php';</script>");
}

?>
