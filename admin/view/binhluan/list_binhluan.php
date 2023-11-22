
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h3>Danh sách bình luận sản phẩm</h3>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Sản phẩm bình luận</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_bl as $bl): ?>
                            <?php extract($bl); ?>
                            <tr>
                                <th scope="row">
                                    <?= $id_sach ?>
                                </th>
                                <td>
                                    <?= $ten_sach ?>
                                </td>
                                <td>
                                    <?= $soluong ?>
                                </td>
                                <td>
                                    <a href="?act=chitiet_bl&idbl=<?= $id_sach?>" class="btn btn-primary">Xem chi tiết</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>