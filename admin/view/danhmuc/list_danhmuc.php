<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between my-md-2 my-2">
                    <h3 class="fs-1">Danh sách danh mục</h3>
                    <a href="?act=add_dm" class="btn btn-primary my-md-2 my-1">Thêm mới</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stt = 1;
                        foreach ($list_dm as $value) :
                            extract($value);
                        ?>
                        <tr>
                            <th scope="row"><?php echo $stt; ?></th>
                            <td><?php echo $tendanhmuc ?></td>
                            <td><?php echo ($trangthai) == 1 ? 'Hiện' : 'Ẩn'; ?></td>
                            <td>
                                <a href="?act=update_dm&iddm=<?= $id_danhmuc ?>" class="btn btn-warning">Sửa</a>
                                <a href="?act=delete_dm&iddm=<?= $id_danhmuc ?>"
                                    onclick="return confirm('Bạn có xoá không?')" href="#" class="btn btn-danger">Xóa
                                </a>
                            </td>
                        </tr>
                        <?php $stt += 1;
                        endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>