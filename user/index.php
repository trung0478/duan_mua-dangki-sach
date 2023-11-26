<?php

include "config/connectdb.php";
include "user/model/sach.php";
include "user/model/danhmuc.php";

$sach_noibat = load_sach_noibat();
$sach_new = load_sach_new();
$sach_khuyenmai = load_sach_khuymai();
$sp_theo_dm = load_ten_dm();
$sach_kt=list_sach_by_dm_kt();


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
            include 'view/sanphamct.php';
            break;

        case 'taikhoankh':
            include 'view/taikhoan/taikhoankh.php';
            break;

        case 'dangnhap':
            include 'view/taikhoan/dangnhap.php';
            break;

        case 'dangky':
            include 'view/taikhoan/dangky.php';
            break;

        case 'quenmk':
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