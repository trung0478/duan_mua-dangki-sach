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
<div class="cart-main-area pt-100px pb-100px">
    <div class="container">
        <h3 class="my-4 cart-page-title">Lịch sử mua hàng</h3>
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
                                    <th>Hoạt động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($lichsu_dh)) {
                                    foreach ($lichsu_dh as $key) :
                                        extract($key);
                                ?>
                                <tr>
                                    <td><?= $nguoinhan ?></td>
                                    <td><?= $ma_hoadon ?></td>
                                    <td><?= $ngay_dathang ?></td>
                                    <td><?= number_format($tong_donhang, 0, '.', '.')  ?> đ</td>
                                    <td><?= $diachi . '</br>' . $so_dienthoai . '</br>' . $email ?></td>
                                    <td><?= get_payment($phuongthuc_tt) ?></td>
                                    <td><?= status($trangthai)?></td>
                                    <td><a href="?act=ctiet_lsdh&id_order=<?=$id_donhang ?>">Xem chi tiết</a></td>
                                </tr>
                                <?php endforeach; }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update" style="text-align: left">
                                    <a class="cancel-order mb-5"  href="index.php?act=home">Tiếp tục mua sắm</a>
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