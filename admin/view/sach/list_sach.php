<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between my-md-2 my-2">
                    <h3 class="fs-1">Danh sách sản phẩm</h3>
                    <a href="?act=add_sach" class="btn btn-primary my-md-2 my-1">Thêm mới</a>
                </div>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Tên tác giả</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Giá khuyến mại</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Ngày xuất bản</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Loại</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($listsach as $sach) {
                        extract($sach);
                        $suasp = "index.php?act=suasach&id_sach=" . $id_sach;
                        $xoasp = "index.php?act=xoasach&id_sach=" . $id_sach;
                        $hinhpath = "../upload/" . $anh;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' height='80'>";
                        } else {
                            $hinh = "No photo";
                        }
                    ?>
                    <tbody>
                        <tr>

                            <td class="text-center">
                                <?php echo $id_sach  ?>
                            </td>
                            <td class="text-center">
                                <?php echo $ten_sach  ?>
                            </td>
                            <td class="text-center">
                                <?php echo $ten_tacgia  ?>
                            </td>
                            <td class="text-center">
                                <?php echo $hinh  ?>
                            </td>
                            <td class="text-center">
                                <?php echo $gia  ?>
                            </td>
                            <td class="text-center">
                                <?php echo $gia_khuyenmai  ?>
                            </td>
                            <td class="text-center">
                                <?php echo $soluong  ?>
                            </td>
                            <td class="text-center">
                                <?php echo $ngay_xuatban  ?>
                            </td>
                            <td class="text-center">
                                <?php echo substr($mota, 0, 9) . "..." ?>
                            </td>
                            <td class="text-center">
                                <?php echo $tendanhmuc  ?>
                            </td>
                            <td class="text-center">
                                <?php echo $ten_trangthai  ?>
                            </td>


                            <td class="text-center">
                                <a href="<?php echo $suasp ?>" class="btn btn-warning">Sửa</a>
                                <a href="<?php echo $xoasp ?>" onclick="return confirm('Bạn có xoá không?')" href=""
                                    class="btn btn-danger">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>