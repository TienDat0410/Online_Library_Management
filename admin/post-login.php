<?php

include_once('./callapi.php');
$make_call = callAPI('POST', 'http://localhost:3002/api/login', json_encode($_POST));
if(isset($make_call)){
    $response = json_decode($make_call, true);
    echo "<script>alert('Đăng nhập thanh công');</script>";
    header('Location: manage-books.php');
    
}else{
    echo "<script>alert('Đăng nhập thất bại');</script>";
}



?>
