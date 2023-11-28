<?php
function list_nguoidung()
{
    $sql = "SELECT * FROM `taikhoan`";
    $result = pdo_query_all($sql);
    return $result;
}

function getOne_nguoidung($id_nd)
{
    $sql = "SELECT * FROM `taikhoan` WHERE id_taikhoan=$id_nd";
    $result = pdo_query_one($sql);
    return $result;
}

function update_nguoidung($vaitro,$trangthai,$id_nd) {
    $sql="UPDATE taikhoan set vaitro=$vaitro, trangthai=$trangthai WHERE id_taikhoan=$id_nd";
    pdo_execute($sql);
}

function delete_nguoidung($id_nd) {
    $sql="DELETE FROM taikhoan WHERE id_taikhoan=$id_nd";
    pdo_execute($sql);
}
