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
<!-- <div class="cart-main-area pt-100px pb-100px"> -->
<div class="container" style="margin-top: 180px;">
    <h3 class="my-4 cart-page-title">Lịch sử mua hàng</h3>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="text-align: center;">Người nhận</th>
                        <th style="text-align: center;">Hóa đơn</th>
                        <th style="text-align: center;">Ngày đặt</th>
                        <th style="text-align: center;">Tổng đơn</th>
                        <th style="text-align: center;">Địa chỉ</th>
                        <th style="text-align: center;">PTTT</th>
                        <th style="text-align: center;">Tình trạng</th>
                        <th style="text-align: center;">Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($list_dh)) {
                        foreach ($list_dh as $key) :
                            extract($key);
                    ?>
                            <tr>
                                <td style="text-align: center"><?= $nguoinhan ?></td>
                                <td style="text-align: center"><?= $ma_hoadon ?></td>
                                <td style="text-align: center"><?= $ngay_dathang ?></td>
                                <td style="text-align: center"><?= number_format($tong_donhang, 0, '.', '.')  ?> đ</td>
                                <td style="text-align: center"><?= $diachi . '</br>' . $so_dienthoai . '</br>' . $email ?></td>
                                <td style="text-align: center"><?= get_payment($phuongthuc_tt) ?></td>
                                <td style="text-align: center"><?= status($trangthai) ?></td>
                                <td class="btn btn-warning mx-1" style="text-align: center"><a href="?act=chitiet_dh&id_order=<?= $id_donhang ?>">Xem chi tiết</a></td>
                                <?php
                                if ($trangthai == 1 || $trangthai == 2) {
                                ?>
                                <td class=" btn btn-warning mx-1" style="text-align: center"><a href="?act=update_dh&id_order=<?= $id_donhang ?>">Sửa</a></td>
                                <?php
                                }
                                ?>
                            </tr>
                    <?php endforeach;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- </div> -->
<!-- Cart Area End -->