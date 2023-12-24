<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>LTH Booker</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Mannatthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/images/logo.png" style="width: 20px; height: 20px;">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/8e3c294816.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div> -->
    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid d-flex justify-content-between ">
                <!-- Logo container-->
                <div class="logo">
                    <a href="index.html" class="logo">
                        <img class="hide-phone" style="width: 120px; margin: 10px;" src="assets/images/logo.png" alt="">
                        <span class="hide-phone"></span></span>
                    </a>
                </div>
                <!-- End Logo container-->
                <div class="menu-extras topbar-custom ">
                    <ul class="list-unstyled float-right mb-0">
                        <!-- language-->
                        <li class="dropdown notification-list hide-phone">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">English <img
                                    src="assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right language-switch">
                                <a class="dropdown-item" href="#">
                                    <img src="assets/images/flags/Flag_Vietnam.svg.png" alt="" height="16">
                                    <span>Vietnamese</span>
                                </a>
                            </div>
                        </li>

                        <!-- User-->
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown border-0">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Welcome</h5>
                                </div>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-circle-user"></i> Profile </a>
                                <a class="dropdown-item" href="admin/login.php">
                                    <i class="fa-solid fa-share"></i> Đăng nhập </a>
                                <a class="dropdown-item" href="admin/register.php">
                                    <i class="fa-solid fa-user-plus"></i> Đăng ký </a>
                                <a class="dropdown-item" href="../../user/index.php?act=thoat">
                                    <i class="fa-solid fa-right-from-bracket"></i> Đăng xuất </a>
                            </div>
                        </li>
                        <li class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                    </ul>
                </div>
                <!-- end menu-extras -->
                <!-- <div class="clearfix "></div> -->
            </div>
            <!-- end container -->
        </div>
        <!-- end topbar-main -->
        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="index.php">
                                <i class="dripicons-device-desktop"></i>Trang điều khiển </a>
                        </li>
                        <li class="has-submenu">
                            <a href="?act=list_dm">
                                <i class="fa-regular fa-rectangle-list"></i>Danh mục</a>
                        </li>
                        <li class="has-submenu">
                            <a href="?act=list_sach">
                                <i class="dripicons-blog"></i>Sách</a>
                        </li>
                        <li class="has-submenu">
                            <a href="?act=list_bl">
                                <i class="fa-regular fa-comment"></i></i>Bình luận </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="dripicons-copy"></i>Đơn hàng</a>
                        </li>
                        <li class="has-submenu">
                            <a href="?act=list_nd">
                                <i class="fa-regular fa-user"></i>Tài khoản</a>
                        </li>
                    </ul>
                    <!-- End navigation menu -->
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->
    </header>