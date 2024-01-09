<?php
function get_payment($n)
{
    switch ($n) {
        case '1':
            $pay = "Thanh toán khi nhận hàng";
            break;
        case '2':
            $pay = "Thanh toán Momo";
            break;
        default:
            $pay = "Khi nhận hàng";
            break;
    }
    return $pay;
}

function status($n) {
    switch ($n) {
        case 1:
            $status_message = "<span class='text-success'>Chưa xử lý</span>";
            break;
        case 2:
            $status_message = "<span class='text-success'>Đã xác nhận</span>";
            break;
        case 3:
            $status_message = "<span class='text-success'>Đang giao hàng</span>";
            break;
        case 4:
            $status_message = "<span class='text-success'>Đã giao hàng</span>";
            break;
        case 5:
            $status_message = "<span class='text-success'>Đã nhận hàng</span>";
            break;
        case 0:
            $status_message = "<span class='text-danger'>Đã hủy đơn</span>";
            break;
        
        default:
            $status_message = "Chưa xử lý";
            break;
    }
    return $status_message;
}

function list_dh() {
    $sql = "SELECT * FROM donhang
    ORDER BY id_donhang DESC";
    $order = pdo_query_all($sql);
    return $order;
}

function chitiet_lichsu_dh_one($id_dh) {
    $sql = "SELECT donhang_chitiet.*, donhang.* FROM donhang_chitiet
    JOIN donhang ON donhang_chitiet.id_donhang = donhang.id_donhang
    WHERE donhang_chitiet.id_donhang = $id_dh";
    $order = pdo_query_one($sql);
    return $order;
}

function chitiet_lichsu_dh_all($id_dh) {
    $sql = "SELECT donhang_chitiet.*, donhang.* FROM donhang_chitiet
    JOIN donhang ON donhang_chitiet.id_donhang = donhang.id_donhang
    WHERE donhang_chitiet.id_donhang = $id_dh";
    $order = pdo_query_all($sql);
    return $order;
}

function update_dh($trangthai, $id_dh){
    $sql ="update donhang set trangthai = $trangthai where id_donhang=$id_dh";
    pdo_execute($sql);
}

?>