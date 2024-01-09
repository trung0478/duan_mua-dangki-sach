<?php
function load_cart($list_idpro){
    $sql = "SELECT * FROM sach WHERE id_sach IN ($list_idpro)";
    $result = pdo_query_all($sql);
    return $result;
}
?>