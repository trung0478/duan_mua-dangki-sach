<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h3>Chi tiết bình luận</h3>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Người bình luận</th>
                            <th scope="col">Ngày bình luận</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        $stt = 0;
                         foreach ($list_bl as $bl): ?>
                            <?php extract($bl); ?>
                            <tr>
                                <th scope="row">
                                    <?= $stt+= 1    ?>
                                </th>
                                <td>
                                    <?= $noidung ?>
                                </td>
                                <td>
                                    <?=$ho_ten?>
                                </td>
                                <td>
                                    <?= $ngay_binhluan ?>
                                </td>
                                <td>
                                    <a onclick="return confirm('Bạn có muốn xoá không?')" href="index.php?act=delete_bl&idbl=<?=$id_binhluan?>" class="btn btn-danger">Xoá</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>