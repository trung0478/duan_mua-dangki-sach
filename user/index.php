<?php
session_start();
include "config/connectdb.php";
include "user/model/sach.php";
include "user/model/danhmuc.php";
include "user/model/taikhoan.php";
include "user/model/giohang.php";

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$sach_noibat = load_sach_noibat();
$sach_new = load_sach_new();
$sach_khuyenmai = load_sach_khuymai();
$sp_theo_dm = load_ten_dm();
$sach_kt = list_sach_by_dm_kt();


include 'view/header.php';

if (isset($_GET['act']) && ($_GET['act']) != "") {
    $action = $_GET['act'];
    switch ($action) {
        case 'home':
            include 'view/home.php';
            break;

        case 'sanpham':
            include 'view/sanpham.php';
            break;

        case 'sanphamct':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $onesp = loadone_sach($_GET['idsp']);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($_GET['idsp'], $id_danhmuc);

                include 'view/sanphamct.php';
            }
            break;

        case 'taikhoankh':
            include 'view/taikhoan/taikhoankh.php';
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['name'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                $thongbao = "";
                if (is_array($checkuser)) {
                    $_SESSION['name'] = $checkuser;
                    // header('location:index.php');
?>
                    <meta http-equiv="refresh" content="0;url=index.php">
            <?php
                    exit; // Kết thúc kịch bản sau khi chuyển hướng
                } else {
                    echo '<script>document.querySelector(".thongbao").innerText = "Mật khẩu sai rồi !";</script>';                        // $thongbao = "Tài khoản hoặc mật khẩu không chính xác !";
                }
            }
            include 'view/taikhoan/dangnhap.php';
            break;
        case 'thoat':
            session_unset();
            // header('location:index.php');
            //    include_once "view/gioithieu.php";
            ?>
            <meta http-equiv="refresh" content="0;url=index.php?act=dangnhap">
            <?php
            break;


        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user = $_POST['name'];
                $pass = $_POST['pass'];
                $pass_confirm = $_POST['pass-confirn'];

                if ($pass == $pass_confirm) {
                    $pass = $pass_confirm;
                    insert_taikhoan($email, $user, $pass);
                    // cập nhật lại session user mới 
                    echo '<script>document.querySelector(".thongbao").innerText = "Đăng ký thành công :)";</script>';
            ?>
                    <meta http-equiv="refresh" content="0;url=index.php?act=dangnhap">
<?php                } else {
                    echo '<script>document.querySelector(".thongbao").innerText = "Mật khẩu không khớp :)";</script>';
                }
                // $thongbao = "Tài khoản hoặc mật khẩu không chính xác !";
            }
            include 'view/taikhoan/dangky.php';
            break;

        case 'quenmk':
            if (isset($_POST['gui']) && $_POST['gui']) {
                $email = $_POST['email'];
                // cách 2: Gửi thông báo về email
                $sendMailMess = sendMail($email);
            }
            include 'view/taikhoan/quenmk.php';
            break;

        case 'giohang':
            if (!empty($_SESSION['cart'])) {
                $cart = $_SESSION['cart'];

                // mảng chứa id sản phẩm
                $arr_idpro = array_column($cart, 'id');

                // chuyển mảng thành chuỗi
                $list_idpro = implode(',', $arr_idpro);

                $list_cart = load_cart($list_idpro);
            }
            include 'view/giohang/giohang.php';
            break;
        
        case 'empty_cart':
            include 'view/giohang/emptyCart.php';
            break;

        case 'delete_cart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['cart'],$_GET['idcart'],1);
            }
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                echo "<script> window.location.href='index.php?act=giohang';</script>";
            } else {
                echo "<script> window.location.href='index.php?act=empty_cart';</script>";
            }
            break;

        case 'thanhtoan':
            include 'view/thanhtoan/thanhtoan.php';
            break;

        case 'gioithieu':
            include 'view/gioithieu.php';
            break;

        case 'lienhe':
            include 'view/lienhe.php';
            break;

        case 'khuyenmai':
            include 'view/khuyenmai.php';
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include 'view/footer.php';
