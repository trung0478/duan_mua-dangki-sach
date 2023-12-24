<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#" class="active">Đăng nhập</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- user-login-area-start -->
<div class="user-login-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-title text-center mb-30">
                    <h2>Đăng nhập</h2>

                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                <?php
                if ($error_message != '') {
                    echo '<div class="alert alert-primary thongbao">' . $error_message . '</div>';
                  } ?>
                <div class="login-form">
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="single-login">
                            <label>Email<span>*</span></label>
                            <input type="text" name="email" />
                        </div>
                        <div class="single-login">
                            <label>Mật khẩu <span>*</span></label>
                            <input type="password" name="pass" />
                        </div>
                        <div class="single-login single-login-2">
                            <input type="submit" name="dangnhap" value="Đăng nhập">
                        </div>
                        <a href="index.php?act=quenmk">Quên mật khẩu?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- user-login-area-end -->
<!-- footer-area-start -->