<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#" class="active">Quên mật khẩu</a></li>
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
                    <h2>Lấy lại mật khẩu</h2>

                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                <div class="login-form">
                    <form action="index.php?act=quenmk" method="post">
                        <div class="single-login">
                            <label>Nhập email<span>*</span></label>
                            <input type="email" name="email" />
                        </div>
                        <input type="submit" name="gui" value="Gửi">
                        <a href="index.php?act=dangnhap">Quay lại ?</a>
                    </form>
                    <p class="thongbao" style="color: red;">
                        <?php
                        if (isset($sendMailMess) && $sendMailMess != '') {
                            echo $sendMailMess;
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- user-login-area-end -->
<!-- footer-area-start -->
<footer>
    <!-- footer-top-start -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-top-menu bb-2">
                        <nav>
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">Enable Cookies</a></li>
                                <li><a href="#">Privacy and Cookie Policy</a></li>
                                <li><a href="#">contact us</a></li>
                                <li><a href="#">blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>