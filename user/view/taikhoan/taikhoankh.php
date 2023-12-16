<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#" class="active">Tài khoản của tôi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- entry-header-area-start -->
<div class="entry-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="entry-header-title">
                    <h2>Tài khoản của tôi</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- entry-header-area-end -->
<!-- my account wrapper start -->
<div class="my-account-wrapper mb-70">
    <div class="container">
        <div class="section-bg-color">
            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#account-info" class="active" data-bs-toggle="tab"><i
                                            class="fa fa-user"></i> Chi tiết tài
                                        khoản</a>
                                    <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                        Đơn đặt hàng</a>

                                    <a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i>
                                        Phương thức thanh toán</a>
                                    <a href="index.php?act=thoat"><i class="fa fa-sign-out"></i> Đăng xuất</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h5>Orders</h5>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Pending</td>
                                                            <td>$3000</td>
                                                            <td><a href="cart.html" class="btn btn-sqr">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>July 22, 2018</td>
                                                            <td>Approved</td>
                                                            <td>$200</td>
                                                            <td><a href="cart.html" class="btn btn-sqr">View</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>June 12, 2017</td>
                                                            <td>On Hold</td>
                                                            <td>$990</td>
                                                            <td><a href="cart.html" class="btn btn-sqr">View</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->



                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade " id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h5>Payment Method</h5>
                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->



                                    <!-- Single Tab Content Start -->
                                    <?php
                                     if (isset($_SESSION['name']) && (is_array($_SESSION['name']))) {
                                        extract($_SESSION['name']);
                                    }
                                    ?>
                                    <div class="tab-pane fade show active" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h5>Chi tiết tài khoản</h5>
                                            <div class="account-details-form">
                                                <form action="#" method="post">
                                                    <div class="row">
                                                        <div class="single-input-item col-lg-6">
                                                            <label for="display-name" class="required">Tên tài
                                                                khoản</label>
                                                            <input type="text" id="display-name"
                                                                value="<?= $ho_ten ?>" />
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Avata</label>
                                                            <div class="d-flex">
                                                                <input style="width:50%;" type="file" name="hinh" id="">

                                                                <?php
                                                                if (isset($_SESSION['name'])) {
                                                                    extract($_SESSION['name']);
                                                                    if (!empty($anh)) {
                                                                        $hinhpath = "upload/" . $anh;
                                                                        if (is_file($hinhpath)) {
                                                                            $hinh = "<img src='" . $hinhpath . "' style='height: 100px; width: 100px; border-radius: 50%;'>";
                                                                        } else {
                                                                            $hinh = "No photo";
                                                                        }
                                                                    } else {
                                                                        $hinh = "<img src='upload/avata_null.jpg' alt='' ' style='height: 100px; width: 100px; border-radius: 50%;'>";
                                                                    }
                                                                ?>
                                                                <?php echo $hinh ?>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="display-name" class="required">Email</label>
                                                        <input type="text" id="display-name" value="<?= $email ?>"
                                                            readonly />
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="email" class="required">Địa chỉ</label>
                                                        <input type="email" id="email" value="<?= $diachi ?>" />
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="email" class="required">Số điện thoại</label>
                                                        <input type="email" id="email" value="<?= $so_dienthoai ?>" />
                                                    </div>
                                                    <div class="single-input-item">
                                                        <button class="btn btn-sqr">Lưu</button>
                                                    </div>
                                                </form>
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <legend>Thay đổi mật khẩu</legend>
                                                        <div class="single-input-item">
                                                            <label for="current-pwd" class="required">Nhập mật khẩu
                                                                cũ</label>
                                                            <input type="password" id="current-pwd" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="new-pwd" class="required">Mật khẩu
                                                                        mới</label>
                                                                    <input type="password" id="new-pwd" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="confirm-pwd" class="required">Mật
                                                                        khẩu
                                                                        xác minh</label>
                                                                    <input type="password" id="confirm-pwd" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item">
                                                        <button class="btn btn-sqr">Lưu</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
</div>