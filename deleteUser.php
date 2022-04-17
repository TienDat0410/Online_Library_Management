<?php
$MaTK = $_GET["MaTK"];
//include_once('./callapi.php');
//callAPI('DELETE', 'http://localhost:3002/api/book/delete/'.$_POST['MaSach'], false);
$ch=require "init_curl.php";
curl_setopt($ch,CURLOPT_URL,"http://localhost:3002/api/taikhoan/delete/$MaTK");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_POST));
$response=curl_exec($ch);
//$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
curl_close($ch);
$data=json_decode($response, true);
?>
<html>
    <head>
        <title>Delete Book</title>
    </head>
    <body>
        <div>
            <p>Delete Success
                <a href="ListUser.php">">List User</a>
            </p>  
        </div>
    </body>
</html>