<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#" class="active">Sản phẩm chi tiết</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs-area-end -->
<!-- product-main-area-start -->
<div class="product-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 order-lg-1 order-1">
                <!-- product-main-area-start -->
                <div class="product-main-area">
                    <div class="row">
                        <?php extract($onesp); ?>

                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="img/thum-2/1.jpg">
                                        <img style="height: 500px;" src="upload/<?php echo $anh ?>" alt="woman" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="product-info-main">
                                <div class="page-title">
                                    <h1><?php echo $ten_sach ?></h1>
                                </div>

                                <div class="product-reviews-summary">
                                    <div class="rating-summary">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="reviews-actions">
                                        <a href="#">3 Đánh giá</a>
                                        <a href="#" class="view">Xem đáng giá</a>
                                    </div>
                                </div>
                                <div class="product-info-price">
                                    <div class="price-final">
                                        <span><?php echo $gia_khuyenmai ?></span>
                                        <span class="old-price"><?php echo $gia ?></span>
                                    </div>
                                </div>
                                <div class="product-add-form">
                                    <form action="#">
                                        <div class="quality-button">
                                            <input class="qty" type="number" value="1">
                                        </div>
                                        <a href="#">Thêm vào giỏ hàng </a>
                                    </form>
                                </div>
                                <div class="product-social-links">
                                    <div class="product-addto-links">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-pie-chart"></i></a>
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-main-area-end -->
                <!-- product-info-area-start -->
                <div class="product-info-area mt-80">
                    <!-- Nav tabs -->
                    <ul class="nav">
                        <li><a class="active" href="#Details" data-bs-toggle="tab">Chi tiết</a></li>
                        <li><a href="#Reviews" data-bs-toggle="tab">Bình luận</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Details">
                            <div class="valu">
                                <p><?php echo $mota ?>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Reviews">
                            <?php
                            if (isset($_SESSION['name'])) {
                            ?>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                            <script>
                            $(document).ready(function() {
                                $("#binhluan").load("user/view/binhluan/binhluanform.php", {
                                    idpro: <?= $id_sach ?>
                                });
                            });
                            </script>
                            <div class="mb" id="binhluan">
                            </div>
                            <?php } else { ?>
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                    aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>
                                <div style="margin-top: 20px;">
                                    Vui lòng đăng nhập để bình luận sản phẩm này
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- product-info-area-end -->
                <!-- new-book-area-start -->
                <div class="new-book-area mt-60">
                    <div class="section-title text-center mb-30">
                        <h3>Sản phẩm cùng danh mục</h3>
                    </div>
                    <div class="tab-active-2 owl-carousel">
                        <!-- single-product-start -->
                        <?php
                        foreach ($sp_cung_loai as $sp) {
                            extract($sp); ?>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="index.php?act=sanphamct&idsp=<?php echo $id_sach; ?>">
                                    <img style="width:80%;" src="upload/<?php echo $anh ?>" alt="book"
                                        class="primary" />
                                </a>
                                <div class="quick-view">
                                    <a class="action-view" href="#" data-bs-target="#productModal"
                                        data-bs-toggle="modal" title="Quick View">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="product-flag">
                                    <ul>
                                        <li><span class="sale">new</span></li>
                                        <li><span class="discount-percentage">-5%</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-details text-center">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a
                                        href="index.php?act=sanphamct&idsp=<?php echo $id_sach; ?>"><?php echo $ten_sach ?></a>
                                </h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-link">
                                <div class="product-button">
                                    <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ
                                        hàngt</a>
                                </div>
                                <div class="add-to-link">
                                    <ul>
                                        <li><a href="product-details.html" title="Details"><i
                                                    class="fa fa-external-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- new-book-area-start -->
            </div>
        </div>
    </div>
</div>