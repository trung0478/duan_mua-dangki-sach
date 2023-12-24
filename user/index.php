<?php
session_start();
include "config/connectdb.php";
include "user/model/sach.php";
include "user/model/danhmuc.php";
include "user/model/taikhoan.php";
include "user/model/binhluan.php";


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

                $binhluan = loadall_binhluan1($_GET['idsp']);

                include 'view/sanphamct.php';
            }
            break;

        case 'taikhoankh':
            include 'view/taikhoan/taikhoankh.php';
            break;

        case 'dangnhap':
            $error_message = ''; // Khởi tạo biến $error_message trước khi sử dụng
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                if (empty($_POST['email']) || empty($_POST['pass'])) {
                    $error_message = 'Email và Mật khẩu không được để trống <br>';
                } else {
                    $user = strip_tags($_POST['email']);
                    $pass = strip_tags($_POST['pass']);
                    $checkuser = get_info_user($user);

                    if (!$checkuser) {
                        $error_message .= 'Email không đúng<br>';
                    } else {
                        $check = password_verify($pass, $checkuser['pass']);
                        if ($check) {
                            if ($checkuser['vaitro'] == 0) {
                                $error_message .= 'Tài khoản đã bị khóa<br>';
                            } else {
                                $_SESSION['name'] = $checkuser;
                                if ($checkuser['vaitro'] == 1) {
                                    echo "<script>window.location.href='./admin/index.php'</script>";
                                } else {
                                    echo "<script>window.location.href='index.php'</script>";
                                }
                            }
                        } else {
                            $error_message .= 'Mật khẩu không đúng<br>';
                        }
                    }
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
            $error_message = '';
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user = $_POST['name'];
                $pass = $_POST['pass'];
                $pass_confirm = $_POST['pass-confirn'];
                $vaitro = 2;
                if ($pass == $pass_confirm) {
                    $pass = $pass_confirm;
                    $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);

                    insert_taikhoan($email, $user, $hashedPassword, $vaitro);
                    // cập nhật lại session user mới 
                    echo '<script>document.querySelector(".thongbao").innerText = "Đăng ký thành công :)";</script>';
            ?>
                    <meta http-equiv="refresh" content="0;url=index.php?act=dangnhap">
<?php                } else {
                    $error_message = 'Mật khẩu không khớp rồi ! <br>';
                }
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
            include 'view/giohang/giohang.php';
            break;

        case 'thanhtoan':
            include 'view/giohang/thanhtoan.php';
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
