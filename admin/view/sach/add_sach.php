<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h3>Thêm sản phẩm </h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label mt-3">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" />

                        <label for="name" class="form-label mt-3">Tên tác giả</label>
                        <input type="text" name="name_tacgia" class="form-control" placeholder="Nhập tên sản phẩm" />

                        <label for="name" class="form-label mt-3">Giá sản phẩm</label>
                        <input type="text" name="price" class="form-control" placeholder="Nhập giá sản phẩm" />

                        <label for="name" class="form-label mt-3">Giá khuyến mại</label>
                        <input type="text" name="price_km" class="form-control" placeholder="Nhập giá sản phẩm" />

                        <label for="name" class="form-label mt-3">Số lượng sản phẩm</label>
                        <input type="number" name="soluong" class="form-control" />

                        <label for="name" class="form-label mt-3">Ảnh</label>
                        <input type="file" name="hinh" class="form-control" />


                        <label for="name" class="form-label mt-3">Ngày xuất bản</label>
                        <input type="date" name="ngayxuat" class="form-control" />

                        <label for="name" class="form-label mt-3">Mô tả</label>
                        <textarea class="form-control" name="mota" rows="3"></textarea>

                        <div class="d-flex justify-content-between">
                            <div>
                                <label for="name" class="form-label mt-3">Trạng Thái</label>
                                <select class="form-select" name="trangthai" aria-label="Default select example">

                                    <?php
                                    foreach ($listtrangthai as $trangthai) {
                                        extract($trangthai);
                                    ?>
                                    <option value="<?php echo $id_trangthai ?>"><?php echo $ten_trangthai ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mx-5">
                                <label for="name" class="form-label mt-3">Loại sản phẩm</label>
                                <select class="form-select" name="iddm" aria-label="Default select example">

                                    <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                    ?>
                                    <option value="<?php echo $id_danhmuc ?>"><?php echo $tendanhmuc ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <br>
                        <button type="submit" name="themmoi" class="btn btn-primary">Thêm mới</button>
                        <?php
            if(isset($thongbao)){
                echo $thongbao;
            }
                
        
                
            ?>
                </form>
            </div>
        </div>
    </div>
</div>