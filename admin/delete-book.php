<?php
//include_once('./callapi.php');
//callAPI('DELETE', 'http://localhost:3002/api/book/delete/'.$_POST['MaSach'], false);
$ch = require "init_curl.php";
curl_setopt($ch, CURLOPT_URL, "http://localhost:3002/api/book/delete/{$_POST['MaSach']}");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_POST));
$response = curl_exec($ch);
if (isset($response)) {
    curl_close($ch);
    $data = json_decode($response, true);
    header("Location: manage-books.php");
}else {
    header("Location: book_detail.php");
}

?>
