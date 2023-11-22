<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <?php
                if (is_array($sach)) {
                    extract($sach);
                }
                ?>
                <h3>Sửa sản phẩm </h3>
                <form method="post" action="index.php?act=update_sach" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?php echo $id_sach ?>">
                        <label for="name" class="form-label mt-3">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm"
                            value="<?php echo $ten_sach  ?>" />

                        <label for="name" class="form-label mt-3">Tên tác giả</label>
                        <input type="text" name="name_tacgia" class="form-control" placeholder="Nhập tên sản phẩm"
                            value="<?php echo $ten_tacgia ?>" />

                        <label for="name" class="form-label mt-3">Giá sản phẩm</label>
                        <input type="text" name="price" class="form-control" placeholder="Nhập giá sản phẩm"
                            value="<?php echo $gia  ?>" />

                        <label for="name" class="form-label mt-3">Giá khuyến mại</label>
                        <input type="text" name="price_km" class="form-control" placeholder="Nhập giá sản phẩm"
                            value="<?php echo $gia_khuyenmai  ?>" />z

                        <label for="name" class="form-label mt-3">Số lượng sản phẩm</label>
                        <input type="number" name="soluong" class="form-control" value="<?php echo $soluong  ?>" />

                        <label for="name" class="form-label mt-3">Ảnh</label>
                        <input type="file" name="hinh" class="form-control" value="<?php echo $anh  ?>" />


                        <label for="name" class="form-label mt-3">Ngày xuất bản</label>
                        <input type="date" name="ngayxuat" class="form-control" value="<?php echo $ngay_xuatban  ?>" />

                        <label for="name" class="form-label mt-3">Mô tả</label>
                        <textarea class="form-control" name="mota" rows="3"><?php echo $mota ?></textarea>

                        <div class="d-flex justify-content-between">
                            <div>
                                <label for="name" class="form-label mt-3">Trạng Thái</label>
                                <select class="form-select" name="trangthai" aria-label="Default select example">
                                    <?php
                                    foreach ($listtrangthai as $trangthai) {                                        
                                        if ($trangthai['id_trangthai'] == $id_trangthai) $s = "selected";
                                        else $s = "";
                                        echo '<option value="' . $trangthai['id_trangthai'] . '" ' . $s . '>' . $trangthai['ten_trangthai'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mx-5">
                                <label for="name" class="form-label mt-3">Loại sản phẩm</label>
                                <select class="form-select" name="iddm" aria-label="Default select example">
                                    <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                        if ($danhmuc['id_danhmuc'] == $id_danhmuc) $s = "selected";
                                        else $s = "";
                                        echo '<option value="' . $danhmuc['id_danhmuc'] . '" ' . $s . '>' . $danhmuc['tendanhmuc'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <button type="submit" name="capnhat" class="btn btn-primary">cập nhật</button>
                        <?php
                        if (isset($thongbao)) {
                            echo $thongbao;
                        }



                        ?>
                </form>
            </div>
        </div>
    </div>
</div>