<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$img = $_POST['img'];

	$index=array_search($id, array_column($_SESSION['cart'],'id'));
	if ($index!==false) {
		// sản phẩm đã tồn tại trong giỏ hàng và tăng số lượng của sp đó lên
		$_SESSION['cart'][$index]['quantity']+=1;
	} else {
		// sản phẩm chưa có trong giỏ hàng
		$product=[
			    'id'=> $id,
                'name'=> $name,
                'price'=> $price,
                'img'=> $img,
				'quantity' => 1
		];
		$_SESSION['cart'][]=$product;
	}
	echo count($_SESSION['cart']);
} else {
	echo 'Yêu cầu không hợp lệ';
}
?>