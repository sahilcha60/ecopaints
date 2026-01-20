@extends('frontend.layouts.master')

@section('content')

    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('images/background/24.jpg')}})">
        <div class="auto-container">
            <h2>About us</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

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
                            <img src="{{asset('images/resource/about.png')}}" alt="" />
                        </div>
                        <div class="about-one_experiance">
                            <div class="about-one_circle" style="background-image:url({{asset('images/icons/experiance.png')}})"></div>
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
                            <div class="sec-title_text">This esteemed level of status is only possible by the consistent implementation of the highest possible standards of service </div>
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
                        <div class="about-one_text">We are a small Kent based company with over 15 years experience and have built a great reputation from our previous customers.</div>
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
                                    <li><i class="flaticon-checked-1"></i>Excellent relationships </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About One -->

    <!-- Services One -->
    <section class="services-one">
        <div class="services-one_bg" style="background-image:url({{asset('images/icons/ball.png')}})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block_one-inner" style="background-image:url({{asset('images/background/pattern-1.png')}})">
                        <div class="service-block_one-upper">
                            <div class="service-block_one-icon flaticon-paint-roll"></div>
                            <h4 class="service-block_one-heading"><a href="service-detail.html">Paint And Flooring</a></h4>
                        </div>
                        <div class="service-block_one-text">Whether you’re looking for new carpet in your family home, commercial building or investment property</div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block_one-inner" style="background-image:url({{asset('images/background/pattern-1.png')}})">
                        <div class="service-block_one-upper">
                            <div class="service-block_one-icon flaticon-tiles"></div>
                            <h4 class="service-block_one-heading"><a href="service-detail.html">On Time & On Budget…</a></h4>
                        </div>
                        <div class="service-block_one-text">Whether you’re looking for new carpet in your family home, commercial building or investment property</div>
                    </div>
                </div>

                <!-- Service Block One -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block_one-inner" style="background-image:url({{asset('images/background/pattern-1.png')}})">
                        <div class="service-block_one-upper">
                            <div class="service-block_one-icon flaticon-punctuality"></div>
                            <h4 class="service-block_one-heading"><a href="service-detail.html">Free <br> Estimate</a></h4>
                        </div>
                        <div class="service-block_one-text">Whether you’re looking for new carpet in your family home, commercial building or investment property</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Services One -->

    <!-- Services Three -->
    <section class="services-three">
        <div class="services-three_tiles-icon" style="background-image:url({{asset('images/icons/tiles.png')}})"></div>
        <div class="services-three_pattern" style="background-image:url({{asset('images/background/pattern-4.png')}})"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="services-three_content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="services-three_content-outer">
                        <div class="sec-title">
                            <div class="sec-title_title"><i class="flaticon-wood-1"></i> trusty Services</div>
                            <h2 class="sec-title_heading">We offer Dependable Flooring And Painting Services</h2>
                            <div class="sec-title_text">We are a small Kent based company with over 15 years experience and have built a great reputation from our previous customers. Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                        </div>

                        <!-- Skills -->
                        <div class="default-skills">
                            <div class="row clearfix">
                                <!-- Skill Item -->
                                <div class="default-skill-item col-lg-6 col-md-6 col-sm-12">
                                    <div class="default-skill-title">Painting Work</div>
                                    <div class="default-skill-bar">
                                        <div class="default-bar-inner">
                                            <div class="default-bar progress-line" data-width="90">
                                                <div class="default-skill-percentage"></div>
                                                <div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Skill Item -->
                                <div class="default-skill-item col-lg-6 col-md-6 col-sm-12">
                                    <div class="default-skill-title">Flooring Work</div>
                                    <div class="default-skill-bar">
                                        <div class="default-bar-inner">
                                            <div class="default-bar progress-line" data-width="95">
                                                <div class="default-skill-percentage"></div>
                                                <div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <!-- Services Three Feature -->
                            <div class="services-three_feature col-lg-6 col-md-6 col-sm-12">
                                <div class="services-three_feature-inner">
                                    <div class="services-three_feature-icon flaticon-paving"></div>
                                    Interior & <br> Exterior Painting
                                </div>
                            </div>
                            <!-- Services Three Feature -->
                            <div class="services-three_feature col-lg-6 col-md-6 col-sm-12">
                                <div class="services-three_feature-inner">
                                    <div class="services-three_feature-icon flaticon-tile"></div>
                                    Modern & luxurious <br> Flooring interior
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- CTA One Image -->
                <div class="services-three_images-column col-lg-5 col-md-12 col-sm-12">
                    <div class="services-three_images-outer">
                        <div class="services-three_image">
                            <img src="{{asset('images/resource/service-5.png')}}" alt="" />
                        </div>
                        <div class="services-three_tiles">
                            <div class="services-three_tile">
                                <img src="{{asset('images/resource/service-6.png')}}" alt="" />
                            </div>
                            <div class="services-three_tile">
                                <img src="{{asset('images/resource/service-7.png')}}" alt="" />
                            </div>
                            <div class="services-three_tile">
                                <img src="{{asset('images/resource/service-8.png')}}" alt="" />
                            </div>
                            <div class="services-three_tile">
                                <img src="{{asset('images/resource/service-9.png')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Cta One -->

    <!-- Contact One -->
    <section class="contact-one" style="background-image:url(assets/images/background/map.png)">
        <div class="contact-one_curve"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="contact-one_image">
                    <img src="assets/images/resource/contact.jpg" alt="" />
                    <div class="contact-one_ball" style="background-image:url(assets/images/icons/ball.png)"></div>
                </div>
                <div class="contact-one_image-two">
                    <img src="assets/images/resource/contact-1.jpg" alt="" />
                </div>
                <div class="row clearfix">

                    <!-- Info Column -->
                    <div class="contact-one_info-column col-lg-5 col-md-12 col-sm-12">
                        <div class="contact-one_info-outer">
                            <h2 class="contact-one_title">Feel Free To Contact Our Team</h2>
                            <ul class="contact-one_list">
                                <li>
                                    <span class="flaticon-telephone"></span>
                                    <strong>Call Anytime</strong>
                                    + 88 (00) - 4612451
                                </li>
                                <li>
                                    <span class="flaticon-pin"></span>
                                    <strong>Address</strong>
                                    Fulham Way, IP1 4FB CA 1412
                                </li>
                            </ul>
                            <div class="contact-one_phone">
                                <div class="contact-one_phone-inner">
                                    <div class="side-icon flaticon-wood-1"></div>
                                    <div class="icon flaticon-comment"></div>
                                    Call Anytime <br>
                                    <a href="https://themazine.com/cdn-cgi/l/email-protection#5724222727382523656317303a363e3b7934383a"><span class="__cf_email__" data-cfemail="bfeccacfcfd0cdcb8d8bffd8d2ded6d391dcd0d2">[email&#160;protected]</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="contact-one_form-column col-lg-7 col-md-12 col-sm-12">
                        <div class="contact-one_form-outer">
                            <div class="title-box">
                                <h3>A Brief Overview Of The Space You Would Like To Decorate. </h3>
                                <div class="text">There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration in some</div>
                            </div>

                            <!-- Default Form -->
                            <div class="default-form">
                                <form method="post" action="https://themazine.com/html/fllopi/blog.html">
                                    <div class="row clearfix">

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Full Name*" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="email" placeholder="Email*" required="">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea class="" name="message" placeholder="Your Request"></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <!-- Button Box -->
                                            <button type="submit" class="theme-btn submit-btn">
                                                Send Request
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!-- End Default Form -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Contact One -->


@endsection
