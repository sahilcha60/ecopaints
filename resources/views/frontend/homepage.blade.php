@extends('frontend.layouts.master')

@section('content')

<main>

    <!-- banner area start  -->
    <section class="cp-banner2-area p-relative fix">
        <div class="cp-banner2-shape-area">
        <div class="cp-banner2-shape2 p-absolute cp-rotation"></div>
        <div class="cp-banner2-shape3 p-absolute cp-rotation"></div>
        <div class="cp-banner2-shape4 p-absolute zi-5 cp-bg-move-y d-none d-md-block">
            <img src="{{asset('img/banner/banner-shape1.png')}}" alt="banner-shape1">
        </div>
        <div class="cp-banner2-shape5 p-absolute zi-5 cp-bg-move-x">
            <img src="{{asset('img/banner/banner-shape2.png')}}" alt="banner-shape1">
        </div>
        </div>
        <div class="swiper-container cp-banner2-active">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="single-banner d-flex align-items-center cp-bg-13 pt-110 pb-80">
                    <div class="container pos-rel">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="cp-banner2-content pr-60 mb-70">
                                <h2 class="cp-banner2-title mb-40" data-animation="fadeInUp" data-delay=".3s">Modern &
                                Digital Printing Solution.</h2>
                                <p class="cp-banner2-text mb-50" data-animation="fadeInUp" data-delay="0.4s">Our custom
                                pet portraits are a unique gift for any pet lover, beautiful way to <br> remember a
                                dearly missed furry friend.</p>
                                <div class="cp-banner2-btn" data-animation="fadeInUp" data-delay="0.5s">
                                <a href="shop.html" class="cp-btn">
                                    Order Online Now
                                    <span class="cp-btn__inner">
                                        <span class="cp-btn__blobs">
                                            <span class="cp-btn__blob"></span>
                                            <span class="cp-btn__blob"></span>
                                            <span class="cp-btn__blob"></span>
                                            <span class="cp-btn__blob"></span>
                                        </span>
                                    </span>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cp-banner2-img-wrap p-relative d-flex justify-content-xl-end mb-70"
                                data-animation="fadeInUp" data-delay="0.5s">
                                <div class="cp-banner2-img-inner p-relative">
                                <div class="cp-banner2-video">
                                    <video autoplay>
                                        <source src="https://www.dropbox.com/s/jgeo7aa43ellilc/video.mp4?raw=1"
                                            type="video/mp4">
                                    </video>
                                </div>
                                <div class="cp-banner2-img2 p-absolute w-img br-img-50 d-none d-sm-block">
                                    <img src="img/banner/banner-3.jpg" alt="banner">
                                </div>
                                <div class="cp-banner2-img3 p-absolute w-img br-img-50 d-none d-sm-block">
                                    <img src="img/banner/banner-4.jpg" alt="banner">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-banner d-flex align-items-center cp-bg-13 pt-110 pb-80">
                    <div class="container pos-rel">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="cp-banner2-content pr-60 mb-70">
                                <h2 class="cp-banner2-title mb-40" data-animation="fadeInUp" data-delay=".3s">Quality &
                                Lasting Printing Solution.</h2>
                                <p class="cp-banner2-text mb-50" data-animation="fadeInUp" data-delay="0.4s">Our custom
                                pet portraits are a unique gift for any pet lover, beautiful way to <br> remember a
                                dearly missed furry friend.</p>
                                <div class="cp-banner2-btn" data-animation="fadeInUp" data-delay="0.5s">
                                <a href="shop.html" class="cp-btn">
                                    Order Online Now
                                    <span class="cp-btn__inner">
                                        <span class="cp-btn__blobs">
                                            <span class="cp-btn__blob"></span>
                                            <span class="cp-btn__blob"></span>
                                            <span class="cp-btn__blob"></span>
                                            <span class="cp-btn__blob"></span>
                                        </span>
                                    </span>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cp-banner2-img-wrap p-relative d-flex justify-content-xl-end mb-70"
                                data-animation="fadeInUp" data-delay="0.5s">
                                <div class="cp-banner2-img-inner p-relative">
                                <div class="cp-banner2-video">
                                    <video src="img/video/video.html" loop="" muted="" autoplay=""
                                        playsinline=""></video>
                                </div>
                                <div class="cp-banner2-img2 p-absolute w-img br-img-50 d-none d-sm-block">
                                    <img src="img/banner/banner-3.jpg" alt="banner">
                                </div>
                                <div class="cp-banner2-img3 p-absolute w-img br-img-50 d-none d-sm-block">
                                    <img src="img/banner/banner-4.jpg" alt="banner">
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="cp-banner2-nav">
            <div class="cp-banner2-button cp-banner2-button-prev cp p-absolute">
                <i class="far fa-angle-left"></i>
            </div>
            <div class="cp-banner2-button cp-banner2-button-next cp p-absolute">
                <i class="far fa-angle-right"></i>
            </div>
        </div>
        </div>
    </section>
    <!-- banner area end  -->

    <!-- about 2 area start  -->
    <section class="cp-about2-area pt-150 pb-85">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-10">
                <div class="cp-about2-img-wrap pr-15 p-relative mb-60 wow fadeInLeft animated"
                    data-wow-duration="1.5s" data-wow-delay="0.3s">
                    <div class="cp-about2-img-main w-img p-relative">
                    <div class="cp-img-overlay wow"></div>
                    <div class="cp-img-blur">
                        <img src="img/about/about3.jpg" alt="about3">
                        <img src="img/about/about3.jpg" alt="about3">

                    </div>
                    <div class="cp-about2-video p-absolute">
                        <a class="popup-video play-btn" href="https://www.youtube.com/watch?v=ngmFMTeIl5A"><i
                                class="fas fa-play"></i></a>
                    </div>
                    </div>
                    <div class="cp-about2-img-sub zi-100 w-img p-absolute d-none d-sm-block">
                    <img src="img/about/about4.jpg" alt="about4">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-10">
                <div class="cp-about2-content mb-60">
                    <div class="cp-section-title">
                    <span class="cp-subtitle mb-15 wow fadeInUp animated" data-wow-duration="1.5s"
                        data-wow-delay="0.3s">about us</span>
                    <h2 class="cp-title mb-25 wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.4s">
                        What is print on <span>demand and how</span>that works?
                    </h2>
                    </div>
                    <p class="cp-about2-text mb-30 wow fadeInUp animated" data-wow-duration="1.5s"
                    data-wow-delay="0.5s">We make it our mission to provide our customers with a web presence
                    that is creative, exciting and right for their business. No matter where your business is at, a
                    strong web presence will help it grow.</p>
                    <div class="cp-list mb-55 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.6s">
                    <ul>
                        <li>Top quality prints using the latest technology</li>
                        <li>Shipping worldwide</li>
                        <li>Printed locally, worn globally.</li>
                    </ul>
                    </div>
                    <div class="cp-about2-btn wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.7s">
                    <a href="contact.html" class="cp-border-btn">
                        know more
                        <span class="cp-border-btn__inner">
                            <span class="cp-border-btn__blobs">
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                            </span>
                        </span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- about 2 area end  -->

    <!-- service 2 area start  -->
    <section class="cp-services2-area pb-150">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="cp-services2-title-wrap t-center mb-65">
                    <div class="cp-section-title">
                    <span class="cp-subtitle mb-15 wow fadeInUp animated" data-wow-duration="1.5s"
                        data-wow-delay="0.3s">Our Services</span>
                    <h2 class="cp-title mb-25 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        We <span>print all your</span> dreams!</h2>
                    <p class="wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">You can spread
                        them around with icons. Title and 2 lines of description <br> would be nice
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cp-services2-item-wrap mb-30">
            <div class="row">
                <div class="col-xxl-3 col-md-6 col-sm-12">
                    <div class="cp-service2-item p-relative img-hover-left-right-item mb-40 wow fadeInUp animated"
                    data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <div class="cp-service2-img p-absolute img-hover-left-right"
                        data-background="img/service/services-8.jpg"></div>
                    <div class="cp-service2-icon m-img mb-20">
                        <img src="img/service/service-icon1.png" alt="service-icon">
                    </div>
                    <div class="cp-service2-content p-relative zi-5">
                        <h4 class="cp-service2-title mb-15"><a href="service-details.html">Greeting Cards</a></h4>
                        <p class="cp-service2-text">Open Canva. Open Canva and search for "Greeting Card"..</p>
                        <a class="cp-service2-btn" href="service-details.html">More Details <i
                                class="fas fa-long-arrow-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-sm-12">
                    <div class="cp-service2-item p-relative img-hover-left-right-item mb-40 wow fadeInUp animated"
                    data-wow-duration="1.5s" data-wow-delay="0.5s">
                    <div class="cp-service2-img p-absolute img-hover-left-right"
                        data-background="img/service/services-8.jpg"></div>
                    <div class="cp-service2-icon m-img mb-20">
                        <img src="img/service/service-icon2.png" alt="service-icon">
                    </div>
                    <div class="cp-service2-content p-relative zi-5">
                        <h4 class="cp-service2-title mb-15"><a href="service-details.html">T-shirt Printing</a></h4>
                        <p class="cp-service2-text">Open Canva. Open Canva and search for "Greeting Card"..</p>
                        <a class="cp-service2-btn" href="service-details.html">More Details <i
                                class="fas fa-long-arrow-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-sm-12">
                    <div class="cp-service2-item p-relative img-hover-left-right-item mb-40 wow fadeInUp animated"
                    data-wow-duration="1.5s" data-wow-delay="0.6s">
                    <div class="cp-service2-img p-absolute img-hover-left-right"
                        data-background="img/service/services-8.jpg"></div>
                    <div class="cp-service2-icon m-img mb-20">
                        <img src="img/service/service-icon3.png" alt="service-icon">
                    </div>
                    <div class="cp-service2-content p-relative zi-5">
                        <h4 class="cp-service2-title mb-15"><a href="service-details.html">Stickers and Labels</a>
                        </h4>
                        <p class="cp-service2-text">Open Canva. Open Canva and search for "Greeting Card"..</p>
                        <a class="cp-service2-btn" href="service-details.html">More Details <i
                                class="fas fa-long-arrow-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 col-sm-12">
                    <div class="cp-service2-item p-relative img-hover-left-right-item mb-40 wow fadeInUp animated"
                    data-wow-duration="1.5s" data-wow-delay="0.7s">
                    <div class="cp-service2-img p-absolute img-hover-left-right"
                        data-background="img/service/services-8.jpg"></div>
                    <div class="cp-service2-icon m-img mb-20">
                        <img src="img/service/service-icon4.png" alt="service-icon">
                    </div>
                    <div class="cp-service2-content p-relative zi-5">
                        <h4 class="cp-service2-title mb-15"><a href="service-details.html">Promotional Printing</a>
                        </h4>
                        <p class="cp-service2-text">Open Canva. Open Canva and search for "Greeting Card"..</p>
                        <a class="cp-service2-btn" href="service-details.html">More Details <i
                                class="fas fa-long-arrow-right"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="cp-services-view-btn t-center wow fadeInUp animated" data-wow-duration="1.5s"
                    data-wow-delay="0.8s">
                    <a href="services.html" class="cp-border-btn">View All Services
                    <span class="cp-border-btn__inner">
                        <span class="cp-border-btn__blobs">
                            <span class="cp-border-btn__blob"></span>
                            <span class="cp-border-btn__blob"></span>
                            <span class="cp-border-btn__blob"></span>
                            <span class="cp-border-btn__blob"></span>
                        </span>
                    </span>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- service 2 area end  -->

    <!-- Why Choose Us area start  -->
    <section class="cp-choose-area cp-bg-14 pt-150 pb-90">
        <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-10">
                <div class="cp-choose-content mb-60 wow fadeInUp animated" data-wow-duration="1.5s"
                    data-wow-delay="0.3s">
                    <div class="cp-choose-title-wrap">
                    <div class="cp-section-title">
                        <span class="cp-subtitle mb-15">Why Choose Us?</span>
                        <h2 class="cp-title mb-30">Best shipping rates for <span>print on-demand</span>.</h2>
                    </div>
                    </div>
                    <p class="cp-choose-text mb-35">Fast print, flyer, and pamphlet printing organization. Pleased with
                    our past. <br>Printing for what’s to come.</p>
                    <div class="cp-list mb-45">
                    <ul>
                        <li>In House Production</li>
                        <li>Better Print Quality with All Product</li>
                        <li>Stock Designs and Excellent Client Support</li>
                        <li>Printed locally, worn globally.</li>
                    </ul>
                    </div>
                    <div class="cp-choose-btn">
                    <a class="cp-border-btn" href="contact.html">Start A Project
                        <span class="cp-border-btn__inner">
                            <span class="cp-border-btn__blobs">
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                            </span>
                        </span>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-10">
                <div class="cp-choose-img-wrap mb-35">
                    <div class="row">
                    <div class="col-sm-6">
                        <div class="wow fadeInRight animated" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <div class="cp-choose-img-item p-relative w-img mb-25">
                                <div class="cp-img-overlay wow"></div>
                                <img src="img/choose/choose-1.jpg" alt="choose">
                            </div>
                        </div>
                        <div class="cp-choose-img-item mb-25 wow fadeInUp animated" data-wow-duration="1.5s"
                            data-wow-delay="0.4s">
                            <div class="cp-choose-experience">
                                <div class="cp-choose-experience-icon p-relative m-img">
                                <img src="img/choose/choose-experience-icon.png" alt="experience">
                                </div>
                                <div class="cp-choose-experience-text">
                                <h3><span class="counter d-inline-block">12</span>+ Years</h3>
                                <span>Experience All Team</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="cp-choose-img-right-wrap mt-65">
                            <div class="wow fadeInRight animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <div class="cp-choose-img-item p-relative w-img mb-25">
                                <div class="cp-img-overlay wow"></div>
                                <img src="img/choose/choose-2.jpg" alt="choose">
                                </div>
                            </div>
                            <div class="wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.6s">
                                <div class="cp-choose-img-item p-relative w-img mb-25 ">
                                <div class="cp-img-overlay wow"></div>
                                <img src="img/choose/choose-3.jpg" alt="choose">
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Why Choose Us area end  -->

    <!-- product area start  -->
    <div class="product-area pt-140">
        <div class="container border-bottom pb-65">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8">
                <div class="cp-services2-title-wrap t-center mb-35">
                    <div class="cp-section-title">
                    <span class="cp-subtitle mb-15 wow fadeInUp animated" data-wow-duration="1.5s"
                        data-wow-delay="0.3s">Our Classic Products</span>
                    <h2 class="cp-title mb-25 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        Premium <span>products you</span> can <br> customize and sell.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center wow fadeInUp animated" data-wow-duration="1.5s"
            data-wow-delay="0.5s">
            <div class="col-xl-10">
                <div class="cp-product-menu mb-60 t-center">
                    <button class="active" data-filter="*">All</button>
                    <button data-filter=".c1">T-Shirt</button>
                    <button data-filter=".c2">Men T-Shirt</button>
                    <button data-filter=".c3">Women T-Shirt</button>
                </div>
            </div>
        </div>
        <div class="cp-product-wrap mb-20 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5s">
            <div class="row grid">
                <div class="col-xl-3 col-lg-4 col-sm-6 c1 c2 c4 grid-item">
                    <div class="product-single">
                    <div class="product-thumb">
                        <a href="shop-details.html" class="image">
                            <img class="pic-1" src="img/product/product-01.png" alt="product">
                            <img class="pic-2" src="img/product/product-11.png" alt="product">
                        </a>
                        <ul class="product-links">
                            <li><a href="cart.html"><i class="fal fa-shopping-cart"></i></a></li>
                            <li><a href="img/product/product-shop-1.html" data-bs-toggle="modal"
                                data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                            <li><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-description">
                        <h4 class="product-name">
                            <a href="shop-details.html">T-shirts & tank tops</a>
                        </h4>
                        <div class="product-price">
                            <span class="price-old">139.00$</span>
                            <span class="price-now">100.00$</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 c2 c3 c4 grid-item">
                    <div class="product-single">
                    <div class="product-thumb">
                        <span class="product-badge product-badge-new">new</span>
                        <a href="shop-details.html" class="image">
                            <img class="pic-1" src="img/product/product-06.png" alt="product">
                            <img class="pic-2" src="img/product/product-11.png" alt="product">
                        </a>
                        <ul class="product-links">
                            <li><a href="cart.html"><i class="fal fa-shopping-cart"></i></a></li>
                            <li><a href="img/product/product-shop-1.html" data-bs-toggle="modal"
                                data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                            <li><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-description">
                        <h4 class="product-name">
                            <a href="shop-details.html">White Woman T-Shirt.</a>
                        </h4>
                        <div class="product-price">
                            <span class="price-now">120.00$</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 c2 c4 grid-item">
                    <div class="product-single">
                    <div class="product-thumb">
                        <a href="shop-details.html" class="image">
                            <img class="pic-1" src="img/product/product-10.png" alt="product">
                            <img class="pic-2" src="img/product/product-09.png" alt="product">
                        </a>
                        <ul class="product-links">
                            <li><a href="cart.html"><i class="fal fa-shopping-cart"></i></a></li>
                            <li><a href="img/product/product-shop-1.html" data-bs-toggle="modal"
                                data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                            <li><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-description">
                        <h4 class="product-name">
                            <a href="shop-details.html">Graphic T-Shirt Trendy</a>
                        </h4>
                        <div class="product-price">
                            <span class="price-now">12.00$</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 c1 c2 c4 grid-item">
                    <div class="product-single">
                    <div class="product-thumb">
                        <span class="product-badge product-badge-sale">sale</span>
                        <a href="shop-details.html" class="image">
                            <img class="pic-1" src="img/product/product-07.png" alt="product">
                            <img class="pic-2" src="img/product/product-09.png" alt="product">
                        </a>
                        <ul class="product-links">
                            <li><a href="cart.html"><i class="fal fa-shopping-cart"></i></a></li>
                            <li><a href="img/product/product-shop-1.html" data-bs-toggle="modal"
                                data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                            <li><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-description">
                        <h4 class="product-name">
                            <a href="shop-details.html">Dark Green T-Shirt</a>
                        </h4>
                        <div class="product-price">
                            <span class="price-now">100.00$</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 c2 c3 c4 grid-item">
                    <div class="product-single">
                    <div class="product-thumb">
                        <span class="product-badge product-badge-best">best sale</span>
                        <a href="shop-details.html" class="image">
                            <img class="pic-1" src="img/product/product-08.png" alt="product">
                            <img class="pic-2" src="img/product/product-11.png" alt="product">
                        </a>
                        <ul class="product-links">
                            <li><a href="cart.html"><i class="fal fa-shopping-cart"></i></a></li>
                            <li><a href="img/product/product-shop-1.html" data-bs-toggle="modal"
                                data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                            <li><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-description">
                        <h4 class="product-name">
                            <a href="shop-details.html">White T-Shirt</a>
                        </h4>
                        <div class="product-price">
                            <span class="price-old">120.00$</span>
                            <span class="price-now">100.00$</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 c1 c3 c2 c4 grid-item">
                    <div class="product-single">
                    <div class="product-thumb">
                        <a href="shop-details.html" class="image">
                            <img class="pic-1" src="img/product/product-04.png" alt="product">
                            <img class="pic-2" src="img/product/product-02.png" alt="product">
                        </a>
                        <ul class="product-links">
                            <li><a href="cart.html"><i class="fal fa-shopping-cart"></i></a></li>
                            <li><a href="img/product/product-shop-1.html" data-bs-toggle="modal"
                                data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                            <li><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-description">
                        <h4 class="product-name">
                            <a href="shop-details.html">Business Card</a>
                        </h4>
                        <div class="product-price">
                            <span class="price-old">90.00$</span>
                            <span class="price-now">70.00$</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 c2 c4 grid-item">
                    <div class="product-single">
                    <div class="product-thumb">
                        <span class="product-badge product-badge-off">10% off</span>
                        <a href="shop-details.html" class="image">
                            <img class="pic-1" src="img/product/product-07.png" alt="product">
                            <img class="pic-2" src="img/product/product-10.png" alt="product">
                        </a>
                        <ul class="product-links">
                            <li><a href="cart.html"><i class="fal fa-shopping-cart"></i></a></li>
                            <li><a href="img/product/product-shop-1.html" data-bs-toggle="modal"
                                data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                            <li><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-description">
                        <h4 class="product-name">
                            <a href="shop-details.html">Men T-shirts</a>
                        </h4>
                        <div class="product-price">
                            <span class="price-old">90.00$</span>
                            <span class="price-now">70.00$</span>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 c1 c2 c3 c4 grid-item">
                    <div class="product-single">
                    <div class="product-thumb">
                        <span class="product-badge product-badge-off">10% off</span>
                        <a href="shop-details.html" class="image">
                            <img class="pic-1" src="img/product/product-12.png" alt="product">
                            <img class="pic-2" src="img/product/product-06.png" alt="product">
                        </a>
                        <ul class="product-links">
                            <li><a href="cart.html"><i class="fal fa-shopping-cart"></i></a></li>
                            <li><a href="img/product/product-shop-1.html" data-bs-toggle="modal"
                                data-bs-target="#productModalId"><i class="fal fa-eye"></i></a></li>
                            <li><a href="wishlist.html"><i class="fal fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-description">
                        <h4 class="product-name">
                            <a href="shop-details.html">Black T-shirts</a>
                        </h4>
                        <div class="product-price">
                            <span class="price-old">100.00$</span>
                            <span class="price-now">90.00$</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center wow fadeInUp animated" data-wow-duration="1.5s"
            data-wow-delay="0.6s">
            <div class="col-xl-6">
                <div class="cp-product-view t-center mb-10">
                    <a href="shop.html" class="cp-border-btn">
                    View More Product
                    <span class="cp-border-btn__inner">
                        <span class="cp-border-btn__blobs">
                            <span class="cp-border-btn__blob"></span>
                            <span class="cp-border-btn__blob"></span>
                            <span class="cp-border-btn__blob"></span>
                            <span class="cp-border-btn__blob"></span>
                        </span>
                    </span>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- product area end  -->

    <!-- shop modal start -->
    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered product__modal" role="document">
        <div class="modal-content">
            <div class="product__modal-wrapper p-relative">
                <div class="product__modal-close p-absolute">
                    <button data-bs-dismiss="modal">
                    <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="product__modal-inner">
                    <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product__modal-box">
                            <div class="tab-content" id="modalTabContent">
                                <div class="tab-pane fade show active" id="nav1" role="tabpanel"
                                aria-labelledby="nav1-tab">
                                <div class="product__modal-img w-img">
                                    <img src="img/product/product-06.png" alt="img not found">
                                </div>
                                </div>
                                <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                <div class="product__modal-img w-img">
                                    <img src="img/product/product-07.png" alt="img not found">
                                </div>
                                </div>
                                <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                <div class="product__modal-img w-img">
                                    <img src="img/product/product-10.png" alt="img not found">
                                </div>
                                </div>
                                <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                <div class="product__modal-img w-img">
                                    <img src="img/product/product-12.png" alt="img not found">
                                </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1"
                                    aria-selected="true">
                                    <img src="img/product/product-06.png" alt="img not found">
                                </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2"
                                    type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                    <img src="img/product/product-07.png" alt="img not found">
                                </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3"
                                    type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                    <img src="img/product/product-10.png" alt="img not found">
                                </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4"
                                    type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                    <img src="img/product/product-12.png" alt="img not found">
                                </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product__modal-content">
                            <h4>
                                <a href="shop-details.html">maranta lemon lime</a>
                            </h4>
                            <div class="product__modal-des mb-40">
                                <p>
                                Typi non habent claritatem insitam, est usus legentis
                                in iis qui facit eorum claritatem. Investigationes
                                demonstraverunt
                                </p>
                            </div>
                            <div class="product__stock">
                                <span>Availability :</span>
                                <span>In Stock</span>
                            </div>
                            <div class="product__stock sku mb-30">
                                <span>SKU :</span>
                                <span>Juicera C49J89: £875, Debenhams Plus</span>
                            </div>
                            <div class="product__review d-sm-flex">
                                <div class="rating rating__shop mb-15">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fal fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fal fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fal fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fal fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fal fa-star"></i></a>
                                    </li>
                                </ul>
                                </div>
                                <div class="product__add-review mb-15">
                                <span><a href="shop-details.html">1 Review</a></span>
                                <span><a href="shop-details.html">Add Review</a></span>
                                </div>
                            </div>
                            <div class="product__price">
                                <span>$59.00</span>
                            </div>
                            <div class="product__modal-form">
                                <div class="product-quantity-cart mb-30">
                                <div class="product-quantity-form">
                                    <form action="#">
                                        <button class="cart-minus">
                                            <i class="far fa-minus"></i>
                                        </button>
                                        <input class="cart-input" type="text" value="1">
                                        <button class="cart-plus">
                                            <i class="far fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                                <a href="cart.html" class="cp-border-btn">Add to Cart
                                    <span class="cp-border-btn__inner">
                                        <span class="cp-border-btn__blobs">
                                            <span class="cp-border-btn__blob"></span>
                                            <span class="cp-border-btn__blob"></span>
                                            <span class="cp-border-btn__blob"></span>
                                            <span class="cp-border-btn__blob"></span>
                                        </span>
                                    </span>
                                </a>
                                </div>
                            </div>
                            <div class="product__modal-links">
                                <ul>
                                <li>
                                    <a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Print"><i class="fal fa-print"></i></a>
                                </li>
                                <li>
                                    <a href="#" title="Share"><i class="fal fa-share-alt"></i></a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- shop modal end -->

    <!-- testimonial 2 area start here  -->
    <section class="cp-testimonial2-area pt-75 pb-90">
        <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-9">
                <div class="cp-testimonial2-title-wrap mb-60 wow fadeInUp animated" data-wow-duration="1.5s"
                    data-wow-delay="0.3s">
                    <div class="cp-section-title">
                    <span class="cp-subtitle mb-15">Testimonial</span>
                    <h2 class="cp-title mb-25">What our <span>customers</span> are saying</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="cp-testimonial2-item-wrap mb-60 wow fadeInUp animated" data-wow-duration="1.5s"
                    data-wow-delay="0.6s">
                    <div class="swiper-container cp-testimonial2-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="cp-testimonial2-item">
                                <div class="cp-testimonial2-text p-relative">
                                <div class="cp-testimonial2-icon cp-testimonial2-icon1 p-absolute">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="cp-testimonial2-icon cp-testimonial2-icon2 p-absolute">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <p>I work on many projects, he always exceeds my expectations with his quality
                                    work
                                    and fast service. Keep up the great work.</p>
                                </div>
                                <div class="cp-testimonial2-author">
                                <div class="cp-testimonial2-author-img">
                                    <img src="img/testimonial/testimonial-author-1.jpg" alt="testimonial">
                                </div>
                                <div class="cp-testimonial2-author-text">
                                    <h3>Marvin McKinney</h3>
                                    <span>Founder & CEO</span>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cp-testimonial2-item">
                                <div class="cp-testimonial2-text p-relative">
                                <div class="cp-testimonial2-icon cp-testimonial2-icon1 p-absolute">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="cp-testimonial2-icon cp-testimonial2-icon2 p-absolute">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <p>Saddle Stitch printing may be used for a variety of purposes, such as
                                    self-publishing your own architecture, research,
                                    home, auction.</p>
                                </div>
                                <div class="cp-testimonial2-author ml-40">
                                <div class="cp-testimonial2-author-img">
                                    <img src="img/testimonial/testimonial-author-2.jpg" alt="testimonial">
                                </div>
                                <div class="cp-testimonial2-author-text">
                                    <h3>Jumble D. Dowson</h3>
                                    <span>Founder</span>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="d-none d-sm-block">
                    <div
                        class="cp-testimonial2-nav cp-slider-round-button-wrap d-flex justify-content-end cp-test-space zi-5 p-relative">
                        <div class="cp-slider-round-button cp-testimonial2-button-prev"><i
                                class="fas fa-chevron-left"></i></div>
                        <div class="cp-slider-round-button cp-testimonial2-button-next"><i
                                class="fas fa-chevron-right"></i></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- testimonial 2 area end here  -->

    <!-- plan area start here  -->
    <section class="cp-plan-area cp-bg-15 pt-145 pb-110">
        <div class="container">
        <div class="row justify-content-center wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
            <div class="col-xl-8">
                <div class="cp-plan-title-wrap t-center mb-65">
                    <div class="cp-section-title">
                    <span class="cp-subtitle mb-15">Pricing Plan</span>
                    <h2 class="cp-title mb-25">Simple <span>pricing for</span> everyone.</h2>
                    <p>You can spread them around with icons. Title and 2 lines of description <br> would be nice
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row alin align-items-center wow fadeInUp animated" data-wow-duration="1.5s"
            data-wow-delay="0.6">
            <div class="col-xl-4 col-md-6">
                <div class="cp-plan2-item white-bg mb-40">
                    <div class="cp-plan-item-img" data-background="img/plan/plan.png">
                    </div>
                    <div class="cp-plan2-header">
                    <div class="cp-plan2-icon">
                        <i class="far fa-heart"></i>
                    </div>
                    <div class="cp-plan2-duration">
                        <h3 class="cp-plan2-title">STARTUP</h3>
                        <span class="cp-plan2-duration-text">1 month</span>
                    </div>
                    </div>
                    <div class="cp-plan2-body">
                    <div class="cp-plan2-list">
                        <ul>
                            <li>5 stores per account</li>
                            <li>Unlimited product designs</li>
                            <li>Postcards Design</li>
                            <li>Banner Card Design</li>
                            <li>24/7 merchant support</li>
                        </ul>
                    </div>
                    </div>
                    <div class="cp-plan2-footer">
                    <div class="cp-plan2-price"> <sup class="cp-plan2-currency">$</sup>3<sub
                            class="cp-plan2-subtraction">.99</sub>
                    </div>
                    </div>
                    <div class="cp-plan-btn">
                    <a href="https://codeskdhaka.com/wp/chapa/contact-us/" class="cp-border-btn">Get Started Now
                        <span class="cp-border-btn__inner">
                            <span class="cp-border-btn__blobs">
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                            </span>
                        </span>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="cp-plan2-item active white-bg mb-40">
                    <div class="cp-plan-item-img" data-background="img/plan/plan.png">
                    </div>
                    <div class="cp-plan2-header">
                    <div class="cp-plan2-icon">
                        <i class="far fa-crown"></i>
                    </div>
                    <div class="cp-plan2-duration">
                        <h3 class="cp-plan2-title">BUSINESS PLAN</h3>
                        <span class="cp-plan2-duration-text">3 month</span>
                    </div>
                    </div>
                    <div class="cp-plan2-body">
                    <div class="cp-plan2-list">
                        <ul>
                            <li>15 stores per account</li>
                            <li>Digital Printed Apparel</li>
                            <li>Stationary Design</li>
                            <li>Yard Signs Design</li>
                            <li>24/7 merchant support</li>
                        </ul>
                    </div>
                    </div>
                    <div class="cp-plan2-footer">
                    <div class="cp-plan2-price"> <sup class="cp-plan2-currency">$</sup>19<sub
                            class="cp-plan2-subtraction">.99</sub></div>
                    </div>
                    <div class="cp-plan-btn">
                    <a href="https://codeskdhaka.com/wp/chapa/contact-us/" class="cp-border-btn">Get Started Now
                        <span class="cp-border-btn__inner">
                            <span class="cp-border-btn__blobs">
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                            </span>
                        </span>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="cp-plan2-item white-bg mb-40">
                    <div class="cp-plan-item-img" data-background="img/plan/plan.png">
                    </div>
                    <div class="cp-plan2-header">
                    <div class="cp-plan2-icon">
                        <i class="far fa-gem"></i>
                    </div>
                    <div class="cp-plan2-duration">
                        <h3 class="cp-plan2-title">ENTERPRISE PLAN</h3>
                        <span class="cp-plan2-duration-text">6 month</span>
                    </div>
                    </div>
                    <div class="cp-plan2-body">
                    <div class="cp-plan2-list">
                        <ul>
                            <li>35 stores per account</li>
                            <li>Promotional Products</li>
                            <li>Brochures Design</li>
                            <li>Yard Signs Design</li>
                            <li>24/7 merchant support</li>
                        </ul>
                    </div>
                    </div>
                    <div class="cp-plan2-footer">
                    <div class="cp-plan2-price"> <sup class="cp-plan2-currency">$</sup>49<sub
                            class="cp-plan2-subtraction">.99</sub></div>
                    </div>
                    <div class="cp-plan-btn">
                    <a href="https://codeskdhaka.com/wp/chapa/contact-us/" class="cp-border-btn">Get Started Now
                        <span class="cp-border-btn__inner">
                            <span class="cp-border-btn__blobs">
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                            </span>
                        </span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- plan area end here  -->

    <!-- team area start here  -->
    <section class="cp-team2-area cp-team2-mob-space pt-140 pb-135">
        <div class="cp-team2-title-wrap mb-35 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-8">
                    <div class="cp-section-title">
                    <span class="cp-subtitle mb-15">Our Team</span>
                    <h2 class="cp-title mb-25">Meet <span>our team</span></h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cp-team2-btn text-lg-end mb-35">
                    <a class="cp-border2-btn" href="team.html">view all</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.5">
        <div class="cp-team2-border">
            <div class="cp-team2-wrap">
                <div class="cp-team2-item p-relative">
                    <div class="cp-team2-img w-img">
                    <a href="team-details.html"><img src="img/team/team-1.jpg" alt="team"></a>
                    </div>
                    <div class="cp-team2-content p-absolute">
                    <h3 class="cp-team2-name"><a href="team-details.html">Alexander</a></h3>
                    <span class="cp-team2-position">Mockup Designer</span>
                    </div>
                </div>
                <div class="cp-team2-item p-relative active">
                    <div class="cp-team2-img w-img">
                    <a href="team-details.html"><img src="img/team/team-2.jpg" alt="team"></a>
                    </div>
                    <div class="cp-team2-content p-absolute">
                    <h3 class="cp-team2-name"><a href="team-details.html">Williamson</a></h3>
                    <span class="cp-team2-position">Designer</span>
                    </div>
                </div>
                <div class="cp-team2-item p-relative">
                    <div class="cp-team2-img w-img">
                    <a href="team-details.html"><img src="img/team/team-3.jpg" alt="team"></a>
                    </div>
                    <div class="cp-team2-content p-absolute">
                    <h3 class="cp-team2-name"><a href="team-details.html">Mr Jon</a></h3>
                    <span class="cp-team2-position">Graphic Designer</span>
                    </div>
                </div>
                <div class="cp-team2-item p-relative">
                    <div class="cp-team2-img w-img">
                    <a href="team-details.html"><img src="img/team/team-4.jpg" alt="team"></a>
                    </div>
                    <div class="cp-team2-content p-absolute">
                    <h3 class="cp-team2-name"><a href="team-details.html">Mr Alesa</a></h3>
                    <span class="cp-team2-position">Front Designer</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- team area end here  -->

    <!-- news area start here  -->
    <section class="cp-news-area cp-bg-15 pt-145 pb-80 fix">
        <div class="cp-news-title-wrap mb-35 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-6">
                    <div class="cp-section-title">
                    <span class="cp-subtitle mb-15">Latest News</span>
                    <h2 class="cp-title mb-25">Our <span>latest news</span></h2>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="cp-news-view-btn text-xl-end mb-40">
                    <a href="news.html" class="cp-border-btn">View All
                        <span class="cp-border-btn__inner">
                            <span class="cp-border-btn__blobs">
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                                <span class="cp-border-btn__blob"></span>
                            </span>
                        </span>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
        <div class="cp-news4-wrap">
            <article>
                <div class="cp-news4-item">
                    <div class="cp-news4-img p-relative w-img mb-30">
                    <div class="cp-img-overlay wow"></div>
                    <a href="news-details.html"><img src="img/news/news-3.jpg" alt="news"></a>
                    </div>
                    <div class="cp-news4-content mb-30">
                    <div class="cp-news1-meta lh-1">
                        <span><a href="blog.html">Print Shop</a></span>
                        <span>January 02, 2023</span>
                    </div>
                    <h3 class="cp-news4-title"><a href="news-details.html">Print Online High-quality Business Cards
                            With Chapa.</a></h3>
                    <p class="cp-news4-text mb-20">Business cards are anything but old-fashioned. They still
                        represent the best and most
                        direct way of remaining in your
                        contact's minds. For this reason it is important that your business card is of quality
                        and able to transmit.</p>
                    <h5 class="cp-news-post-by">Author : <a href="#">Johann Doe</a></h5>
                    </div>
                    <div class="cp-news4-btn mb-30 text-lg-end">
                    <a class="cp-border2-btn" href="news-details.html">read more</a>
                    </div>
                </div>
            </article>
            <article>
                <div class="cp-news4-item">
                    <div class="cp-news4-img p-relative w-img mb-30">
                    <div class="cp-img-overlay wow"></div>
                    <a href="news-details.html"><img src="img/news/news-2.jpg" alt="news"></a>
                    </div>
                    <div class="cp-news4-content mb-30">
                    <div class="cp-news1-meta lh-1">
                        <span><a href="blog.html">Banner Design</a></span>
                        <span>January 02, 2023</span>
                    </div>
                    <h3 class="cp-news4-title"><a href="news-details.html">Can you Scan my Hard copies into
                            Electronic.</a></h3>
                    <p class="cp-news4-text mb-20">Business cards are anything but old-fashioned. They still
                        represent the best and most
                        direct way of remaining in your
                        contact's minds. For this reason it is important that your business card is of quality
                        and able to transmit.</p>
                    <h5 class="cp-news-post-by">Author : <a href="#">Mr Don</a></h5>
                    </div>
                    <div class="cp-news4-btn mb-30 text-lg-end">
                    <a class="cp-border2-btn" href="news-details.html">read more</a>
                    </div>
                </div>
            </article>
            <article>
                <div class="cp-news4-item">
                    <div class="cp-news4-img p-relative w-img mb-30">
                    <div class="cp-img-overlay wow"></div>
                    <a href="news-details.html"><img src="img/news/news-1.jpg" alt="news"></a>
                    </div>
                    <div class="cp-news4-content mb-30">
                    <div class="cp-news1-meta lh-1">
                        <span><a href="blog.html">Flyer Design</a></span>
                        <span>January 02, 2023</span>
                    </div>
                    <h3 class="cp-news4-title"><a href="news-details.html">What Mockup Type Do you Accept for
                            Printing.</a></h3>
                    <p class="cp-news4-text mb-20">Business cards are anything but old-fashioned. They still
                        represent the best and most
                        direct way of remaining in your
                        contact's minds. For this reason it is important that your business card is of quality
                        and able to transmit.</p>
                    <h5 class="cp-news-post-by">Author : <a href="#">Mr Harry</a></h5>
                    </div>
                    <div class="cp-news4-btn mb-30 text-lg-end">
                    <a class="cp-border2-btn" href="news-details.html">read more</a>
                    </div>
                </div>
            </article>
        </div>
        </div>
    </section>
    <!-- news area end here  -->

    <!-- brand area start here  -->
    <div class="cp-brand-area pt-110 pb-110">
        <div class="container">
        <div class="row wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay="0.3">
            <div class="col-xl-12">
                <div class="cp-brand-wrap">
                    <div class="swiper-container cp-brand-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="cp-brand-img m-img">
                                <img src="img/brand/brand-1.png" alt="brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cp-brand-img m-img">
                                <img src="img/brand/brand-2.png" alt="brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cp-brand-img m-img">
                                <img src="img/brand/brand-3.png" alt="brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cp-brand-img m-img">
                                <img src="img/brand/brand-4.png" alt="brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="cp-brand-img m-img">
                                <img src="img/brand/brand-5.png" alt="brand">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- brand area end here  -->

    <!-- floating area start here  -->
    <div class="cp-floating-area d-none d-md-block zi-1100 p-relative ">
        <div class="cp-floating-action cp-bg-move-y">
        <span class="cp-floating-btn cp-floating-phone-btn cp" data-bs-toggle="modal"
            data-bs-target="#phonePopup"><i class="fal fa-phone-alt"></i></span>
        <span class="cp-floating-btn cp-floating-location-btn cp" data-bs-toggle="modal"
            data-bs-target="#locationPopup"><i class="fal fa-location-arrow"></i></span>
        <span class="cp-floating-btn cp-floating-form-btn cp" data-bs-toggle="modal" data-bs-target="#formPopup"><i
                class="fal fa-envelope-open-text"></i></span>
        </div>

        <!-- phone Modal start -->
        <div class="modal fade cp-floating-model" id="phonePopup" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="phonePopupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="cp-floating-item cp-phone-popup" id="phonePopupLabel">
                    <div class="cp-floating-left w-img">
                    <img src="img/cta/popup2.jpg" alt="contact">
                    </div>
                    <div class="cp-floating-text">
                    <h4 class="cp-floating-title">Our <span>Office Time</span></h4>
                    <div class="cp-floating-text-inner">
                        <span class="cp-floating-text-inner-icon">
                            <i class="fal fa-calendar-day"></i>
                        </span>
                        <span class="cp-floating-text-inner-text">monday - sunday</span>
                    </div>
                    <div class="cp-floating-text-inner">
                        <span class="cp-floating-text-inner-icon">
                            <i class="fal fa-watch"></i>
                        </span>
                        <span class="cp-floating-text-inner-text">8.00 am - 9.00 pm</span>
                    </div>
                    <div class="cp-floating-text-inner">
                        <span class="cp-floating-text-inner-icon">
                            <i class="far fa-phone-alt"></i>
                        </span>
                        <span class="cp-floating-text-inner-text"><a
                                href="tel:+910265362003">+910265362003</a></span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- phone Modal end -->

        <!-- location Modal start -->
        <div class="modal fade cp-floating-model" id="locationPopup" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="locationPopupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cp-floating-item cp-location-popup" id="locationPopupLabel">
                    <div class="cp-floating-left">
                    <div class="cp-floating-location">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99370.14184006557!2d-77.0846156762382!3d38.89386718919168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sbd!4v1671881294236!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    </div>
                    <div class="cp-floating-text">
                    <h4 class="cp-floating-title">know <span>our location</span></h4>
                    <div class="cp-floating-text-inner">
                        <span class="cp-floating-text-inner-icon">
                            <i class="fal fa-location-arrow"></i>
                        </span>
                        <span class="cp-floating-text-inner-text"><a target="_blank"
                                href="https://www.google.com/maps/@38.8938672,-77.0846157,12z">88
                                New Street,
                                Washington DC,
                                America</a></span>
                    </div>
                    <div class="cp-floating-text-inner">
                        <span class="cp-floating-text-inner-icon">
                            <i class="fal fa-location-arrow"></i>
                        </span>
                        <span class="cp-floating-text-inner-text"><a target="_blank"
                                href="https://www.google.com/maps/@1.952577,44.3912535,3z">100 New
                                Street, melbon,
                                Australian</a></span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- location Modal end -->

        <!-- form Modal start -->
        <div class="modal fade cp-floating-model" id="formPopup" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="formPopupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="cp-floating-item" id="formPopupLabel">
                    <div class="cp-floating-form-img w-img">
                    <img src="img/cta/cta-img.png" alt="contact">
                    </div>
                    <div class="cp-floating-left cp-signup-popup">
                    <h3 class="cp-floating-title">Do you have any question?</h3>
                    <div class="cp-floating-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6">
                                <div class="cp-input-field">
                                    <label for="name">Your Name</label>
                                    <input type="text" id="name">
                                </div>
                                </div>
                                <div class="col-xl-6">
                                <div class="cp-input-field">
                                    <label for="email">Your Email</label>
                                    <input type="email" id="email">
                                </div>
                                </div>
                                <div class="col-xl-12">
                                <div class="cp-input-field">
                                    <label for="message">Your question</label>
                                    <textarea id="message" cols="30" rows="10"></textarea>
                                </div>
                                </div>
                            </div>
                            <button type="submit" class="cp-btn mt-20">
                                send question
                                <span class="cp-btn__inner">
                                <span class="cp-btn__blobs">
                                    <span class="cp-btn__blob"></span>
                                    <span class="cp-btn__blob"></span>
                                    <span class="cp-btn__blob"></span>
                                    <span class="cp-btn__blob"></span>
                                </span>
                                </span>
                            </button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- form Modal end -->
    </div>
    <!-- floating area end here  -->

</main>

@endsection