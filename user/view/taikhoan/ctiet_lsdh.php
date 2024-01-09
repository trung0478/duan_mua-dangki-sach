<!-- Cart Area Start -->
<style>
    .cancel-order {
        background-color: #f2f2f2;
        border-radius: 0;
        color: #212121;
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        line-height: 1;
        padding: 18px 63px 17px;
        text-transform: uppercase;
        border: none;
    }

    .cancel-order:hover {
        background-color: #ff7004;
        color: #fff;
    }
</style>
<!-- Cart Area Start -->
<div class="cart-main-area pt-100px">
    <div class="container">
        <h3 class="my-4 cart-page-title">Đơn hàng</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Người nhận</th>
                                    <th>Hóa đơn</th>
                                    <th>Ngày đặt</th>
                                    <th>Tổng đơn</th>
                                    <th>Địa chỉ</th>
                                    <th>PTTT</th>
                                    <th>Tình trạng</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if (isset($chitiet_lichsu_dh_one)) {
                                    extract($chitiet_lichsu_dh_one);
                                ?>
                                    <tr>
                                        <td><?= $nguoinhan ?></td>
                                        <td><?= $ma_hoadon ?></td>
                                        <td><?= $ngay_dathang ?></td>
                                        <td><?= number_format($tong_donhang, 0, '.', '.') ?> đ</td>
                                        <td><?= $diachi . '</br>' . $so_dienthoai . '</br>' . $email ?></td>
                                        <td><?= get_payment($phuongthuc_tt) ?></td>
                                        <td><?= status($trangthai) ?></td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->


<div class="cart-main-area pt-70px pb-100px">
    <div class="container">
        <h3 class="my-4 cart-page-title">Đơn hàng chi tiết</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="table-content table-responsive cart-table-content">
                    <table>
                        <thead>
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            if (isset($chitiet_lichsu_dh_all)) {
                                $tong_dh = 0;
                                foreach ($chitiet_lichsu_dh_all as $key) :
                                    extract($key);
                                    $img = "upload/" . $hinh_anh;
                                    $tong_dh += $dongia*$soluong;
                            ?>

                                    <tr>
                                        <td><?= $ten_sach ?></td>
                                        <td>
                                            <img width="100px" src="<?= $img ?>" alt="book_image">
                                        </td>
                                        <td><?= $soluong?></td>
                                        <td><?= number_format($dongia, 0, '.', '.') ?>đ</td>
                                    </tr>

                            <?php endforeach;
                            } ?>

                            <tr>
                                <td colspan="2"><strong>TỔNG PHỤ</strong></td>
                                <td colspan="2"><?= number_format($tong_dh, 0, '.', '.') ?> đ</td>
                            </tr>

                            <tr>
                                <td colspan="2"><strong>VẬN CHUYỂN</strong></td>
                                <td colspan="2">30.000 đ</td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>TỔNG ĐƠN</strong></td>
                                <td colspan="2"><?= number_format($tong_dh + 30000, 0, '.', '.') ?> đ</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <form id="paymentForm" action="index.php?act=update_dh" method="POST">
                    <input type="hidden" name="id_order" value="<?=$id_donhang ?>">
                    <input type="hidden" name="status" value="<?=$trangthai ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper d-flex justify-content-between mb-5">
                                <div class="cart-shiping-update">
                                    <a class="cancel-order" href="index.php?act=lichsu_dh">Quay lại</a>
                                </div>
                                <div class="cart-shiping-update" style="text-align: left">
                                    <?php
                                    if ($trangthai == 0 || $trangthai == 5) {
                                        echo '<a href="?act=home" class="cancel-order">Mua lại</a>';
                                    } elseif ($trangthai == 4) {
                                    ?>

                                    <button name="da_nh" class="cancel-order">Đã nhận được hàng</button>

                                    <?php
                                    } elseif ($trangthai == 1 || $trangthai == 2) { 
                                    ?>

                                    <button name="huy_dh" class="cancel-order" onclick="return confirm('Bạn có muốn hủy không?')">Hủy đơn hàng</button>

                                    <?php } ?>
                                    <p class="text-danger mt-15px" style="display: none" id="messageLogin"></p>

                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->
