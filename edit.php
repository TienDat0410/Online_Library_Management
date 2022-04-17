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
<h1>Edit book</h1>
<form method="post" action="update.php">
     
    <input type="hidden" name="MaSach" value="<?= $data["MaSach"] ?>"

    
    <p><strong>Ten  Sach</strong><br>
    <input type="text" name ="TenSach" id="TenSach" value="<?= $data["TenSach"] ?>">
    </p>
    <p><strong>Tac Gia</strong><br>
    <input type="text" name ="TacGia" id="TacGia" value="<?= $data["TacGia"] ?>">
    </p>
    <p><strong>MaTheLoai</strong><br>
    <input type="text" name ="MaTheLoai" id="MaTheLoai" value="<?= $data["MaTheLoai"] ?>">
    </p>
    <p><strong>MaNXB</strong><br>
    <input type="text" name ="MaNXB" id="MaNXB" value="<?= $data["MaNXB"] ?>">
    </p>
    <p><strong>DonGia</strong><br>
    <input type="text" name ="DonGia" id="DonGia" value="<?= $data["DonGia"] ?>">
    </p>
    <p><strong>SoLuongTon</strong><br>
    <input type="text" name ="SLTon" id="SLTon" value="<?= $data["SLTon"] ?>">
    </p>
    <p><strong>Hinh anh</strong><br>
    <input type="text" name ="HInhAnh" id="HInhAnh" value="<?= $data["HInhAnh"] ?>">
    </p>

    <button>Submit</button>
                
</form> 