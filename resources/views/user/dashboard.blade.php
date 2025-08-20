@extends('user.layout.index')
@section('content')

<!-- Categories -->
        @inlcude('user.dashboard.rest.categories')
        <!-- /Categories -->
        <!-- Seller - Note: where the cards of products are displayed-->
        @include('user.dashboard.rest.seller')
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
                                <img class="lazyload" data-src="{{assets('frontend')}}/images/shop/file/lookbook-3.jpg" src="{{assets('frontend')}}/images/shop/file/lookbook-3.jpg" alt="image-lookbook">
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
                                                        <img class="lazyload" data-src="{{assets('frontend')}}/images/shop/products/img-p2.png" src="{{assets('frontend')}}/images/shop/products/img-p2.png" alt="lookbook-item">
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
                                                        <img class="lazyload" data-src="{{assets('frontend')}}/images/shop/products/img-p4.png" src="{{assets('frontend')}}/images/shop/products/img-p4.png" alt="">
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
                                <img class="lazyload" data-src="{{assets('frontend')}}/images/shop/file/lookbook-4.jpg" src="{{assets('frontend')}}/images/shop/file/lookbook-4.jpg" alt="image-lookbook">
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
                                                        <img class="lazyload" data-src="{{assets('frontend')}}/images/shop/products/img-p5.png" src="{{assets('frontend')}}/images/shop/products/img-p5.png" alt="">
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
        @include('user.dashboard.rest.testimonial')
        <!-- /Testimonial -->
        <!-- brand -->
         <section class="flat-spacing-5 pt_0">
            <div class="container">
                <div class="swiper tf-sw-brand" data-loop="false" data-play="false" data-preview="6" data-tablet="3" data-mobile="2" data-space-lg="0" data-space-md="0">
                    <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="{{assets('frontend')}}/images/brand/brand-01.png" src="{{assets('frontend')}}/images/brand/brand-01.png" alt="image-brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="{{assets('frontend')}}/images/brand/brand-02.png" src="{{assets('frontend')}}/images/brand/brand-02.png" alt="image-brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="{{assets('frontend')}}/images/brand/brand-03.png" src="{{assets('frontend')}}/images/brand/brand-03.png" alt="image-brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="{{assets('frontend')}}/images/brand/brand-04.png" src="{{assets('frontend')}}/images/brand/brand-04.png" alt="image-brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="{{assets('frontend')}}/images/brand/brand-05.png" src="{{assets('frontend')}}/images/brand/brand-05.png" alt="image-brand">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand-item">
                                    <img class="lazyload" data-src="{{assets('frontend')}}/images/brand/brand-06.png" src="{{assets('frontend')}}/images/brand/brand-06.png" alt="image-brand">
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
                                        <img class="lazyload img-hover" data-src="{{assets('frontend')}}/images/shop/gallery/gallery-7.jpg" src="{{assets('frontend')}}/images/shop/gallery/gallery-7.jpg" alt="image-gallery">
                                    </div>
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".3s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover" data-src="{{assets('frontend')}}/images/shop/gallery/gallery-3.jpg" src="{{assets('frontend')}}/images/shop/gallery/gallery-3.jpg" alt="image-gallery">
                                    </div>
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".4s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover" data-src="{{assets('frontend')}}/images/shop/gallery/gallery-5.jpg" src="{{assets('frontend')}}/images/shop/gallery/gallery-5.jpg" alt="image-gallery">
                                    </div>
                                    <a href="#quick_add" data-bs-toggle="modal" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">Quick Add</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".5s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover" data-src="{{assets('frontend')}}/images/shop/gallery/gallery-8.jpg" src="{{assets('frontend')}}/images/shop/gallery/gallery-8.jpg" alt="image-gallery">
                                    </div>
                                    <a href="product-detail.html" class="box-icon"><span class="icon icon-bag"></span> <span class="tooltip">View product</span></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="gallery-item hover-img wow fadeInUp" data-wow-delay=".6s">
                                    <div class="img-style">
                                        <img class="lazyload img-hover" data-src="{{assets('frontend')}}/images/shop/gallery/gallery-6.jpg" src="{{assets('frontend')}}/images/shop/gallery/gallery-6.jpg" alt="image-gallery">
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

@endsection