<?php

include_once('./callapi.php');
$make_call = callAPI('POST', 'http://localhost:3002/api/register', json_encode($_POST));
$response = json_decode($make_call, true);
?>
<p>success
    <a href="ListUser.php">show</a>
</p>