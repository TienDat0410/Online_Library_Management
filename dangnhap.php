<?php

include_once('./callapi.php');
$make_call = callAPI('POST', 'http://localhost:3002/api/login', json_encode($_POST));
$response = json_decode($make_call, true);
// echo(""+$response);
?>
<?php

    header("Location: http://localhost:8080/DA_CoSo/QL_thuvien/admin/manage-books.php");
    echo "<script>alert('Đăng nhập thanh công');</script>";
    exit; 