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
<div style="margin: 180px 0 0;" class="cart-main-area ">
    <div class="container">
        <h3 class="my-4 cart-page-title">Đơn hàng</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="#">
                    <div class="table-content table-responsive cart-table-content">
                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Người nhận</th>
                                    <th style="text-align: center">Hóa đơn</th>
                                    <th style="text-align: center">Ngày đặt</th>
                                    <th style="text-align: center">Tổng đơn</th>
                                    <th style="text-align: center">Địa chỉ</th>
                                    <th style="text-align: center">PTTT</th>
                                    <th style="text-align: center">Tình trạng</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if (isset($chitiet_lichsu_dh_one)) {
                                    extract($chitiet_lichsu_dh_one);
                                ?>
                                    <tr>
                                        <td style="text-align: center"><?= $nguoinhan ?></td>
                                        <td style="text-align: center"><?= $ma_hoadon ?></td>
                                        <td style="text-align: center"><?= $ngay_dathang ?></td>
                                        <td style="text-align: center"><?= number_format($tong_donhang, 0, '.', '.') ?> đ</td>
                                        <td style="text-align: center"><?= $diachi . '</br>' . $so_dienthoai . '</br>' . $email ?></td>
                                        <td style="text-align: center"><?= get_payment($phuongthuc_tt) ?></td>
                                        <td style="text-align: center"><?= status($trangthai) ?></td>
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
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="text-align: center">Tên sản phẩm</th>
                                <th style="text-align: center">Hình ảnh</th>
                                <th style="text-align: center">Số lượng</th>
                                <th style="text-align: center">Đơn giá</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            if (isset($chitiet_lichsu_dh_all)) {
                                $tong_dh = 0;
                                foreach ($chitiet_lichsu_dh_all as $key) :
                                    extract($key);
                                    $img = "../upload/" . $hinh_anh;
                                    $tong_dh += $dongia * $soluong;
                            ?>

                                    <tr>
                                        <td style="text-align: center"><?= $ten_sach ?></td>
                                        <td style="text-align: center; padding:10px 0;">
                                            <img width="50px" src="<?= $img ?>" alt="book_image">
                                        </td>
                                        <td style="text-align: center"><?= $soluong ?></td>
                                        <td style="text-align: center"><?= number_format($dongia, 0, '.', '.') ?>đ</td>
                                    </tr>

                            <?php endforeach;
                            } ?>

                            <tr>
                                <td style="text-align: center" colspan="2"><strong>TỔNG PHỤ</strong></td>
                                <td style="text-align: center" colspan="2"><?= number_format($tong_dh, 0, '.', '.') ?> đ</td>
                            </tr>

                            <tr>
                                <td style="text-align: center" colspan="2"><strong>VẬN CHUYỂN</strong></td>
                                <td style="text-align: center" colspan="2">30.000 đ</td>
                            </tr>
                            <tr>
                                <td style="text-align: center" colspan="2"><strong>TỔNG ĐƠN</strong></td>
                                <td style="text-align: center" colspan="2"><?= number_format($tong_dh + 30000, 0, '.', '.') ?> đ</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-shiping-update-wrapper my-3">
                            <div class="cart-shiping-update">
                                <a class="cancel-order" href="index.php?act=list_dh">Quay lại</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Area End -->
