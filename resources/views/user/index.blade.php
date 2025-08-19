

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2024 08:49:54 GMT -->
<head>
    <meta charset="utf-8">
    <title>Ecomus - Ultimate HTML</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- font -->
   <link rel="stylesheet" href="fonts/fonts.css">
   <link rel="stylesheet" href="fonts/font-icons.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/swiper-bundle.min.css">
   <link rel="stylesheet" href="css/animate.css">
   <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/favicon.png">
<link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">

</head>

<body class="preload-wrapper popup-loader">
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        <!-- Top Bar -->
        @include('user.top_bar')
        <!-- /Top Bar -->
        <!-- Header -->
        @incude('user.header')
        <!-- /Header -->
        <!-- Slider -->
        @include('user.slider')
        <!-- /Slider -->
        <!-- Marquee -->
        @include('user.marquee')
        <!-- /Marquee -->
        <!-- Categories -->
        @inlcude('user.categories')
        <!-- /Categories -->
        <!-- Seller - Note: where the cards of products are displayed-->
        @include('user.seller')
        <!-- /Seller -->
        <!-- Lookbook -->
        <section class="flat-spacing-6">
            <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                <span class="title">Shop the look</span>
                <p class="sub-title">Inspire and let yourself be inspired, from one unique fashion to another.</p>
            </div>
            <div class="swiper tf-sw-lookbook" data-preview="2" data-tablet="2" data-mobile="1" data-space-lg="0" data-space-md="0">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-lookbook lookbook-1">
                            <div class="image">
                                <img class="lazyload" data-src="images/shop/file/lookbook-3.jpg" src="images/shop/file/lookbook-3.jpg" alt="image-lookbook">
                            </div>
                            <div class="lookbook-item item-1">
                                <div class="inner">
                                    <div class="btn-group dropdown dropup dropdown-center">
                                        <button class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span></span>
                                        </button>
                                        <ul class="dropdown-menu p-0 border-0">
                                            <li>
                                                <div class="lookbook-product">
                                                    <a href="product-detail.html" class="image">
                                                        <img class="lazyload" data-src="images/shop/products/img-p2.png" src="images/shop/products/img-p2.png" alt="lookbook-item">
                                                    </a>
                                                    <div class="content-wrap">
                                                        <div class="product-title">
                                                            <a href="#">Jersey thong body</a>
                                                        </div>
                                                        <div class="price">$112.00</div>
                                                    </div>
                                                    <a href="#quick_view" data-bs-toggle="modal" class=""><i class="icon-view"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lookbook-item item-2">
                                <div class="inner">
                                    <div class="btn-group dropdown dropup dropdown-center">
                                        <button class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span></span>
                                        </button>
                                        <ul class="dropdown-menu p-0 border-0">
                                            <li>
                                                <div class="lookbook-product">
                                                    <a href="product-detail.html" class="image">
                                                        <img class="lazyload" data-src="images/shop/products/img-p4.png" src="images/shop/products/img-p4.png" alt="">
                                                    </a>
                                                    <div class="content-wrap">
                                                        <div class="product-title">
                                                            <a href="#">Ribbed modal T-shirt</a>
                                                        </div>
                                                        <div class="price">$20.00</div>
                                                    </div>
                                                    <a href="#quick_view" data-bs-toggle="modal" class=""><i class="icon-view"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-lookbook lookbook-2">
                            <div class="image">
                                <img class="lazyload" data-src="images/shop/file/lookbook-4.jpg" src="images/shop/file/lookbook-4.jpg" alt="image-lookbook">
                            </div>
                            <div class="lookbook-item item-1">
                                <div class="inner">
                                    <div class="btn-group dropdown dropup dropdown-center">
                                        <button class="tf-pin-btn" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span></span>
                                        </button>
                                        <ul class="dropdown-menu p-0 border-0">
                                            <li>
                                                <div class="lookbook-product">
                                                    <a href="product-detail.html" class="image">
                                                        <img class="lazyload" data-src="images/shop/products/img-p5.png" src="images/shop/products/img-p5.png" alt="">
                                                    </a>
                                                    <div class="content-wrap">
                                                        <div class="product-title">
                                                            <a href="#">Ribbed Tank Top</a>
                                                        </div>
                                                        <div class="price">$20.00</div>
                                                    </div>
                                                    <a href="#quick_view" data-bs-toggle="modal" class=""><i class="icon-view"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-pagination">
                    <div class="container-full">
                        <div class="sw-dots sw-pagination-lookbook justify-content-center"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Lookbook -->
        <!-- Testimonial -->
        @include('user.testimonial')
        <!-- /Testimonial -->
        <!-- brand -->
         <section class="flat-spacing-5 pt_0">
            <div class="container">
                <div class="swiper tf-sw-brand" data-loop="false" data-play="false" data-preview="6" data-tablet="3" data-mobile="2" data-space-lg="0" data-space-md="0">
                    <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="images/brand/brand-01.png" src="images/brand/brand-01.png" alt="image-brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="images/brand/brand-02.png" src="images/brand/brand-02.png" alt="image-brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="images/brand/brand-03.png" src="images/brand/brand-03.png" alt="image-brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="images/brand/brand-04.png" src="images/brand/brand-04.png" alt="image-brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="images/brand/brand-05.png" src="images/brand/brand-05.png" alt="image-brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="images/brand/brand-06.png" src="images/brand/brand-06.png" alt="image-brand">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="sw-dots style-2 sw-pagination-brand justify-content-center"></div>
            </div>
        </section>
        <!-- /brand -->
        <!-- Shop Gram -->
        <section class="flat-spacing-7">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">Shop Gram</span>
                    <p class="sub-title">Inspire and let yourself be inspired, from one unique fashion to another.</p>
                </div>
                <div class="wrap-carousel wrap-shop-gram">
                    <div class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="7" data-space-md="7">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".2s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-7.jpg" src="images/shop/gallery/gallery-7.jpg" alt="image-gallery">
                                    </div>
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".3s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-3.jpg" src="images/shop/gallery/gallery-3.jpg" alt="image-gallery">
                                    </div>
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".4s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-5.jpg" src="images/shop/gallery/gallery-5.jpg" alt="image-gallery">
                                    </div>
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".5s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-8.jpg" src="images/shop/gallery/gallery-8.jpg" alt="image-gallery">
                                    </div>
                                    <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".6s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover" data-src="images/shop/gallery/gallery-6.jpg" src="images/shop/gallery/gallery-6.jpg" alt="image-gallery">
                                    </div>
                                    <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dots sw-pagination-gallery justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Shop Gram -->
        <!-- Icon box -->
        <section class="flat-spacing-7 flat-iconbox wow fadeInUp" data-wow-delay="0s">
            <div class="container">
                <div class="wrap-carousel wrap-mobile">
                    <div class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                        <div class="swiper-wrapper wrap-iconbox">
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-border-line text-center">
                                    <div class="icon">
                                        <i class="icon-shipping"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title">Free Shipping</div>
                                        <p>Free shipping over order $120</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-border-line text-center">
                                    <div class="icon">
                                        <i class="icon-payment fs-22"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title">Flexible Payment</div>
                                        <p>Pay with Multiple Credit Cards</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-border-line text-center">
                                    <div class="icon">
                                        <i class="icon-return fs-22"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title">14 Day Returns</div>
                                        <p>Within 30 days for an exchange</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-border-line text-center">
                                    <div class="icon">
                                        <i class="icon-suport"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title">Premium Support</div>
                                        <p>Outstanding premium support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Icon box -->
        <!-- Footer -->
        @include('user.footer')
        <!-- /Footer -->
        
    </div>
    
    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /gotop -->
    
    <!-- toolbar-bottom -->
    @include('user.toolbar.bottom')
    <!-- /toolbar-bottom -->

    <!-- modalDemo -->
    @include('user.modal.demo')
    <!-- /modalDemo -->    

    <!-- mobile menu -->
    @include('user.mobile_menu')
    <!-- /mobile menu -->



    <!-- canvasSearch -->
    <div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">
        <div class="canvas-wrapper">
            <header class="tf-search-head">
                <div class="title fw-5">
                    Search our site
                    <div class="close">
                        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                    </div>
                </div>
                <div class="tf-search-sticky">
                    <form class="tf-mini-search-frm">
                        <fieldset class="text">
                            <input type="text" placeholder="Search" class="" name="text" tabindex="0" value="" aria-required="true" required="">
                        </fieldset>
                        <button class="" type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </header>
            <div class="canvas-body p-0">
                <div class="tf-search-content">
                    <div class="tf-cart-hide-has-results">
                        <div class="tf-col-quicklink">
                            <div class="tf-search-content-title fw-5">Quick link</div>
                            <ul class="tf-quicklink-list">
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Fashion</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Men</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Women</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Accessories</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tf-col-content">
                            <div class="tf-search-content-title fw-5">Need some inspiration?</div>
                            <div class="tf-search-hidden-inner">
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Cotton jersey top</a>
                                        <div class="tf-product-info-price">
                                            <div class="compare-at-price">$10.00</div>
                                            <div class="price-on-sale fw-6">$8.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Mini crossbody bag</a>
                                        <div class="tf-product-info-price">
                                            <div class="price fw-6">$18.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Oversized Printed T-shirt</a>
                                        <div class="tf-product-info-price">
                                            <div class="price fw-6">$18.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /canvasSearch -->

    <!-- toolbarShopmb -->
    @include('user.toolbar.shopmb')
    <!-- /toolbarShopmb -->

    <!-- modal login -->
    @include('user.modal.login')
    <!-- /modal login -->

    <!-- shoppingCart -->
    @include('user.shopping_cart')
    <!-- /shoppingCart -->

    <!-- modal compare -->
    @include('user.modal.compare')
    <!-- /modal compare -->
    
    <!-- modal quick_add -->
    @include(user.modal.quick_add)
    <!-- /modal quick_add -->

    <!-- modal quick_view -->
    @include(user.modal.quick_view)
    <!-- /modal quick_view -->

    <!-- modal find_size -->
    @include(user.modal.find_size)
    <!-- /modal find_size -->

    <!-- auto popup  -->
    <div class="modal modalCentered fade auto-popup modal-newleter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-top">
                    <img class="lazyload" data-src="images/item/banner-newleter.jpg" src="images/item/banner-newleter.jpg" alt="home-01">
                    <span class="icon icon-close btn-hide-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="modal-bottom">
                    <h4 class="text-center">Don’t mis out</h4>
                    <h6 class="text-center">Be the first one to get the new product at early bird prices.</h6>
                    <form id="subscribe-form" action="#" class="form-newsletter" method="post" accept-charset="utf-8" data-mailchimp="true">
                        <div id="subscribe-content">
                            <input type="email" name="email-form" id="subscribe-email" placeholder="Email *">
                            <button type="button" id="subscribe-button" class="tf-btn btn-fill radius-3 animate-hover-btn w-100 justify-content-center">Keep me updated</button>
                        </div>
                        <div id="subscribe-msg"></div>
                    </form>
                    <div class="text-center">
                        <a href="#" data-bs-dismiss="modal" class="tf-btn btn-line fw-6 btn-hide-popup">Not interested</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /auto popup  -->


    <!-- Javascript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/multiple-modal.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>


<!-- Mirrored from themesflat.co/html/ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2024 08:50:02 GMT -->
</html>