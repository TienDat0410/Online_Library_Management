<?php
$MaSach = $_GET["MaSach"];
$ch = require "./init_curl.php";


curl_setopt($ch, CURLOPT_URL, "http://localhost:3002/api/book/$MaSach");
$response = curl_exec($ch);

//curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Manage Books</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <!-- header -->
    <?php include_once('./includes/header.php'); ?>
    <div class="container text-center">
        <div class="col-sm-9 panel panel-info">
            <h3 class="panel-heading">Book Detail</h3>
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?= $data["HinhAnh"]; ?>" class="img-responsive" style="width:100%" alt="Image">
                </div>
                <div class="col-sm-6">
                    <!-- in thong tin chi tiet san pham-->
                    <div style="padding-left:10px">
                        <h3 class="text-info">
                            <?php echo $data["TenSach"]; ?>
                        </h3>

                        <p>
                            Tác Giả: <?php echo $data["TacGia"]; ?>
                        </p>

                        <p>
                            Mã Thể Loại: <?php echo $data["MaTheLoai"]; ?>
                        </p>

                        <p>
                            Mã NXB: <?php echo $data["MaNXB"]; ?>
                        </p>

                        <p>
                            Giá: <?php echo number_format($data["DonGia"], 0, ",", ".") ?> VND
                        </p>

                        <p>
                            Số lượng tồn: <?php echo $data["SLTon"]; ?>
                        </p>

                        <p>
                            <!-- <a href="./shopping_flow.php?id=<= $data['flower_id'] ?>"> <button type="button" class="btn  btn-danger">Mua Hàng</button> </a> -->
                            <a href="./edit-book.php?MaSach=<?= $data["MaSach"] ?>"><button type="button" class="btn  btn-danger">Edit Book</button></a>
                        </p>
                        <form method="post" action="./delete-book.php">
                            <input type="hidden" name="MaSach" value="<?= $data["MaSach"] ?>">
                            <button class="btn  btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('./includes/footer.php') ?>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</body>

</html>