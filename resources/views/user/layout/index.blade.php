

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2024 08:49:54 GMT -->
<head>
    <meta charset="utf-8">
    <title>Ecomus - Ultimate HTML</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- font -->
   <link rel="stylesheet" href="{{assets('frontend')}}/fonts/fonts.css">
   <link rel="stylesheet" href="{{assets('frontend')}}/fonts/font-icons.css">
   <link rel="stylesheet" href="{{assets('frontend')}}/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{assets('frontend')}}/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="{{assets('frontend')}}/css/animate.css">
   <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{assets('frontend')}}/images/logo/favicon.png">
<link rel="apple-touch-icon-precomposed" href="{{assets('frontend')}}/images/logo/favicon.png">

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
        @include('user.layout.top_bar')
        <!-- /Top Bar -->
        <!-- Header -->
        @includlayoutheader')
        <!-- /Header -->
        <!-- Slider -->
        @includlayoutslider')
        <!-- /Slider -->
        <!-- Marquee -->
        @includlayoutmarquee')
        <!-- /Marquee -->
        
        @yield('userContent')

        <!-- Footer -->
        @includlayoutfooter')
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
    @include('user.layout.toolbar.bottom')
    <!-- /toolbar-bottom -->

    <!-- modalDemo -->
    @include('user.layout.modal.demo')
    <!-- /modalDemo -->    

    <!-- mobile menu -->
    @includlayoutmobile_menu')
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
                                            <img src="{{assets('frontend')}}/images/products/white-3.jpg" alt="">
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
                                            <img src="{{assets('frontend')}}/images/products/white-2.jpg" alt="">
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
                                            <img src="{{assets('frontend')}}/images/products/white-1.jpg" alt="">
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
    @include('user.layout.toolbar.shopmb')
    <!-- /toolbarShopmb -->

    <!-- modal login -->
    @include('user.layout.modal.login')
    <!-- /modal login -->

    <!-- shoppingCart -->
    @include('user.layout.shopping_cart')
    <!-- /shoppingCart -->

    <!-- modal compare -->
    @include('user.layout.modal.compare')
    <!-- /modal compare -->
    
    <!-- modal quick_add -->
    @include('user.layout.modal.quick_add')
    <!-- /modal quick_add -->

    <!-- modal quick_view -->
    @include('user.layout.modal.quick_view')
    <!-- /modal quick_view -->

    <!-- modal find_size -->
    @include('user.layout.modal.find_size')
    <!-- /modal find_size -->

    <!-- auto popup  -->
    <div class="modal modalCentered fade auto-popup modal-newleter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-top">
                    <img class="lazyload" data-src="{{assets('frontend')}}/images/item/banner-newleter.jpg" src="{{assets('frontend')}}/images/item/banner-newleter.jpg" alt="home-01">
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
    <script type="text/javascript" src="{{assets('frontend')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{assets('frontend')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{assets('frontend')}}/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{assets('frontend')}}/js/carousel.js"></script>
    <script type="text/javascript" src="{{assets('frontend')}}/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="{{assets('frontend')}}/js/lazysize.min.js"></script>
    <script type="text/javascript" src="{{assets('frontend')}}/js/count-down.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="{{assets('frontend')}}/js/multiple-modal.js"></script>
    <script type="text/javascript" src="{{assets('frontend')}}/js/main.js"></script>
</body>


<!-- Mirrored from themesflat.co/html/ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2024 08:50:02 GMT -->
</html>