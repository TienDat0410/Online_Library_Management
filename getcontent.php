<?php

$ch=require "init_curl.php";
curl_setopt($ch, CURLOPT_URL, "http://localhost:3002/api/book");
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
            <th>Name Book</th>
            <th>Author</th>
            <th>Price</th>
            <th>Image</th>
        <thead>
            <tbody>
                <?php foreach ($data as $repository): ?>
                    <tr>
                    <td>
                            <a href="show.php?MaSach=<?= $repository["MaSach"]?>">
                                <?= $repository["TenSach"] ?>
                            </a>
                         </td>
                         <td>
                                <?=htmlspecialchars($repository["TacGia"])?>
                            
                         </td>
                         <td>
                                <?=htmlspecialchars($repository["DonGia"])?>
                            
                         </td>
                         <td>
                             <img src="<?=htmlspecialchars($repository["HinhAnh"])?>" width="150px" height="150px"/>
                                
                            
                         </td>
                </tr>

                <?php endforeach; ?> 
</tbody>
</table>
      <th><a href="newBD.php">New</a></th>      
      
      <!-- <th><a href="newQD.php">New quy dinh</a></th>         -->
                </main>
</body>
</html>