<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h3>Sửa danh mục </h3>
                <form method="post">
                    <div class="mb-3">
                        <input type="hidden" name="iddm" class="form-control" value="<?php echo $dm['id_danhmuc'] ?>" />
                        <label for="name" class="form-label">Mã danh mục</label>
                        <input type="text" class="form-control" disabled value="<?php echo $dm['id_danhmuc'] ?>" />
                        <label for="name" class="form-label">Tên danh mục</label>
                        <input type="text" name="ten_dm" class="form-control" placeholder="Nhập tên danh mục" value="<?php echo $dm['tendanhmuc'] ?>" />
                        <br>
                        <label for="name" class="form-label">Trạng thái</label>
                        <select name="trangthai_dm"  class="form-select">
                            <option>Chọn trạng thái</option>
                            <option value="0" <?php echo ($dm['trangthai'] == 0) ? 'selected' : ''; ?>>Ẩn</option>
                            <option value="1" <?php echo ($dm['trangthai'] == 1) ? 'selected' : ''; ?>>Hiện</option>
                        </select>
                    </div>
                    <button type="submit" name="update_dm" class="btn btn-primary">Sửa </button>
                </form>
            </div>
        </div>
    </div>
</div>