<?php

include_once('./callapi.php');

    $make_call = callAPI('POST', 'http://localhost:3002/api/book', json_encode($_POST));
    if(isset($make_call)){
    
        $response = json_decode($make_call, true);
        header("Location: manage-books.php");
    }else {
        header("Location: add-book.php");
    }
 
?>
