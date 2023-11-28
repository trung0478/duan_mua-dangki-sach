<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h3>Sửa người dùng </h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <div class="d-flex ">
                            <div>
                                <label for="name" class="form-label mt-3">Quyền</label>
                                <select class="form-control" name="vaitro" aria-label="Default select example">
                                    <option value="0" <?= ($getOne_nd['vaitro']==0)?"selected":"";?>>Người dùng</option>
                                    <option value="1" <?= ($getOne_nd['vaitro']==1)?"selected":"";?>>Admin</option>
                                </select>
                            </div>
                            <div class="mx-5">
                                <label for="name" class="form-label mt-3">Trạng Thái</label>
                                <select class="form-control" name="trangthai" aria-label="Default select example">
                                    <option value="0" <?= ($getOne_nd['trangthai']==0)?"selected":"";?>>Khoá</option>
                                    <option value="1" <?= ($getOne_nd['trangthai']==1)?"selected":"";?>>Kích hoạt</option>
                                </select>
                            </div>
                        </div>

                        <br>
                        <button type="submit" name="update" class="btn btn-primary">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>