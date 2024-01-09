<?php
session_start();
include "../../../config/connectdb.php";
include "../../model/sach.php";
include "../../model/danhmuc.php";
include "../../model/taikhoan.php";
include "../../model/giohang.php";
?>
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
                        <?php

                        if (!empty($_SESSION['cart'])) {
                            $cart = $_SESSION['cart'];

                            // mảng chứa id sản phẩm
                            $arr_idpro = array_column($cart, 'id');

                            // chuyển mảng thành chuỗi
                            $list_idpro = implode(',', $arr_idpro);

                            $list_cart = load_cart($list_idpro);

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
                                $total = (int)$quantity *  (int)$gia
                        ?>

                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="./upload/<?= $anh; ?>" alt="img_pro" />
                                        </td>
                                        <td class="product-name"><?= $ten_sach ?></td>
                                        <td class="product-price"><span class="amount"><?= number_format($gia, '0', '.', '.') ?></span> <u>đ</u></td>
                                        <td class="product-quantity"><input id="quantity_<?= $id_sach ?>" value="<?= $quantity ?>" oninput="updateQuantity(<?= $id_sach ?>, <?= $key ?>)" type="number" min="1"></td>
                                        <td class="product-subtotal"><?= number_format($total, '0', '.', '.') ?><u>đ</u></td>
                                        <td class="product-remove"><a href="?act=delete_cart&idcart=<?= $key ?>"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                <?php
                                $sum += (int)$quantity *  (int)$gia;
                                $_SESSION['sumCart'] = $sum;
                            endforeach;

                                ?>
                                <tr>
                                    <td colspan="4">Tổng: </td>
                                    <td colspan="2"><?= number_format($sum, '0', '.', '.')  ?><u>đ</u></td>
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
                                <?= number_format($sum, '0', '.', '.')  ?><u>đ</u>
                            </td>
                        </tr>
                        <tr class="shipping">
                            <th>Vận chuyển</th>
                            <td>
                                <?= number_format(30000, '0', '.', '.')  ?><u>đ</u>
                            </td>
                        </tr>
                        <tr class="order-total">
                            <th>Tổng cộng</th>
                            <td>
                                <strong>
                                    <?= number_format($sum + 30000, '0', '.', '.')  ?><u>đ</u>
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
<?php
                        }
?>