<?php

include_once('./callapi.php');
 $update_plan = callAPI('PUT', 'http://localhost:3002/api/book/'.$_POST['MaSach'], json_encode($_POST));
 $response = json_decode($update_plan, true);
?>
<h1> Edit </h1>
<p>update success
    <a href="getcontent.php">show</a>
</p>