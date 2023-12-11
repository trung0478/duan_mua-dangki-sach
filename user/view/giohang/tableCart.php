<?php
session_start();
include "../../../config/connectdb.php";
include "../../model/sach.php";
include "../../model/danhmuc.php";
include "../../model/taikhoan.php";
include "../../model/giohang.php";

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

<?php
}
?>