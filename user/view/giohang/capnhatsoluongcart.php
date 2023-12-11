<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $newQuantity = $_POST['quantity'];

    if (!empty($_SESSION['cart'])) {
        $index = array_search($id, array_column($_SESSION['cart'], 'id'));
        if ($index!==false) {
            $_SESSION['cart'][$index]['quantity']=$newQuantity;
        }
    } else {
        echo 'Sản phẩm không tồn tại trong giỏ hàng!!';
    }
} else {
    echo 'yeu cau khong hop le';
}
