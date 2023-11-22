<!-- slider-area-start -->
<div class="slider-area mt-30">
    <div class="container">
        <div class="slider-active owl-carousel">
            <div class="single-slider pt-100 pb-145 bg-img"
                style="background-image:url(https://htmldemo.net/koparion/koparion/img/slider/13.jpg);">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-content-3 slider-animated-1 pl-100">
                            <h1>Kiên nhẫn <br>Thành công</h1>
                            <p class="slider-sale">
                                <span class="sale1">-20%</span>
                                <span class="sale2">
                                    <strong>199.00 đ</strong>
                                    99.000 đ
                                </span>
                            </p>
                            <a href="#">Xem ngay!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider pt-100 pb-145 bg-img"
                style="background-image:url(https://htmldemo.net/koparion/koparion/img/slider/12.jpg);">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-content-3 slider-animated-1 pl-100">
                            <h1>Đánh Thức <br>Ngai vàng</h1>
                            <p class="slider-sale">
                                <span class="sale1">-20%</span>
                                <span class="sale2">
                                    <strong>199.000 đ</strong>
                                    90.000 đ
                                </span>
                            </p>
                            <a href="#">Xem ngay!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider-area-end -->
<!-- featured-area-start -->
<div class="Mới-book-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title section-title-res text-center mb-30">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
            </div>
        </div>
        <div class="tab-active owl-carousel">
            <?php
            $i = 0;
            foreach ($sach_noibat as $sach) {
                extract($sach);
            ?>
            <div class="tab-total">
                <!-- single-product-start -->
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="upload/<?php echo $anh ?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal"
                                title="Quick View">
                                <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">Mới</span> <br></li>
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
                        <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                        <div class="product-price">
                            <ul>
                                <li><?php echo $gia ?> đ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ
                                hàng</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.html" title="Details"><i
                                            class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- single-product-end -->
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- featured-area-start -->
<!-- banner-area-start -->
<div class="banner-area-5 mtb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-img-2">
                    <a href="#"><img src="https://htmldemo.net/koparion/koparion/img/banner/5.jpg" alt="banner" /></a>
                    <div class="banner-text">
                        <h3>G. Meyer sách & Nhà thám tử thông minh</h3>
                        <h2>Sale up to 30% off</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area-end -->
<!-- bestseller-area-start -->
<div class="bestseller-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="deal-active owl-carousel">
                    <div class="single-deal">
                        <div class="deal-off-day">
                            <div class="deal-off-day-title">
                                <h1>Ưa đãi trong ngày</h1>
                            </div>
                            <h2><a href="#">Khuyến Mãi <br />Đặc Biệt </a></h2>
                            <div class="sale-area">
                                <div class="price-box">
                                    <span class="old-sale">188.000 đ</span>
                                    <span class="Mới-sale">99.000 đ</span>
                                </div>
                            </div>
                            <p>Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with
                                ruffles at the bottom of the dress.</p>
                            <div class="timer">
                                <div data-countdown="2023/5/15"></div>
                            </div>
                        </div>
                        <div class="banner-img-3">
                            <a href="#"><img src="https://htmldemo.net/koparion/koparion/img/product/5.jpg"
                                    alt="banner" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12">
                <div class="bestseller-active owl-carousel">
                    <?php
                    $i = 0;
                    foreach ($sach_khuyenmai as $sach) {
                        extract($sach);
                    ?>
                    <div class="bestseller-total">

                        <div class="single-bestseller mb-25">
                            <div class="bestseller-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="bestseller-text text-center">
                                <h3> <a href="#">Chuyến đi trong ngày</a></h3>
                                <div class="price">
                                    <ul>
                                        <li><span class="Mới-price">140.000 đ</span></li>
                                        <li><span class="old-price">45.000 đ</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single-bestseller">
                            <div class="bestseller-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="bestseller-text text-center">
                                <h3> <a href="#">Tự tin giao tiếp</a></h3>
                                <div class="price">
                                    <ul>
                                        <li><span class="Mới-price">70.000 đ</span></li>
                                        <li><span class="old-price">74.000 đ</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bestseller-area-end -->
<!-- product-area-start -->
<div class="product-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title bt text-center pt-100 mb-50">
                    <h2>Sản phẩm của chúng tôi</h2>
                    <p>Duyệt qua bộ sưu tập các sản phẩm bán chạy và thú vị nhất của chúng tôi. <br /> chắc chắn sẽ tìm
                        thấy những gì bạn đang tìm kiếm.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- tab-menu-start -->
                <div class="tab-menu mb-40 text-center">
                    <ul class="nav justify-content-center">
                        <li><a class="active" href="#Audiobooks" data-bs-toggle="tab">Mới về</a></li>
                        <li><a href="#books" data-bs-toggle="tab">Giảm giá</a></li>
                        <li><a href="#bussiness" data-bs-toggle="tab">Sản phẩm nổi bật</a></li>
                    </ul>
                </div>
                <!-- tab-menu-end -->
            </div>
        </div>
        <!-- tab-area-start -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Audiobooks">

                <div class="tab-active owl-carousel">
                    <?php
                    $i = 0;
                    foreach ($sach_new as $sach) {
                        extract($sach);
                    ?>
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img ">
                            <a href="#">
                                <img src="upload/<?php echo $anh ?>" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal"
                                    title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">Mới</span> <br></li>
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
                            <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                            <div class="product-price">
                                <ul>
                                    <li><?php echo $gia  ?> đ</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ
                                    hàng</a>
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
            <div class="tab-pane fade" id="books">
                <div class="tab-active owl-carousel">
                    <?php
                    $i = 0;
                    foreach ($sach_new as $sach) {
                        extract($sach);
                    ?>
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img ">
                            <a href="#">
                                <img src="upload/<?php echo $anh ?>" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal"
                                    title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">Mới</span> <br></li>
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
                            <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                            <div class="product-price">
                                <ul>
                                    <li><?php echo $gia  ?> đ</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ
                                    hàng</a>
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
            <div class="tab-pane fade" id="bussiness">
                <div class="tab-active owl-carousel">
                    <?php
                    $i = 0;
                    foreach ($sach_new as $sach) {
                        extract($sach);
                    ?>
                    <!-- single-product-start -->
                    <div class="product-wrapper">
                        <div class="product-img ">
                            <a href="#">
                                <img src="upload/<?php echo $anh ?>" alt="book" class="primary" />
                            </a>
                            <div class="quick-view">
                                <a class="action-view" href="#" data-bs-target="#productModal" data-bs-toggle="modal"
                                    title="Quick View">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                            </div>
                            <div class="product-flag">
                                <ul>
                                    <li><span class="sale">Mới</span> <br></li>
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
                            <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                            <div class="product-price">
                                <ul>
                                    <li><?php echo $gia  ?> đ</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-link">
                            <div class="product-button">
                                <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ
                                    hàng</a>
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
        </div>
        <!-- tab-area-end -->
    </div>
</div>
<!-- product-area-end -->
<!-- most-product-area-start -->
<div class="most-product-area pb-100">
    <div class="container">
        <div class="row bt-3 pt-95">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="section-title-2 mb-30">
                    <h3>Truyện</h3>
                </div>
                <div class="product-active-2 owl-carousel">
                    <?php
                    $i = 0;
                    foreach ($sach_new as $sach) {
                        extract($sach);
                    ?>
                    <div class="product-total-2">

                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia_khuyenmai ?></li>
                                        <li class="old-price"><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $gia ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia_khuyenmai ?></li>
                                        <li class="old-price"><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia_khuyenmai ?></li>
                                        <li class="old-price"><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php  } ?>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="section-title-2 mb-30">
                    <h3>Sách văn học</h3>
                </div>
                <div class="product-active-2 owl-carousel">
                    <?php
                    $i = 0;
                    foreach ($sach_new as $sach) {
                        extract($sach);
                    ?>
                    <div class="product-total-2">

                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia_khuyenmai ?></li>
                                        <li class="old-price"><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $gia ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia_khuyenmai ?></li>
                                        <li class="old-price"><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia_khuyenmai ?></li>
                                        <li class="old-price"><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php  } ?>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <div class="section-title-2 mb-30">
                    <h3>Sách kinh tế</h3>
                </div>
                <div class="product-active-2 owl-carousel">
                    <?php
                    $i = 0;
                    foreach ($sach_new as $sach) {
                        extract($sach);
                    ?>
                    <div class="product-total-2">

                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia_khuyenmai ?></li>
                                        <li class="old-price"><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $gia ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia_khuyenmai ?></li>
                                        <li class="old-price"><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="upload/<?php echo $anh ?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h4><a href="#"><?php echo $ten_sach ?></a></h4>
                                <div class="product-price">
                                    <ul>
                                        <li><?php echo $gia_khuyenmai ?></li>
                                        <li class="old-price"><?php echo $gia ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php  } ?>

                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="block-Mớisletter">
                    <h2>Đăng ký gửi bản tin mới</h2>
                    <p>Bạn có thể luôn cập nhật với công ty Mới của chúng tôi!</p>
                    <form action="#">
                        <input type="text" placeholder="Nhập địa chỉ email của bạn" />
                    </form>
                    <a href="#">Gửi email</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- most-product-area-end -->
<!-- recent-post-area-start -->
<div class="recent-post-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title section-title-res pt-100 bt-3 text-center mb-30">
                    <h2>Tin Tức Mới Nhất</h2>
                </div>
            </div>
            <div class="post-active owl-carousel text-center">
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="#"><img src="https://htmldemo.net/koparion/koparion/img/post/1.jpg"
                                    alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">06</span>
                                <span class="moth-time">Tháng 10</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="#">Lịch sử và cường điệu</a></h3>
                            <span class="meta-author"> Cúp thử nghiệm </span>
                            <p>Khám phá những quyển sách yêu thích từ bộ sưu tập mới của chúng tôi, chúng xẽ đuọc yêu
                                thích ngay lập tập.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="#"><img src="https://htmldemo.net/koparion/koparion/img/post/3.jpg"
                                    alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">06</span>
                                <span class="moth-time">Tháng 10</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="#">Trả lời cho bạn những câu hỏi</a></h3>
                            <span class="meta-author"> Cúp thử nghiệm </span>
                            <p>Khám phá những quyển sách yêu thích từ bộ sưu tập mới của chúng tôi, chúng xẽ đuọc yêu
                                thích ngay lập tập.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="#"><img src="https://htmldemo.net/koparion/koparion/img/post/2.jpg"
                                    alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">06</span>
                                <span class="moth-time">Tháng 10</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="#">Bootstrap là gì?</a></h3>
                            <span class="meta-author"> Cúp thử nghiệm </span>
                            <p>Khám phá những quyển sách yêu thích từ bộ sưu tập mới của chúng tôi, chúng xẽ đuọc yêu
                                thích ngay lập tập.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="#"><img src="https://htmldemo.net/koparion/koparion/img/post/4.jpg"
                                    alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">06</span>
                                <span class="moth-time">Tháng 10</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="#">Lịch sử và cường điệu</a></h3>
                            <span class="meta-author"> Cúp thử nghiệm </span>
                            <p>Khám phá những quyển sách yêu thích từ bộ sưu tập mới của chúng tôi, chúng xẽ đuọc yêu
                                thích ngay lập tập.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- recent-post-area-end -->
<!-- banner-area-start -->
<div class="banner-area banner-res-large pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="https://htmldemo.net/koparion/koparion/img/banner/1.png"
                                alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Free shipping</h4>
                        <p>tất cả đơn hàng trên 500 đ</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="https://htmldemo.net/koparion/koparion/img/banner/2.png"
                                alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Đảm bảo hoàn tiền</h4>
                        <p>Đmar bảo hoàn lại tiền 100%</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="https://htmldemo.net/koparion/koparion/img/banner/3.png"
                                alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Thanh toán khi giao hàng</h4>
                        <p>Tôi rất hanh phúc với kết quả này</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="single-banner mb-30">
                    <div class="banner-img">
                        <a href="#"><img src="https://htmldemo.net/koparion/koparion/img/banner/4.png"
                                alt="banner" /></a>
                    </div>
                    <div class="banner-text">
                        <h4>Trợ giúp & Hỗ trợ</h4>
                        <p>Hãy gọi cho chúng tôi : + 0123.4567.89</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area-end -->
<!-- social-group-area-start -->
<div class="social-group-area ptb-60 bt">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title-3">
                    <h3> Tweets mới nhất</h3>
                </div>
                <div class="twitter-content">
                    <div class="twitter-icon">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="twitter-text">
                        <p>
                            Sự rõ ràng là một quá tình năng động tuân theo nhũn thói quen luôn thay đổi của người độc.
                            Thật tuyệt với khi lưu ý làm thế nào.
                        </p>
                        <a href="#">koparion</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="section-title-3">
                    <h3>Giữ liên lạc</h3>
                </div>
                <div class="link-follow">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- social-group-area-end -->