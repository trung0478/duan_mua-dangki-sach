<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between my-md-2 my-2">
                    <h3 class="fs-1">Danh sách người dùng</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Mã người dùng</th>
                            <th scope="col">Họ Tên</th>
                            <th scope="col">Tên tài khoản</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Email</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Quyền</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_nd as $value) :
                            extract($value);
                        ?>
                            <tr>
                                <td class="text-center"><?= $id_taikhoan?></td>
                                <td class="text-center"><?= $ho_ten?></td>
                                <td class="text-center"><?= $taikhoan?></td>
                                <td class="text-center"><?= (isset($so_dienthoai)&& $so_dienthoai!="")?$so_dienthoai:"Chưa có";?></td>
                                <td class="text-center"><?= $email?></td>
                                <td class="text-center"><?=(isset($diachi)&& $diachi!="")?$diachi:"Chưa có"; ?></td>
                                <td class="text-center"><?=(isset($anh)&& $anh!="")?$anh:"Chưa có"; ?></td>
                                <td class="text-center"><?= ($vaitro==0)?"User":"Admin";?></td>
                                <td class="text-center"><?= ($trangthai==0)?"Khoá":"Kích hoạt";?></td>
                               
                                <td class="text-center">
                                    <a href="?act=update_nd&id=<?= $id_taikhoan?>" class="btn btn-warning">Sửa</a>
                                    <?php
                                    if ($vaitro==0) {
                                        echo '
                                        <a onclick="return confirm(\'Bạn có muốn xoá không?\')" href="?act=delete_nd&id=<?= $id_taikhoan?>" class="btn btn-danger">Xóa</a>
                                    ';
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>