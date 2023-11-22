<?php
include '../config/connectdb.php';
include 'model/danhmuc.php';
include 'model/sach.php';
include 'model/binhluan.php';
include 'model/trangthai.php';
include '../global.php';


include 'view/header.php';
?>

<?php
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
            // DANH MUC
        case 'list_dm':
            $list_dm = list_danhmuc();
            include 'view/danhmuc/list_danhmuc.php';
            break;
        case 'add_dm':
            if (isset($_POST['add_dm'])) {
                $ten_dm = $_POST['ten_dm'];
                $trangthai_dm = $_POST['trangthai_dm'];
                add_danhmuc($ten_dm, $trangthai_dm);
                echo "<script> window.location.href='index.php?act=list_dm';</script>";
            }
            include 'view/danhmuc/add_danhmuc.php';
            break;
        case 'update_dm':
            if (isset($_GET['iddm'])) {
                $dm = getone_dm($_GET['iddm']);
            }
            if (isset($_POST['update_dm'])) {
                $iddm = $_POST['iddm'];
                $ten_dm = $_POST['ten_dm'];
                $trangthai_dm = $_POST['trangthai_dm'];
                update_danhmuc($iddm, $ten_dm, $trangthai_dm);
                echo "<script> window.location.href='index.php?act=list_dm';</script>";
            }
            include 'view/danhmuc/update_danhmuc.php';
            break;
        case 'delete_dm':
            if (isset($_GET['iddm'])) {
                delete_danhmuc($_GET['iddm']);
                echo "<script> window.location.href='index.php?act=list_dm';</script>";
            }
            break;

            // SACH
        case 'list_sach':
            $listsach = list_sach();
            $listtrangthai = list_trangthai();
            include 'view/sach/list_sach.php';
            break;

        case 'add_sach':
            if (isset($_POST['themmoi'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $price_km = $_POST['price_km'];
                $soluong = $_POST['soluong'];
                $ngayxuat = $_POST['ngayxuat'];
                $mota = $_POST['mota'];
                $trangthai = $_POST['trangthai'];
                $iddm = $_POST['iddm'];
                $name_tacgia = $_POST['name_tacgia'];

                $hinh = $_FILES['hinh']['name'];
                $target_file = "../upload/" . $_FILES['hinh']['name'];
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);

                insert_sach($name, $name_tacgia, $hinh, $price, $price_km, $soluong, $ngayxuat, $mota, $trangthai, $iddm);
                $thongbao = "Thêm thành công !";
            }
            $listdanhmuc = list_danhmuc();
            $listtrangthai = list_trangthai();
            include 'view/sach/add_sach.php';
            break;


        case 'xoasach':
            if (isset($_GET['id_sach']) && ($_GET['id_sach']) > 0) {
                delete_sanpham($_GET['id_sach']);
            }
            $listsach = list_sach();
            include 'view/sach/list_sach.php';
            break;

        case 'suasach':
            if (isset($_GET['id_sach']) && ($_GET['id_sach']) > 0) {
                $sach = loadone_sach($_GET['id_sach']);
            }
            $listdanhmuc = list_danhmuc();
            $listtrangthai = list_trangthai();
            include 'view/sach/update_sach.php';
            break;


        case 'update_sach':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $price_km = $_POST['price_km'];
                $soluong = $_POST['soluong'];
                $ngayxuat = $_POST['ngayxuat'];
                $mota = $_POST['mota'];
                $trangthai = $_POST['trangthai'];
                $iddm = $_POST['iddm'];
                $name_tacgia = $_POST['name_tacgia'];

                $hinh = $_FILES['hinh']['name'];
                $target_file = "../upload/" .  $_FILES['hinh']['name'];
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                

                update_sach($id, $name, $name_tacgia, $hinh, $price, $price_km, $soluong, $ngayxuat, $mota, $trangthai, $iddm);
                $thongbao = "Cập nhật thành công !";
            }
            $listdanhmuc = list_danhmuc();
            $listtrangthai = list_trangthai();
            $listsach = list_sach();
            include 'view/sach/list_sach.php';
            break;

            // NGUOI DUNG
        case 'list_nd':
            include 'view/nguoidung/list_nguoidung.php';
            break;
        case 'add_nd':
            include 'view/nguoidung/add_nguoidung.php';
            break;
        case 'update_nd':
            include 'view/nguoidung/update_nguoidung.php';
            break;

            // BINH LUAN
            // BINH LUAN
        case 'list_bl':
            $list_bl = list_bl();
            include 'view/binhluan/list_binhluan.php';
            break;

        case 'chitiet_bl':
            if (($_GET['idbl']) && ($_GET['idbl'] > 0)) {
                $id = $_GET['idbl'];
                $list_bl = loadAll_bl($id);
            }
            include 'view/binhluan/chitiet_binhluan.php';
            break;
        case 'delete_bl':
            if (($_GET['idbl']) && ($_GET['idbl'] > 0)) {
                $id = $_GET['idbl'];
                delete_binhluan($id);
            }
            $list_bl = loadAll_bl($id);
            include 'view/binhluan/chitiet_binhluan.php';
            break;
    }
} else {
    include 'view/home.php';
}
?>


<?php
include 'view/footer.php';
?>