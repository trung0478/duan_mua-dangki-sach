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
                    <h2>Đặt hàng thành công</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- entry-header-area-end -->

<!-- checkout-area-start -->
<div class="checkout-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="your-order">
                            <h3>Thông tin đặt hàng</h3>
                            <div class="your-order-table table-responsive">
                                <?php
                                if (isset($id_donhang) && $id_donhang > 0) {
                                    $get_show_bill_info = get_show_bill_info($id_donhang);
                                    extract($get_show_bill_info);
                                    $pttt = get_payment($phuongthuc_tt);
                                }
                                ?>
                                <p>
                                    <span>Mã đơn hàng: </span>
                                    <span><?= $ma_hoadon ?></span>
                                </p>
                                <p>
                                    <span>Người nhận: </span>
                                    <span><?= $nguoinhan ?></span>
                                </p>
                                <p>
                                    <span>Địa chỉ: </span>
                                    <span><?= $diachi ?></span>
                                </p>
                                <p>
                                    <span>Email: </span>
                                    <span><?= $email ?></span>
                                </p>
                                <p>
                                    <span>Số điện thoại: </span>
                                    <span><?= $so_dienthoai ?></span>
                                </p>
                                <p>
                                    <span>Ghi chú: </span>
                                    <span><?= $ghi_chu ?></span>
                                </p>
                                <p>
                                    <span>Phương thức thanh toán: </span>
                                    <span><?= $pttt ?></span>
                                </p>
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
                                        if (isset($id_donhang) && $id_donhang > 0) {
                                            $get_show_bill_detail_info=get_show_bill_detail_info($id_donhang);
                                            $tong=0;
                                            foreach ($get_show_bill_detail_info as $key) {
                                              $sum=$key['soluong']*$key['dongia'];
                                              $tong+=$sum;
                                        ?>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                <img width="30px" src="upload/<?=$key['hinh_anh']?>" alt="product-img">
                                                <?=$key['ten_sach']?> <strong class="product-quantity"> × <?=$key['soluong']?></strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount"><?=number_format($sum, '0', '.', '.')?></span><u>đ</u>
                                            </td>
                                        </tr>
                                        <?php }; }?>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Tổng phụ</th>
                                            <td><span class="amount"><?=number_format($tong, '0', '.', '.')?></span><u>đ</u></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Phí vận chuyển</th>
                                            <td>
                                                <span class="amount"><?= number_format(30000, '0', '.', '.') ?></span><u>đ</u>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng cộng</th>
                                            <td><strong><span class="amount"><?=number_format($tong+30000, '0', '.', '.')?><u>đ</u></span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>