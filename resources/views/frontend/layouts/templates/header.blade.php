<!-- Main Header / Header Style Three -->
<header class="main-header header-style-three">
    <div class="header-style-three_image" style="background-image:url({{asset('images/background/14.jpg')}})"></div>
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box d-flex align-items-center flex-wrap">
                    <!-- Header Socials -->
                    <div class="header_socials">
                        <a class="fa-brands fa-facebook-f fa-fw" href="#"></a>
                        <a class="fa-brands fa-instagram fa-fw" href="#"></a>
                        <a class="fa-brands fa-twitter fa-fw" href="#"></a>
                        <a class="fa-brands fa-youtube fa-fw" href="#"></a>
                    </div>
                </div>
                <div class="right-box">
                    <!-- Info List -->
                    <ul class="header-top_info">
                        <li><span class="icon flaticon-location-pin"></span><a href="contact.html">Nakhu, Lalitpur, Nepal</a></li>
                        <li><span class="icon flaticon-messenger"></span><a href="#">info@ecopaints.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <div class="left-box d-flex align-items-center flex-wrap">
                        <!-- Logo Box -->
                        <div class="logo-box">
                            <div class="logo"><a href="{{ route('homepage') }}"><img src="{{asset('images/logo-2.png')}}" alt="" title=""></a></div>
                        </div>
                        <!-- End Logo Box -->

                        <!-- Nav Outer -->
                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ route('homepage') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li class="dropdown"><a href="{{ route('category') }}">Category</a>
                                            <ul>
                                                @foreach($categories as $category)
                                                    <li>
                                                        <a href="{{ route('category.sub', $category->slug) }}">
                                                            {{ $category->title }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="services.html">services</a></li>
                                                <li><a href="service-detail.html">service detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Colors</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- End Nav Outer -->

                    </div>

                    <!-- Outer Box -->
                    <div class="outer-box d-flex align-items-center flex-wrap">

                        <!-- Header Button Box -->
                        <div class="header_button-box">
                            <a href="contact.html" class="theme-btn btn-style-one">
                                <span class="btn-wrap">
                                    <span class="text-one">Get a Quote</span>
                                    <span class="text-two">Get a Quote</span>
                                </span>
                            </a>
                        </div>
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    </div>
                    <!-- End Outer Box -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-close"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{asset('images/mobile-logo.png')}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
