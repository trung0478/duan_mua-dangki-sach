<?php 
function load_sach_noibat()
{
    $sql = "select * from sach where 1 order by RAND()";
    $listsanpham = pdo_query_all($sql);
    return $listsanpham;
}
function load_sach_new()
{
    $sql = "select * from sach where 1 order by id_sach desc ";
    $listsanpham = pdo_query_all($sql);
    return $listsanpham;
}
function load_sach_khuymai()
{
    $sql = "select * from sach where 1 order by id_sach desc limit 0,4";
    $listsanpham = pdo_query_all($sql);
    return $listsanpham;
}
function load_ten_dm()
{
    $sql = "SELECT * FROM danhmuc LIMIT 3";
    $listsanpham = pdo_query_all($sql);
    return $listsanpham;
}

function list_sach_by_dm_kt()
{
    $sql = "SELECT * FROM sach
    INNER JOIN danhmuc ON sach.id_danhmuc = danhmuc.id_danhmuc
    WHERE danhmuc.tendanhmuc = 'Kinh tế'";
    $result = pdo_query_all($sql);
    return $result;
}

function loadone_sach($id)
{
    $sql = "select * from sach where id_sach=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id,$iddm)
{
    $sql = "select * from sach where id_danhmuc=".$iddm." AND id_sach <> ".$id;
    $listsanpham = pdo_query_all($sql);
    return $listsanpham;
}
?>