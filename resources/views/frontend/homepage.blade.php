@extends('frontend.layouts.master')

@section('content')

    <!-- Slider One -->
    <section class="slider-one">
        <div class="slider-one_phone"><a href="tel:+088-142-5051"><i class="flaticon-call"></i>(088) 142-5051</a></div>
        <div class="main-slider swiper-container">
            <div class="swiper-wrapper">

                <!-- Slide -->
                <div class="swiper-slide" style="background-image:url({{asset('images/main-slider/1.jpg')}})">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="slider-one_content col-xl-9 col-lg-7 col-md-12 col-sm-12">
                                <div class="slider-one_content-inner">
                                    <div class="slider-one_title">Decorate Your Room</div>
                                    <h1 class="slider-one_heading">Quality Home Flooring & Painting Solution </h1>
                                    <div class="slider-one_button">
                                        <a href="services.html" class="theme-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">View Our Service</span>
                                            <span class="text-two">View Our Service</span>
                                        </span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="slider-one_image-column col-xl-3 col-lg-5 col-md-12 col-sm-12">
                                <div class="slider-one_image">
                                    <div class="title-one">No1 Flooring Tiles</div>
                                    <div class="title-two">Marble Floor Tiles</div>
                                    <img src="{{asset('images/main-slider/image-1.png')}}" alt=""/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide" style="background-image:url({{asset('images/main-slider/5.jpg')}})">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="slider-one_content col-xl-9 col-lg-7 col-md-12 col-sm-12">
                                <div class="slider-one_content-inner">
                                    <div class="slider-one_title">Decorate Your Room</div>
                                    <h1 class="slider-one_heading">Quality Home Flooring & Painting Solution </h1>
                                    <div class="slider-one_button">
                                        <a href="services.html" class="theme-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">View Our Service</span>
                                            <span class="text-two">View Our Service</span>
                                        </span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="slider-one_image-column col-xl-3 col-lg-5 col-md-12 col-sm-12">
                                <div class="slider-one_image">
                                    <div class="title-one">No1 Flooring Tiles</div>
                                    <div class="title-two">Marble Floor Tiles</div>
                                    <img src="{{asset('images/main-slider/image-1.png')}}" alt=""/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide" style="background-image:url({{asset('images/main-slider/6.jpg')}})">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="slider-one_content col-xl-9 col-lg-7 col-md-12 col-sm-12">
                                <div class="slider-one_content-inner">
                                    <div class="slider-one_title">Decorate Your Room</div>
                                    <h1 class="slider-one_heading">Quality Home Flooring & Painting Solution </h1>
                                    <div class="slider-one_button">
                                        <a href="services.html" class="theme-btn btn-style-two">
                                        <span class="btn-wrap">
                                            <span class="text-one">View Our Service</span>
                                            <span class="text-two">View Our Service</span>
                                        </span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="slider-one_image-column col-xl-3 col-lg-5 col-md-12 col-sm-12">
                                <div class="slider-one_image">
                                    <div class="title-one">No1 Flooring Tiles</div>
                                    <div class="title-two">Marble Floor Tiles</div>
                                    <img src="{{asset('images/main-slider/image-1.png')}}" alt=""/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Main Slider Section -->

    <!-- About One -->
    <section class="about-one">
        <div class="about-one_ball" style="background-image:url({{asset('images/icons/ball.png')}})"></div>
        <div class="about-one_lamp" style="background-image:url({{asset('images/icons/lamp.png')}})"></div>
        <div class="auto-container">

            <div class="row clearfix">
                <!-- Image Column -->
                <div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_image-outer">
                        <div class="about-one_image">
                            <img src="{{asset('images/resource/about.png')}}" alt=""/>
                        </div>
                        <div class="about-one_experiance">
                            <div class="about-one_circle"
                                 style="background-image:url({{asset('images/icons/experiance.png')}})"></div>
                            <span>15</span>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="about-one_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="about-one_content-outer">
                        <div class="sec-title">
                            <div class="sec-title_title"><i class="flaticon-wood-1"></i> About us</div>
                            <h2 class="sec-title_heading">Best Flooring & Painting Agency</h2>
                            <div class="sec-title_text">This esteemed level of status is only possible by the consistent
                                implementation of the highest possible standards of service
                            </div>
                        </div>
                        <div class="row clearfix">
                            <!-- About One Feature -->
                            <div class="about-one_feature col-lg-6 col-md-6 col-sm-12">
                                <div class="about-one_feature-inner">
                                    <div class="about-one_feature-icon flaticon-paving"></div>
                                    Quality Flooring Services
                                </div>
                            </div>
                            <!-- About One Feature -->
                            <div class="about-one_feature col-lg-6 col-md-6 col-sm-12">
                                <div class="about-one_feature-inner">
                                    <div class="about-one_feature-icon flaticon-tile"></div>
                                    No1 Flooring <br> Services
                                </div>
                            </div>
                        </div>
                        <div class="about-one_text">We are a small Kent based company with over 15 years experience and
                            have built a great reputation from our previous customers.
                        </div>
                        <div class="row clearfix">
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="about-one_list">
                                    <li><i class="flaticon-checked-1"></i>Helpful staff</li>
                                    <li><i class="flaticon-checked-1"></i>Community involvement</li>
                                </ul>
                            </div>
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="about-one_list">
                                    <li><i class="flaticon-checked-1"></i>Family-owned & operated</li>
                                    <li><i class="flaticon-checked-1"></i>Excellent relationships</li>
                                </ul>
                            </div>
                        </div>
                        <!-- About Button -->
                        <div class="about-one_button">
                            <a href="{{route('about')}}" class="theme-btn btn-style-one">
                            <span class="btn-wrap">
                                <span class="text-one">More About us</span>
                                <span class="text-two">More About us</span>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About One -->

    @include('frontend.components.features')

    @include('frontend.components.cta')

    @include('frontend.components.services')

    @include('frontend.components.contact')

@endsection
