<?php

include_once('./callapi.php');
$make_call = callAPI('POST', 'http://localhost:3002/api/login', json_encode($_POST));
$response = json_decode($make_call, true);
?>
<?php 
    if ($response["data"] != "invalid tai khoan or password") {
        echo ("<script>alert('Login successful!')</script>");
        echo ("<script>window.location = 'manage-books.php';</script>");
    //  exit;   
} else {
         echo ("<script>alert('invalid username or password!')</script>");
        echo ("<script>window.location = 'adminlogin.php';</script>");
        }

?>