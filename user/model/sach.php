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
    $sql = "select * from sach where 1 order by RAND()";
        $listsanpham = pdo_query_all($sql);
        return $listsanpham;
}
?>