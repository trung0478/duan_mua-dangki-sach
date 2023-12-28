<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#" class="active">Thông tin thanh toán</a></li>
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
                    <h2>Thông tin thanh toán</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- entry-header-area-end -->

<?php
if (isset($one_user) && is_array($one_user)) {
    extract($one_user);
}

if (isset($_SESSION['name'])) {
   echo '<script> var isLogin=true </script>';
}else{
   echo '<script> var isLogin=false </script>';
}
?>
<!-- checkout-area-start -->
<div class="checkout-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="?act=dat_hang" method="post" id="dat_hang">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="checkbox-form">
                                <h3>Thông tin đặt hàng</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list">
                                            <label>Người nhận <span class="required">*</span></label>
                                            <input name="nguoinhan" type="text" placeholder="Nhập họ tên người nhận" value="<?php echo (isset($ho_ten) && $ho_ten != "") ? $ho_ten : ""; ?>">
                                            <input name="id_taikhoan" type="hidden" value="<?php echo (isset($id_taikhoan) && $id_taikhoan != "") ? $id_taikhoan : ""; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ <span class="required">*</span></label>
                                            <input name="diachi" type="text" placeholder="Nhập địa chỉ nhận hàng" value="<?php echo (isset($diachi) && $diachi != "") ? $diachi : ""; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="checkout-form-list">
                                            <label>Số điện thoại <span class="required">*</span></label>
                                            <input name="std" type="text" placeholder="Nhập số điện thoại nhận hàng" value="<?php echo (isset($so_dienthoai) && $so_dienthoai != "") ? $so_dienthoai : ""; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="checkout-form-list">
                                            <label>Email </label>
                                            <input name="email" type="email" placeholder="Nhập email" value="<?php echo (isset($email) && $email != "") ? $email : ""; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkout-form-list">
                                            <label>Ghi chú </label>
                                            <input name="ghichu" type="text" placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ ghi chú đặc biệt khi giao hàng. "></input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="your-order">
                                <h3>Thông tin đơn hàng</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-total">Tổng giỏ hàng</th>
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
                                                $total = (int)$quantity *  (int)$gia
                                            ?>
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        <img class="mx-2" width="30px" src="upload/<?= $anh; ?>" alt="product-img">
                                                        <?= $ten_sach ?> <strong class="product-quantity"> × <?= $quantity ?> </strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount"><?= number_format($total, '0', '.', '.') ?></span><u>đ</u>
                                                    </td>
                                                </tr>
                                            <?php
                                                $sum += (int)$quantity *  (int)$gia;
                                            endforeach;
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Tổng phụ</th>
                                                <td><span class="amount"><?= number_format($sum, '0', '.', '.') ?></span><u>đ</u></td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Phí vận chuyển</th>
                                                <td>
                                                    <span class="amount"><?= number_format(30000, '0', '.', '.') ?></span><u>đ</u>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Tổng cộng</th>
                                                <td><strong><span class="amount"><?= number_format($sum + 30000, '0', '.', '.') ?><u>đ</u></span></strong>
                                                    <input type="hidden" name="tong_don" value="<?= $sum + 30000 ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Phương thức thanh toán</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input style="width: 20px;" id="default_option" type="radio" value="1" name="cod" />
                                                    <label class="mb-0 mx-2">Thanh toán khi nhận hàng</label>
                                                </td>
                                                <td>
                                                    <input style="width: 20px;" type="radio" value="2" name="payUrl" />
                                                    <span class="mb-0 mx-2">Thanh toán Momo</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div class="order-button-payment">
                                            <input name="dathang" type="submit" value="Đặt hàng">
                                            <p class="text-danger text-center mt-2" id="message_nologin" style="display: none;">Bạn cần đăng nhập để tiến hành thanh toán</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // làm cho input radio chỉ chọn ra 1 option
    const checkboxes = document.querySelectorAll('input[type="radio"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            if (checkbox.checked) { // 
                checkboxes.forEach(function(othercheckbox) {
                    if (othercheckbox !== checkbox) {
                        othercheckbox.checked = false;
                    }
                })
            }
        })
    });

    // Chọn mặc định cho input radio
    const default_option = document.querySelector('#default_option');
    if (default_option) {
        default_option.checked = true;
    }

    // Đăng nhập mới được thanh toán
    const dat_hang = document.getElementById('dat_hang');
    dat_hang.addEventListener('submit', (ev) => {
        if (!isLogin) {
            // ngăn chặn hành vi submit mặc định của form
            ev.preventDefault();
            document.getElementById('message_nologin').style.display='block'
        }
    })
</script>