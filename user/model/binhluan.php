<?php
function loadall_binhluan()
{
    $sql="select comment.cmt_content,comment.cmt_id,comment.cmt_date,product.p_name,user.user_name FROM `comment`
    LEFT JOIN user on comment.user_id = user.user_id
    LEFT JOIN product on comment.p_id = product.p_id";
    $listbl = pdo_query_all($sql);
    return $listbl;
}
function loadall_binhluan1($idpro)
{
    $sql="select binhluan.noidung,binhluan.ngay_binhluan,taikhoan.ho_ten, taikhoan.anh FROM `binhluan`
    LEFT JOIN taikhoan on binhluan.id_taikhoan = taikhoan.id_taikhoan
    LEFT JOIN sach on binhluan.id_sach = sach.id_sach WHERE sach.id_sach=".$idpro;
    $listbl = pdo_query_all($sql);
    return $listbl;
}
function insert_binhluan($idpro,$iduser,$noidung,$ngaybinhluan)
{
    $ngaybinhluan = date("Y-m-d H:i:s");
    $sql = "insert into binhluan(id_sach,id_taikhoan,noidung,ngay_binhluan) values ('$idpro','$iduser','$noidung','$ngaybinhluan')";
    pdo_execute($sql);
}
function delete_binhluan($id)
{
    $sql = "delete from binhluan where id_binhluan=" . $id;
    pdo_execute($sql);
}