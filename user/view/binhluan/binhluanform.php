<?php
session_start();
include_once "../../../config/connectdb.php";
include_once "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan1($idpro);
if (isset($_POST['guibinhluan'])) {
    $idpro = $_POST['idpro'];
    $iduser = $_SESSION['name']['id_taikhoan'];
    $noidung = $_POST['noidung'];
    $ngaybinhluan = date("Y-m-d H:i:s");
    insert_binhluan($idpro, $iduser, $noidung, $ngaybinhluan);
    header("location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Website Mua Sách</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://htmldemo.net/koparion/koparion/img/favicon.png">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/animate.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/font-awesome.min.css">
    <!-- flexslider.css-->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/flexslider.css">
    <!-- chosen.min.css-->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/chosen.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/responsive.css">
    <!-- modernizr css -->
    <script src="https://htmldemo.net/koparion/koparion/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .bl img {
            width: 58px;
            height: 58px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="review-container">
        <?php
        foreach ($dsbl as $bl) {
            // Truy cập các phần tử của mảng $bl trực tiếp
            $ho_ten = $bl['ho_ten'];
            $ngay_binhluan = $bl['ngay_binhluan'];
            $noidung = $bl['noidung'];
            $anh = $bl['anh'];
            if ($anh === null) {
                $anh = '../upload/avata_null.jpg';
            }
        ?>
            <div class="valu valu-2 my-4">
                <div class="review-right d-flex">
                    <div class="review-content bl mx-4">
                        <h4><img src="upload/<?php echo $anh ?>" alt=""></h4>
                    </div>
                    <div class="review-details flex-column">
                        <div class="d-flex justify-content-between">
                            <p class="fw-bold"><?= $ho_ten ?></p>
                            <p class="px-5"><?= $ngay_binhluan ?></p>
                        </div>
                        <p class="review-date"><?= $noidung ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="review-add">
            <h3>Viết bình luận của bạn:</h3>
        </div>
        <div class="review-form">
            <div>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="hidden" name="idpro" value="<?= $idpro ?>">
                    <div class="mb-3">
                        <textarea class="form-control" name="noidung" cols="10" rows="4" placeholder="Nhập bình luận"></textarea>
                    </div>
                    <div class="review-form-button">
                        <button class="btn btn-primary" name="guibinhluan" type="submit">Gửi bình luận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>