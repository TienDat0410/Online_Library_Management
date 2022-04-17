<?php
$MaSach = $_GET["MaSach"];
$ch = require "init_curl.php";

//$ch = curl_init();

//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_URL, "http://localhost:3002/api/book/$MaSach");
$response = curl_exec($ch);

//curl_exec($ch);

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
    <h1>Repository</h1>
    <dl>
        <dt>ID</dt>
        <dd><?= $data["MaSach"]?></dd>
        <dt>Name Book</dt>
        <dd><?= $data["TenSach"]?></dd>
        <dt>Author</dt>
        <dd><?= $data["TacGia"]?></dd>
        <dt>IDTheLoai</dt>
        <dd><?= $data["MaTheLoai"]?></dd>
        <dt>IDNXB</dt>
        <dd><?= $data["MaNXB"]?></dd>
        <dt>Price</dt>
        <dd><?= $data["DonGia"]?></dd>
        <dt>SoLuongTon</dt>
        <dd><?= $data["SLTon"]?></dd>
        <dt>Hinh anh</dt>
        <dd><?= $data["HInhAnh"]?></dd>

    </dl>
    <a href="edit.php?MaSach=<?=$data["MaSach"]?>">Edit</a>
    <form method="post" action="delete1.php">
        <input type="hidden" name="MaSach" value="<?= $data["MaSach"] ?>">
        <button>Delete</button>
</form>
</main>
</body>
</html>
