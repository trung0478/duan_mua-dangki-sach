<?php
function insert_sach($name, $name_tacgia, $hinh, $price,$price_km, $soluong, $ngayxuat, $mota, $trangthai, $iddm)
{
    $sql = "insert into sach(ten_sach,ten_tacgia,anh,gia,gia_khuyenmai,soluong,ngay_xuatban,mota,id_trangthai,id_danhmuc) values('$name','$name_tacgia', '$hinh', '$price','$price_km', '$soluong', '$ngayxuat',' $mota', '$trangthai', '$iddm')";
    pdo_execute($sql);
}

function list_sach()
{
    $sql = "SELECT sach.*, trangthaisach.ten_trangthai, danhmuc.tendanhmuc FROM sach
    INNER JOIN trangthaisach ON sach.id_trangthai = trangthaisach.id_trangthai
    INNER JOIN danhmuc ON sach.id_danhmuc = danhmuc.id_danhmuc order by id_sach desc";
    $result = pdo_query_all($sql);
    return $result;
}

function loadone_sach($id)
{
    $sql = "select * from sach where id_sach=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}


function delete_sanpham($id)
{

    // Tiếp tục xóa sản phẩm

    $sql = "delete from sach where id_sach=" . $id;
    pdo_execute($sql);
}



function update_sach($id, $name, $name_tacgia, $hinh, $price,$price_km, $soluong, $ngayxuat, $mota, $trangthai, $iddm)
{
    if ($hinh != "") {
        $sql = "update sach set id_danhmuc='" . $iddm . "', ten_sach='" . $name . "', ten_tacgia='" . $name_tacgia . "',anh='" . $hinh . "',gia='" . $price . "',gia_khuyenmai='" . $price_km . "',soluong='" . $soluong . "',ngay_xuatban='" . $ngayxuat . "',mota='" . $mota . "',id_trangthai='" . $trangthai . "' where id_sach= " . $id;
    } else {
        $sql = "update sach set id_danhmuc='" . $iddm . "', ten_sach='" . $name . "', ten_tacgia='" . $name_tacgia . "', gia='" . $price . "',gia_khuyenmai='" . $price_km . "',soluong='" . $soluong . "',ngay_xuatban='" . $ngayxuat . "',mota='" . $mota . "',id_trangthai='" . $trangthai . "' where id_sach= " . $id;
    }
    pdo_execute($sql);
}