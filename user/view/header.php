<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Website Mua Sách</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://htmldemo.net/koparion/koparion/img/favicon.png">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/animate.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/font-awesome.min.css">
    <!-- flexslider.css-->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/flexslider.css">
    <!-- chosen.min.css-->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/chosen.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="https://htmldemo.net/koparion/koparion/css/responsive.css">
    <!-- modernizr css -->
    <script src="https://htmldemo.net/koparion/koparion/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
    .product-img img {
        height: 280px;
    }

    .single-bestseller .bestseller-img a img {
        width: 100%;
        height: 220px;
    }

    /* đăng ký đăng nhập */
    .login-form .single-login input[type="submit"] {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: 1px solid #eceff8;
        display: inline-block;
        padding: 10px 43px;
        color: #333;
        text-transform: capitalize;
        text-decoration: none;
        float: left;
        transition: .3s;
        font-family: 'Rufina',
            serif;
        font-weight: 400;
    }

    .login-form .single-login input[type="submit"]:hover {
        background: #F07C29;
        color: #fff;
        border: 1px solid #F07C29;
    }
    </style>

</head>

<body class="home-2">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header-area-start -->
    <header>
        <!-- header-top-area-start -->
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="language-area">
                            <ul>
                                <li><img style="width: 22px;" src="img/vietnam.png" alt="flag" /><a href="#">Việt Nam<i
                                            class="fa fa-angle-down"></i></a>
                                    <div class="header-sub">
                                        <ul>
                                            <li><a href="#"><img
                                                        src="https://htmldemo.net/koparion/koparion/img/flag/2.jpg"
                                                        alt="flag" />france</a></li>
                                            <li><a href="#"><img
                                                        src="https://htmldemo.net/koparion/koparion/img/flag/1.jpg"
                                                        alt="flag" />English</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">Việt Nam<i class="fa fa-angle-down"></i></a>
                                    <div class="header-sub dolor">
                                        <ul>
                                            <li><a href="#">Việt nam</a></li>
                                            <li><a href="#">USD $</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="account-area text-end">
                            <ul>
                                <?php if(isset($_SESSION['name'])){ ?>
                                <li><a href="index.php?act=taikhoankh">Tài Khoản của tôi</a></li>
                                <li><a href="index.php?act=thoat">Đăng xuất</a></li>

                                <?php }else{      
                                 ?>
                                <li><a href="index.php?act=dangky">Đăng ký</a></li>
                                <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top-area-end -->
        <!-- header-mid-area-start -->
        <div class="header-mid-area ptb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-12">
                        <div class="header-search">
                            <form action="#">
                                <input type="text" placeholder="Tìm mọi thứ ở đây..." />
                                <a href="#"><i class="fa fa-search"></i></a>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-12">
                        <div class="logo-area text-center logo-xs-mrg">
                            <a href="index.html"><img src="https://htmldemo.net/koparion/koparion/img/logo/logo.png"
                                    alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="my-cart">
                            <ul>
                                <li><a href="?act=giohang"><i class="fa fa-shopping-cart"></i>Giỏ Hàng</a>
                                    <span id="quantitycart"> <?= (!empty($_SESSION['cart']))?count($_SESSION['cart']):"0"; ?> </span>
                                    <div class="mini-cart-sub">
                                        <div class="cart-product">
                                            <div class="single-cart">
                                                <div class="cart-img">
                                                    <a href="#"><img
                                                            src="https://htmldemo.net/koparion/koparion/img/product/1.jpg"
                                                            alt="book" /></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h5><a href="#">Sách tiểu thuyết</a></h5>
                                                    <p>160.000 vnđ</p>
                                                </div>
                                                <div class="cart-icon">
                                                    <a href="#"><i class="fa fa-remove"></i></a>
                                                </div>
                                            </div>
                                            <div class="single-cart">
                                                <div class="cart-img">
                                                    <a href="#"><img
                                                            src="https://htmldemo.net/koparion/koparion/img/product/3.jpg"
                                                            alt="book" /></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h5><a href="#">Sách truyền thuyết</a></h5>
                                                    <p>152.000 vnđ</p>
                                                </div>
                                                <div class="cart-icon">
                                                    <a href="#"><i class="fa fa-remove"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-totals">
                                            <h5>Tổng tiền <span>112.00 vnđ</span></h5>
                                        </div>
                                        <div class="cart-bottom">
                                            <a class="view-cart" href="index.php?action=giohang">Xem giỏ hàng</a>
                                            <a href="thanhtoan.html">Thủ tục thanh toán</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-mid-area-end -->
        <!-- main-menu-area-start -->
        <div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-area">
                            <nav>
                                <ul>
                                    <li class="active"><a href="index.php">Trang chủ</a></li>
                                    <li><a href="index.php?act=sanpham">Sách</a></li>
                                    <li><a href="index.php?act=gioithieu">Giới thiệu</a>
                                    </li>
                                    <li><a href="index.php?act=lienhe">Liên hệ</a> </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="safe-area">
                            <a href="index.php?act=khuyenmai">Khuyễn Mãi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-menu-area-end -->
    </header>