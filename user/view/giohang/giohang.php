<div class="breadcrumbs-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumbs-menu">
					<ul>
						<li><a href="#">Trang chủ</a></li>
						<li><a href="#" class="active">Giỏ hàng</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- breadcrumbs-area-end -->
<!-- entry-header-area-start -->
<div class="entry-header-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="entry-header-title">
					<h2>Giỏ hàng</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- entry-header-area-end -->

<!-- cart-main-area-start -->
<?php
if (empty($list_cart)) {
	echo "<h2 style='text-align: center; margin-bottom: 50px;'>Không có sản phẩm trong giỏ hàng!!!</h2>";
}else{
?>

<div id="tableCart" class="cart-main-area mb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="#">
					<div class="table-content table-responsive mb-15 border-1">
						<table>
							<thead>
								<tr>
									<th class="product-thumbnail">Image</th>
									<th class="product-name">Product</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-subtotal">Total</th>
									<th class="product-remove">Remove</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sum = 0;
									$quantity = 0;
									foreach ($list_cart as $key =>  $value) :
										foreach ($_SESSION['cart'] as $item) {
											// kiểm tra và lấy ra số lượng sản phẩm 
											if ($value['id_sach'] == $item['id']) {
												$quantity = $item['quantity'];
												break;
											}
										}
										extract($value);
										$total=(int)$quantity *  (int)$gia 
								?>
										<tr>
											<td class="product-thumbnail">
												<img src="./upload/<?= $anh; ?>" alt="img_pro" />
											</td>
											<td class="product-name"><?= $ten_sach ?></td>
											<td class="product-price"><span class="amount"><?= number_format($gia,'0','.','.') ?></span> <u>đ</u></td>
											<td class="product-quantity"><input id="quantity_<?= $id_sach ?>" value="<?= $quantity ?>" oninput="updateQuantity(<?= $id_sach ?>, <?= $key ?>)" type="number" min="1"></td>
											<td class="product-subtotal"><?= number_format($total,'0','.','.') ?><u>đ</u></td>
											<td class="product-remove"><a href="?act=delete_cart&idcart=<?= $key ?>"><i class="fa fa-times"></i></a></td>
										</tr>
								<?php
										$sum += (int)$quantity *  (int)$gia;
										$_SESSION['sumCart'] = $sum;
									endforeach;
								
								?>
								<tr>
									<td colspan="4">Tổng: </td>
									<td colspan="2"><?= number_format($sum,'0','.','.')  ?><u>đ</u></td>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-6 col-12">
				<div class="buttons-cart mb-30">
					<ul>
						<li><a href="?act=home">Tiếp tục mua sắm</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="cart_totals">
					<h2>Tổng số giỏ hàng</h2>
					<table>
						<tbody>
							<tr class="cart-subtotal">
								<th>Tổng phụ</th>
								<td>
									<?= number_format($sum,'0','.','.')  ?><u>đ</u>
								</td>
							</tr>
							<tr class="shipping">
								<th>Vận chuyển</th>
								<td>
									<?= number_format(30000,'0','.','.')  ?><u>đ</u>
								</td>
							</tr>
							<tr class="order-total">
								<th>Tổng cộng</th>
								<td>
									<strong>
										<?= number_format($sum+30000,'0','.','.')  ?><u>đ</u>
									</strong>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="wc-proceed-to-checkout">
						<a href="index.php?act=thongtin_thanhtoan">Tiến hành thanh toán</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php };?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
	function updateQuantity(id, index) {
		let newQuantity = $('#quantity_' + id).val();
		if (newQuantity <= 0) {
			newQuantity = 1;
		}
		$.ajax({
			type: 'POST',
			url: 'user/view/giohang/capnhatsoluongcart.php',
			data: {
				id: id,
				quantity: newQuantity
			},
			success: function(respone) {
				// sau khi cap nhat thanh cong
				$.post('user/view/giohang/tableCart.php', function(data){
					$('#tableCart').html(data);
				})
			},
			error: function(error) {
				console.log(error)
			}

		})
	}
</script>