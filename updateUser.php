<?php

include_once('./callapi.php');
 $update_plan = callAPI('PUT', 'http://localhost:3002/api/taikhoan', json_encode($_POST));
 $response = json_decode($update_plan, true);
?>
<h1> Edit </h1>
<p>update success
    <a href="ListUser.php">List User</a>
</p>