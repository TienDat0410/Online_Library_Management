<?php

$MaSach = $_GET["MaSach"];
$ch = require "./init_curl.php";

curl_setopt($ch, CURLOPT_URL, "http://localhost:3002/api/book/$MaSach");
$response = curl_exec($ch);

//curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

?>
<?php

$MaSach = $_GET["MaSach"];
$ch = require "./init_curl.php";

curl_setopt($ch, CURLOPT_URL, "http://localhost:3002/api/theloai");
$res = curl_exec($ch);

//curl_exec($ch);

curl_close($ch);

$datacate = json_decode($res, true);

?>
<?php

$MaSach = $_GET["MaSach"];
$ch = require "./init_curl.php";

curl_setopt($ch, CURLOPT_URL, "http://localhost:3002/api/nhaxuatban");
$res = curl_exec($ch);

//curl_exec($ch);

curl_close($ch);

$datanxb = json_decode($res, true);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Edit Book</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <!------MENU SECTION START-->
    <?php include('includes/header.php'); ?>
    <!-- MENU SECTION END-->
    <div class="content-wra
    <div class=" content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Edit Book</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
                    <div class=" panel panel-info">
                    <div class="panel-heading">
                        Book Info
                    </div>
                    <div class="panel-body">
                        <form method="post" action="./update-book.php">
                            <input type="hidden" name="MaSach" value="<?= $data["MaSach"] ?>"

                            <div class="form-group">
                                <label>Tên Sách</label>
                                <input class="form-control" type="text" name="TenSach" value="<?= $data["TenSach"] ?>" required="required" />
                            </div>

                            <div class="form-group">
                                <label>Tác Giả</label>
                                <input class="form-control" type="text" name="TacGia" value="<?= $data["TacGia"] ?>" />
                            </div>

                            <div class="form-group">
                                <label>Thể Loại Sách</label>
                                <select class="form-control" name="MaTheLoai" required="required">
                                    <option value="" selected style="text-align: center;">Chọn Thể Loại Sách</option>
                                    <?php
                                        foreach ($datacate as $item) {
                                            echo "<option value=" . $item["MaTheLoai"] . ">" . $item["TenTL"] . "</option>";
                                        }
                                    ?>

                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nhà Xuất Bản</label>
                                <select class="form-control" name="MaNXB" required="required">
                                    <option value="<?= $data["MaNXB"]?>" selected style="text-align: center;">Chọn Nhà Xuất Bản</option>                                  
                                    <?php
                                        foreach ($datanxb as $item) {
                                            echo "<option value=" . $item["MaNXB"] . ">" . $item["TenNXB"] . "</option>";
                                        }
                                    ?>

                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Đơn Giá</label>
                                <input class="form-control" type="text" name="DonGia" value="<?= $data["DonGia"] ?>" />
                            </div>

                            <div class="form-group">
                                <label>Số Lượng Tồn</label>
                                <input class="form-control" type="text" name="SLTon" value="<?= $data["SLTon"] ?>" />
                            </div>

                            <div class="form-group">
                                <label>Hình Ảnh</label>
                                <input class="form-control" type="text" name="HinhAnh" value="<?= $data["HinhAnh"] ?>" />
                            </div>

                            <button>Submit</button>
                        </form>

                        
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php'); ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>

</html>