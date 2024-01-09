<?php
function execPostRequest($url, $data)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt(
        $ch,
        CURLOPT_HTTPHEADER,
        array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        )
    );
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    //execute post
    $result = curl_exec($ch);
    //close connection
    curl_close($ch);
    return $result;
}

function tao_dh($id_taikhoan, $tong_don, $nguoinhan, $diachi, $std, $email, $ghichu, $ngay_dat, $ma_hoadon, $pttt)
{
    $sql = "INSERT INTO donhang (nguoinhan, email, so_dienthoai, diachi, phuongthuc_tt, tong_donhang, ngay_dathang, id_taikhoan, ma_hoadon, ghi_chu)
    VALUES ('$nguoinhan', '$email', $std, '$diachi', $pttt, $tong_don, '$ngay_dat', $id_taikhoan, '$ma_hoadon', '$ghichu')";
    return pdo_execute_lastInsertId($sql);
}

function tao_dhct($so_luong, $don_gia, $id_sach, $id_donhang, $ten_sach, $hinh_anh)
{
    $sql = "INSERT INTO donhang_chitiet (soluong, dongia, id_sach, id_donhang, ten_sach, hinh_anh)
    VALUES ($so_luong, $don_gia, $id_sach, $id_donhang, '$ten_sach', '$hinh_anh')";
    pdo_execute($sql);
}

function get_show_bill_detail_info($id_donhang)
{
    $sql = "SELECT * FROM donhang_chitiet WHERE id_donhang = $id_donhang";
    $show = pdo_query_all($sql);
    return $show;
}
function get_show_bill_info($id_donhang)
{
    $sql = "SELECT * FROM donhang WHERE id_donhang = $id_donhang";
    $show = pdo_query_one($sql);
    return $show;
}

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
