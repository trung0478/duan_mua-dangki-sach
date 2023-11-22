<?php
function list_bl(){
    $sql = "SELECT sp.id_sach, sp.ten_sach, COUNT(*) AS soluong
    FROM binhluan bl
    JOIN sach sp ON sp.id_sach = bl.id_sach
    GROUP BY sp.id_sach, sp.ten_sach
    ORDER BY soluong DESC";
    $resut = pdo_query_all($sql);
    return $resut;

}
function loadAll_bl($id){
    $sql = "SELECT bl.*, tk.id_taikhoan, tk.ho_ten
    FROM binhluan bl
    JOIN taikhoan tk ON bl.id_taikhoan = tk.id_taikhoan
    WHERE bl.id_sach = $id";
    $resut = pdo_query_all($sql);
    return $resut;

}
function delete_binhluan($id){
    $sql = "DELETE FROM binhluan WHERE id_binhluan=".$id;
    pdo_execute($sql);
}
?>
