<?php

$ch=require "init_curl.php";
curl_setopt($ch, CURLOPT_URL, "http://localhost:3002/api/taikhoan");
$response = curl_exec($ch);
curl_close($ch);
$data= json_decode($response, true);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Example rest api client</title>
        <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.classless.min.css">
</head>
<body>
    <main>
    <h1>Repositories</h1>
    <table>
        <thead>
            <th>MaTK</th>
            <th>UserName</th>
            <th>PASSWORD</th>
            <th>Per</th>
        <thead>
            <tbody>
                <?php foreach ($data as $repository): ?>
                    <tr>
                    <td>
                                <?=htmlspecialchars($repository["MaTK"])?>
                            
                         </td>
                         </td>
                         <td>
                                <?=htmlspecialchars($repository["UserName"])?>
                            
                         </td>
                         <td>
                                <?=htmlspecialchars($repository["PassWord"])?>
                            
                         </td>
                         <td>
                                <?=htmlspecialchars($repository["Quyen"])?>
                            
                         </td>
                         <th><a href="EditUser.php?MaTK=<?=$repository["MaTK"]?>">Edit</a></th>   
                         <th><a href="deleteUser.php?MaTK=<?=$repository["MaTK"]?>">Delete</a></th>   
                </tr>

                <?php endforeach; ?> 
</tbody>
</body>
</table>
      <th><a href="newUser.php">New User</a></th>         
</main>
</body>
</html>