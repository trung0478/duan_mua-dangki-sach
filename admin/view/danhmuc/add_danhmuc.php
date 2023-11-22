<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h3>Thêm danh mục </h3>
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên danh mục</label>
                        <input type="text" name="ten_dm" class="form-control" id="name" placeholder="Nhập tên danh mục" />

                        <br>
                        <label for="name" class="form-label">Trạng thái</label>
                        <select name="trangthai_dm" id="" class="form-select" >
                            <option selected>Chọn trạng thái</option>
                            <option value="0">Ẩn</option>
                            <option value="1">Hiện</option>
                        </select>
                    </div>
                    <button type="submit" name="add_dm" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>