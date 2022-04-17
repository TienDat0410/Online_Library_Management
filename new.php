<?php
/*$headers =[
    "User- Agent: Example REST API Client",
    "Authorization: token"
];

$ch = curl_init("http://localhost:3002/api/book");

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

//curl_exec($ch);

curl_close($ch);

$data= json_decode($response, true);
$con=mysqli_connect("localhost","root","","quanlythuvien");
if(isset($_POST['submit'])){
    $MaSach=mysqli_real_escape_string($con,$_POST['MaSach']);
    $TenSach=mysqli_real_escape_string($con,$_POST['TenSach']);
    $form_data= array(
                        'MaSach' => $MaSach,
                        'TenSach' => $TenSach,
    );
    echo "<pre>";
    print_r($form_data);
}*/
?>
<html>
    <head>
        <title>New Book</title>
    </head>
    <body>
        <div>
                 <form method="post" action="create.php">
                     <p><strong>Ma Sach</strong><br>
                     <input type="text" name="MaSach" id="MaSach">
                     </p>
                     <p><strong>Ten  Sach</strong><br>
                     <input type="text" name="TenSach" id="TenSach">
                     </p>
                     <p><strong>Tac Gia</strong><br>
                     <input type="text" name="TacGia" id="TacGia">
                     </p>
                     <p><strong>MaTheLoai</strong><br>
                     <input type="text" name="MaTheLoai" id="MaTheLoai">
                     </p>
                     <p><strong>MaNXB</strong><br>
                     <input type="text" name="MaNXB" id="MaNXB">
                     </p>
                     <p><strong>DonGia</strong><br>
                     <input type="text" name="DonGia" id="DonGia">
                     </p>
                     <p><strong>SoLuongTon</strong><br>
                     <input type="text" name="SoLuongTon" id="SoLuongTon">
                     </p>
                     <p><strong>SoLanMuon</strong><br>
                     <input type="text" name="SoLanMuon" id="SoLanMuon">
                     </p>
                     <p><strong>TinhTrang</strong><br>
                     <input type="text" name="TinhTrang" id="TinhTrang">
                     </p>

                     <button>Submit</button>
                     </form>    
        </div>
    </body>
</html>

    
  

