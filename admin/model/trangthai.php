<?php
function list_trangthai()
{
    $sql = "select * from trangthaisach";
    $result = pdo_query_all($sql);
    return $result;
}
?>