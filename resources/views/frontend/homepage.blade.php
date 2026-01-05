@extends('frontend.layouts.master')

@section('content')

<!--===== HERO AREA STARTS =======-->
<div class="vl-hero-area">
    <div class="hero1-bg">
        <div class="swiper myhero1">
            <div class="swiper-wrapper">

                <!-- Hero Slide -->
                <div class="swiper-slide">
                    <div class="hero1-bg-slide">
                        <img 
                            src="{{ asset('img/hero/hero-hm1-bg(1).png') }}" 
                            alt="Hero Background" 
                            class="hero-hm1-bg"
                        >

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-8">

                                    <div class="vl-hero-box">
                                        <div class="vl-hero-box-info">

                                            <!-- Hero Heading -->
                                            <div class="vl-hero-heading">
                                                <div class="vl-hero-subtitle">
                                                    <h2>
                                                        <img 
                                                            src="{{ asset('img/icon/hero-sub-title-icon-hm1.svg') }}" 
                                                            alt=""
                                                        >
                                                        Breathe New Life into Every Room
                                                    </h2>
                                                </div>

                                                <div class="space22"></div>

                                                <div class="vl-hero-title">
                                                    <h1>
                                                        Expert Painters <br>
                                                        Ready to Refresh <br>
                                                        Your Space
                                                    </h1>
                                                </div>
                                            </div>

                                            <div class="space34"></div>

                                            <!-- Hero Info List -->
                                            <div class="vl-hero-info-content">

                                                <div class="item-list">
                                                    <div class="item-icons">
                                                        <img 
                                                            src="{{ asset('img/icon/item-list-icon-hero.svg') }}" 
                                                            alt=""
                                                        >
                                                    </div>
                                                    <h2>FREE Phone Estimates.</h2>
                                                </div>

                                                <div class="space20"></div>

                                                <div class="item-list">
                                                    <div class="item-icons">
                                                        <img 
                                                            src="{{ asset('img/icon/item-list-icon-hero.svg') }}" 
                                                            alt=""
                                                        >
                                                    </div>
                                                    <h2>
                                                        We help you select the right wallpaper <br>
                                                        and calculate the needed amount.
                                                    </h2>
                                                </div>

                                                <div class="space20"></div>

                                                <div class="item-list">
                                                    <div class="item-icons">
                                                        <img 
                                                            src="{{ asset('img/icon/item-list-icon-hero.svg') }}" 
                                                            alt=""
                                                        >
                                                    </div>
                                                    <h2>
                                                        We handle all types of wallpaper surfaces, <br>
                                                        ensuring top results no matter the complexity.
                                                    </h2>
                                                </div>

                                                <div class="space28"></div>

                                                <!-- Hero Button -->
                                                <div class="vl-hero-btn">
                                                    <div class="btn_area1">
                                                        <a href="{{ route('contact') }}" class="vl-btn1">
                                                            Start Your Transformation
                                                            <i class="fa-solid fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- End Hero Info -->

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>

<!--===== HERO AREA ENDS =======-->



<!--===== ABOUT AREA STARTS =======-->
<div class="about1 sp1">
  <div class="container">
    <div class="row  align-items-center">
       <div class="col-xl-6">
          <div class="col-xl-12">
            <div class="row">
             <div class="col-xl-6 col-lg-6 col-md-6" data-aos="zoom-out" data-aos-duration="900">
                <div class="about-exp-box">
                    <h2><span class="counter">20</span>+</h2>
                    <div class="space20"></div>
                    <p>Years Of Experience</p>
                    <div class="space80"></div>
                    <h3>We’ve built A reputation <br> For quality, Reliability, <br> And Craftsmanship.</h3>
                </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about1-box-banner-sm image-anime reveal">
                    <img src="img/about/about-box-smbanner-hm1.html" alt="">
                </div>
             </div>
            </div>
            <div class="space30"></div>
            <div class="col-xl-12">
             <div class="about1-lrg-banner image-anime reveal">
              <img src="img/about/about-box-lrgbanner-hm1.html" alt="">
            </div>
            </div>
          </div>
       </div>
       <div class="col-xl-6">
          <div class="about1-info">
                  <div class="vl-about-title-area">
                     <h3 class="sub-title" data-aos="fade-left" data-aos-duration="800"><img src="img/icon/about-subtitle-icon-hm1.html" alt="">About Us</h3>
                     <div class="space22"></div>
                     <h2 class="title text-anime-style-3" data-aos="fade-left" data-aos-duration="900">Transform Your Home with Professional Painting</h2>
                     <div class="space16"></div>
                     <p data-aos="fade-left" data-aos-duration="1000" class="text-effect">We believe that the right paint or wallpaper completely transform <br> a space. With years of experience & a passion for detail, our <br> team is dedicated to delivering top-quality renovation services.</p>
                  </div>
              <div class="space32"></div>
              <div class="about1-info-content">
                   <div class="about1-info-contentbox" data-aos="fade-left" data-aos-duration="1100">
                      <div class="about1-contentbox-icon">
                         <img src="img/icon/about1-box-icon.html" alt="">
                      </div>
                      <div class="about1-contentbox-text">
                          <h2><a href="about-us.html">Unleash the Power of Color in Your Home</a></h2>
                          <div class="space18"></div>
                          <p>We’re passionate about transforming your space with <br> beautiful, long-lasting paint. Our expert team uses</p>
                      </div>
                   </div>
                   <div class="space32"></div>
                    <div class="about1-info-contentbox" data-aos="fade-left" data-aos-duration="1200">
                      <div class="about1-contentbox-icon">
                         <img src="img/icon/about1-box-icon(2).html" alt="">
                      </div>
                      <div class="about1-contentbox-text">
                          <h2><a href="about-us.html">Your Home, Your Style, Perfectly Painted</a></h2>
                          <div class="space18"></div>
                          <p>From classic neutrals to statements, saiin specializes <br> in delivering personalized painting solutions tailored</p>
                      </div>
                   </div>
              </div>
              <div class="space32"></div>
              <div class="about1-btn-area" data-aos="fade-left" data-aos-duration="1200">
                  <div class="btn_area1">
                      <a href="about-us.html" class="vl-btn1">Let’s Get Started <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
       </div>
    </div>
  </div>
   <div class="about1-shape">
       <div class="about1-shape-img aniamtion-key-2">
         <img src="img/shape/about1-shape.html" alt="">
       </div>
   </div>
</div>
<!--===== ABOUT AREA ENDS =======-->


<!--===== Our_services AREA STARTS =======-->
 <div class="vl-our_services_area sp1">
     <div class="container">
       <div class="row">
           <div class="our_services_top">
               <div class="our_services_heading">
                  <div class="vl-about-title-area">
                     <h3 class="sub-title" data-aos="fade-right" data-aos-duration="800"><img src="img/icon/about-subtitle-icon-hm1.html" alt="">Our Services</h3>
                     <div class="space22"></div>
                     <h2 class="title text-anime-style-3" data-aos="fade-right" data-aos-duration="900">Comprehensive Painting <br> Services for Every Room</h2>
                  </div>
               </div>
               <div class="our_services_top_btn " data-aos="fade-left" data-aos-duration="900">
                   <div class="btn_area1">
                      <a href="service.html" class="vl-btn1">View Services <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
           </div>
           <div class="space60"></div>
            <div class="swiper our_services1 " data-aos="fade-up" data-aos-duration="1200" data-aos-offset="80">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                       <div class="our_services1_info">
               <div class="our_services1_info_banner">
                  <img src="img/service/our_service1_(1).html" alt="">
                  <div class="our_services1_info_banner_content">
                     <h3><a href="service.html">Cabinet Refinishing & Painting</a></h3>
                     <div class="space12"></div>
                     <p>Give your kitchen or bathroom whole new  look with our cabinet refinishing & paintin</p>
                     <div class="space14"></div>
                     <a class="view_services" href="service-single.html">View Services<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
                       </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="our_services1_info">
               <div class="our_services1_info_banner">
                  <img src="img/service/our_service1_(2).html" alt="">
                  <div class="our_services1_info_banner_content">
                     <h3><a href="service.html">Cabinet Refinishing & Painting</a></h3>
                     <div class="space12"></div>
                     <p>Give your kitchen or bathroom whole new  look with our cabinet refinishing & paintin</p>
                     <div class="space14"></div>
                     <a class="view_services" href="service-single.html">View Services<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
                       </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="our_services1_info">
               <div class="our_services1_info_banner">
                  <img src="img/service/our_service1_(3).html" alt="">
                  <div class="our_services1_info_banner_content">
                     <h3><a href="service.html">Cabinet Refinishing & Painting</a></h3>
                     <div class="space12"></div>
                     <p>Give your kitchen or bathroom whole new  look with our cabinet refinishing & paintin</p>
                     <div class="space14"></div>
                     <a class="view_services" href="service-single.html">View Services<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
                       </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="our_services1_info">
               <div class="our_services1_info_banner">
                  <img src="img/service/our_service1_(4).html" alt="">
                  <div class="our_services1_info_banner_content">
                     <h3><a href="service.html">Cabinet Refinishing & Painting</a></h3>
                     <div class="space12"></div>
                     <p>Give your kitchen or bathroom whole new look with our cabinet refinishing & paintin</p>
                     <div class="space14"></div>
                     <a class="view_services" href="service-single.html">View Services<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
                       </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="our_services1_info">
               <div class="our_services1_info_banner">
                  <img src="img/service/our_service1_(5).html" alt="">
                  <div class="our_services1_info_banner_content">
                     <h3><a href="service.html">Cabinet Refinishing & Painting</a></h3>
                     <div class="space12"></div>
                     <p>Give your kitchen or bathroom whole new look with our cabinet refinishing & paintin</p>
                     <div class="space14"></div>
                     <a class="view_services" href="service-single.html">View Services<i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
                       </div>
                  </div>
                </div>
            </div>
            <div class="space22"></div>
            <div class="vl-our_services_arrow">
              <div class="our_services_arrow_slider1">
                  <div class="next-arrow">
                     <button><i class="fa-solid fa-angle-left"></i></button>
                   </div>
              </div>
                   <div class="prev-arrow">
                     <button><i class="fa-solid fa-angle-right"></i></button>
                   </div>
            </div>

          

       </div>
     </div>
 </div>
<!--===== Our_services AREA ENDS =======-->


<!--===== CHOOSE AREA START =======-->
<div class="vl-choose1-area sp1">
    <div class="container">
       <div class="row">
           <div class="col-xl-8 mx-auto">
              <div class="vl-choose1-heading text-center">
                <div class="vl-about-title-area">
                      <h3 class="sub-title" data-aos="zoom-in" data-aos-duration="800"><img src="img/icon/about-subtitle-icon-hm1.html" alt="">Why Choose Us</h3>
                      <div class="space22"></div>
                      <h2 class="title text-anime-style-3" data-aos="zoom-in" data-aos-duration="800">More Than Just Paint We <br> Deliver Peace of Mind</h2>
                  </div>
                </div>
           </div>
           <div class="space60"></div>
           <div class="col-xl-6 col-lg-6">
              <div class="vl-choose1-content" data-aos="fade-right" data-aos-duration="800">
                 <h2><a href="service.html">Your Satisfaction is Our Priority</a></h2>
                 <div class="space16"></div>
                 <p>We’re not happy until you From the moment you reach out to <br> us you’ll experience a level of professionalism & care that sets</p>
              </div>
              <div class="space30"></div>
              <div class="vl-choose1-content" data-aos="fade-right" data-aos-duration="900">
                 <h2><a href="service-single.html">We Bring Professionalism to Every Project</a></h2>
                 <div class="space16"></div>
                 <p>Choosing the right painting company matters. With saiin, <br> you’re getting a values punctuality, clear communication.</p>
              </div>
              <div class="space30"></div>
              <div class="vl-choose1-content" data-aos="fade-right" data-aos-duration="1000">
                 <h2><a href="service-single.html">Trusted by Homeowners Backed by Results.</a></h2>
                 <div class="space16"></div>
                 <p>Don’t just take our word for it our clients love transformation <br> we bring to their spaces with of experience, high-quality.</p>
              </div>
           </div>
           <div class="col-xl-6 col-lg-6">
            <div class="vl-choose1-banner">
               <div class="banner-shape1 image-anime reveal">
                  <img src="img/choosse/chosse1-banner-1.html" alt="">
               </div>
               <div class="banner-shape2 text-end image-anime reveal">
                 <img src="img/choosse/chosse1-banner-2.html" alt="">
               </div>
            </div>
           </div>
       </div>
    </div>
</div>
<!--===== CHOOSE  AREA ENDS =======-->

<!--===== WORK  AREA START =======-->
<div class="work1-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 mx-auto">
           <div class="vl-work-heading-area text-center">
                <h3 data-aos="zoom-in" data-aos-duration="800"><img src="img/icon/about-subtitle-icon-hm1.html" alt="">How WE Work</h3>
                <div class="space22"></div>
                <h2 class="text-anime-style-3" data-aos="zoom-in" data-aos-duration="900">How We Bring Your Vision to Life</h2>
           </div>
        </div>
        <div class="space80"></div>
        <div class="row">
           <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="900">
               <div class="work1-contentbox">
                    <div class="work1-box-icon">
                        <img src="img/icon/work1-box-icon(1).html" alt="">
                    </div>
                    <div class="space24"></div>
                    <div class="work1-box-text">
                        <h2><a href="projects-single.html">Free Consultation</a></h2>
                        <div class="space16"></div>
                        <p>During this consultation, we assess your <br> space, offer color recommendations if <br> needed, deliver a no-obligation quote.</p>
                    </div>
                    <div class="work1-box-topshape">
                        <h2>01</h2>
                    </div>
               </div>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="900">
                <div class="work1-contentbox">
                    <div class="work1-box-icon">
                        <img src="img/icon/work1-box-icon(2).html" alt="">
                    </div>
                    <div class="space24"></div>
                    <div class="work1-box-text">
                        <h2><a href="projects-single.html">Detailed Preparation</a></h2>
                        <div class="space16"></div>
                        <p>Before any paint goes the wall, we make <br> sure the surface is ready. This includes <br> covering furniture, repairing small.</p>
                    </div>
                    <div class="work1-box-topshape">
                        <h2>02</h2>
                    </div>
               </div>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="900">
                             <div class="work1-contentbox">
                    <div class="work1-box-icon">
                        <img src="img/icon/work1-box-icon(3).html" alt="">
                    </div>
                    <div class="space24"></div>
                    <div class="work1-box-text">
                        <h2><a href="#">Professional Painting</a></h2>
                        <div class="space16"></div>
                        <p>Our experienced painters get work with precision care. We use premium paints and industry-best techniques to apply.</p>
                    </div>
                    <div class="work1-box-topshape">
                        <h2>03</h2>
                    </div>
               </div>
           </div>
         </div>
      </div>
    </div>
</div>
<!--===== WORK AREA ENDS =======-->

<!--===== PROJECT AREA START =======-->
<div class="project1 sp2">
  <div class="container">
    <div class="row">
        <div class="col-xl-7 mx-auto">
          <div class="vl-project-area text-center">
             <div class="vl-about-title-area">
                      <h3 class="sub-title" data-aos="zoom-in" data-aos-duration="800"><img src="img/icon/about-subtitle-icon-hm1.html" alt="">Our Projects</h3>
                      <div class="space22"></div>
                      <h2 class="title text-anime-style-3" data-aos="zoom-in" data-aos-duration="900">What We’ve Been Working On</h2>
              </div>
          </div>
        </div>
        <div class="space60"></div>
        
        <div class="row">
          <div class="col-lg-6">
              <div class="project1-info">
                  <div class="project1-before-thumb reveal">
                        <img class="before_imgs" src="img/projects/before_thumb(1.1).html" alt="">
                        <div class="thumb-text">
                            <h4>Before</h4>
                        </div>
                  </div>
                  <div class="project1-after-thumb reveal">
                        <img class="after_imgs" src="img/projects/after_thumb(1.1).html" alt="">
                        <div class="thumb-text">
                            <h4>After</h4>
                        </div>
                  </div>
               </div>
          </div>
          <div class="col-lg-6">
            <div class="project1-info">
                  <div class="project1-before-thumb reveal">
                        <img class="before_imgs" src="img/projects/before_thumb(2.1).html" alt="">
                        <div class="thumb-text">
                            <h4>Before</h4>
                        </div>
                  </div>
                  <div class="project1-after-thumb reveal">
                        <img class="after_imgs" src="img/projects/after_thumb(2.1).html" alt="">
                        <div class="thumb-text">
                            <h4>After</h4>
                        </div>
                  </div>
               </div>
          </div>
        </div>

    </div>
  </div>
</div>
<!--===== PROJECT AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial1 sp1">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 mx-auto">
            <div class="vl-testimonial-heading text-center">
                <div class="vl-about-title-area">
                        <h3 class="title_area_testimonial1" data-aos="zoom-in" data-aos-duration="800"><img src="img/icon/about-subtitle-icon-hm1.html" alt="">Testimonials</h3>
                        <div class="space22"></div>
                        <h2 class="title_area_testimonial1 text-anime-style-3" data-aos="zoom-in" data-aos-duration="900">What Our Clients Are Saying</h2>
                </div>
            </div>
           </div>
           <div class="space60"></div>
           <div class="row">
             <div class="col-xl-10 mx-auto " data-aos="fade-up" data-aos-duration="900" data-aos-offset="80">
              <div class="teasimonial_1_slider_arrows">

         <div class="swiper mySwipertestimo1">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                         <div class="vl-testimonial1-info">
                     <div class="vl-testimonial1-info-content">
                          <div class="star_icon">
                            <ul>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                           </ul>
                          </div>  
                          <div class="space16"></div>
                          <p class="p-text">“I couldn’t happier with the way my feature wall turned out. The <br> team was so professional, clean, the wallpaper looks absolutely <br> perfect. Highly recommend. Seamless install, perfectly lined up <br> patterns, and no mess left behind. These guys are true pros.”</p>
                          <div class="space40"></div>
                          <div class="testimonial1-bottom">
                               <div class="testimonial1-bio">
                                   <div class="testimonial1-bio-user">
                                       <img src="img/testimonil/testimonials1-bio-user.html" alt="">
                                   </div>
                                   <div class="testimonial1-bio-text">
                                      <h2><a href="testimonials.html">Marcus James K</a></h2>
                                      <div class="space12"></div>
                                      <p>Interior Designer</p>
                                   </div>
                               </div>
                               <div class="testimonial1-bottom-logo">
                                  <img src="img/logo/testi(1)logo_google.html" alt="">
                               </div>
                          </div>
                     </div>
                      <div class="line"></div>
                      <div class="vl-testimonial1-counter-area">
                        <div class="vl-testimonial1-counter-area-box">
                            <h2><span class="counter">500</span>+</h2>
                            <div class="space18"></div>
                            <p>Walls Transformed</p>
                        </div>
                        <div class="space24"></div>
                          <div class="vl-testimonial1-counter-area-box">
                            <h2><span class="counter">20</span>+</h2>
                            <div class="space18"></div>
                            <p>Years Of Experience</p>
                        </div>
                        <div class="space24"></div>
                          <div class="vl-testimonial1-counter-area-box">
                            <h2><span class="counter">99</span>%</h2>
                            <div class="space18"></div>
                            <p>Customer Satisfaction</p>
                        </div>
                      </div>
                         </div>
                  </div>
                  <div class="swiper-slide">
                                            <div class="vl-testimonial1-info">
                     <div class="vl-testimonial1-info-content">
                          <div class="star_icon">
                            <ul>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                           </ul>
                          </div>  
                          <div class="space16"></div>
                          <p class="p-text">“I couldn’t happier with the way my feature wall turned out. The <br> team was so professional, clean, the wallpaper looks absolutely <br> perfect. Highly recommend. Seamless install, perfectly lined up <br> patterns, and no mess left behind. These guys are true pros.”</p>
                          <div class="space40"></div>
                          <div class="testimonial1-bottom">
                               <div class="testimonial1-bio">
                                   <div class="testimonial1-bio-user">
                                       <img src="img/testimonil/testimonials1-bio-user.html" alt="">
                                   </div>
                                   <div class="testimonial1-bio-text">
                                      <h2><a href="testimonials.html">Marcus James K</a></h2>
                                      <div class="space12"></div>
                                      <p>Interior Designer</p>
                                   </div>
                               </div>
                               <div class="testimonial1-bottom-logo">
                                  <img src="img/logo/testi(1)logo_google.html" alt="">
                               </div>
                          </div>
                     </div>
                      <div class="line"></div>
                      <div class="vl-testimonial1-counter-area">
                        <div class="vl-testimonial1-counter-area-box">
                            <h2><span class="counter">500</span>+</h2>
                            <div class="space18"></div>
                            <p>Walls Transformed</p>
                        </div>
                        <div class="space24"></div>
                          <div class="vl-testimonial1-counter-area-box">
                            <h2><span class="counter">20</span>+</h2>
                            <div class="space18"></div>
                            <p>Years Of Experience</p>
                        </div>
                        <div class="space24"></div>
                          <div class="vl-testimonial1-counter-area-box">
                            <h2><span class="counter">99</span>%</h2>
                            <div class="space18"></div>
                            <p>Customer Satisfaction</p>
                        </div>
                      </div>
                         </div>
                  </div>
                  <div class="swiper-slide">
                                            <div class="vl-testimonial1-info">
                     <div class="vl-testimonial1-info-content">
                          <div class="star_icon">
                            <ul>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                              <li><i class="fa-solid fa-star"></i></li>
                           </ul>
                          </div>  
                          <div class="space16"></div>
                          <p class="p-text">“I couldn’t happier with the way my feature wall turned out. The <br> team was so professional, clean, the wallpaper looks absolutely <br> perfect. Highly recommend. Seamless install, perfectly lined up <br> patterns, and no mess left behind. These guys are true pros.”</p>
                          <div class="space40"></div>
                          <div class="testimonial1-bottom">
                               <div class="testimonial1-bio">
                                   <div class="testimonial1-bio-user">
                                       <img src="img/testimonil/testimonials1-bio-user.html" alt="">
                                   </div>
                                   <div class="testimonial1-bio-text">
                                      <h2><a href="testimonials.html">Marcus James K</a></h2>
                                      <div class="space12"></div>
                                      <p>Interior Designer</p>
                                   </div>
                               </div>
                               <div class="testimonial1-bottom-logo">
                                  <img src="img/logo/testi(1)logo_google.html" alt="">
                               </div>
                          </div>
                     </div>
                      <div class="line"></div>
                      <div class="vl-testimonial1-counter-area">
                        <div class="vl-testimonial1-counter-area-box">
                            <h2><span class="counter">500</span>+</h2>
                            <div class="space18"></div>
                            <p>Walls Transformed</p>
                        </div>
                        <div class="space24"></div>
                          <div class="vl-testimonial1-counter-area-box">
                            <h2><span class="counter">20</span>+</h2>
                            <div class="space18"></div>
                            <p>Years Of Experience</p>
                        </div>
                        <div class="space24"></div>
                          <div class="vl-testimonial1-counter-area-box">
                            <h2><span class="counter">99</span>%</h2>
                            <div class="space18"></div>
                            <p>Customer Satisfaction</p>
                        </div>
                      </div>
                         </div>
                  </div>
                </div>
              </div>

              <div class="testimonial1-arrow">
              <div class="testimonial1-arrow-left" data-aos="fade-right" data-aos-duration="1000">
                  <div class="prev-arrow">
                     <button><i class="fa-solid fa-angle-left"></i></button>
                   </div>
              </div>
              <div class="testimonial1-arrow-right" data-aos="fade-left" data-aos-duration="1000">
                <div class="next-arrow">
                     <button><i class="fa-solid fa-angle-right"></i></button>
                 </div>
              </div>
         </div>
              </div>
             </div>
           </div>
        </div>
         
      </div>
</div>
<!--===== TESTIMONIAL AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service1-area">
    <div class="container">
       <div class="row">
         <div class="col-xl-8 mx-auto">
          <div class="vl-service1-area-heading text-center">
             <div class="vl-about-title-area">
                      <h3 class="sub-title" data-aos="zoom-in" data-aos-duration="800"><img src="img/icon/about-subtitle-icon-hm1.html" alt="">Tips & Inspiration</h3>
                      <div class="space22"></div>
                      <h2 class="title text-anime-style-3" data-aos="zoom-in" data-aos-duration="900">From the Brush Expert Advice</h2>
              </div>
          </div>
         </div>
         <div class="space60"></div>
         <div class="col-xl-6 col-lg-6" data-aos="fade-right" data-aos-duration="900">
            <div class="vl-service1-box">
                <div class="vl-service1-box-banner">
                   <div class="vl-service1-box-banner-img image-anime reveal">
                     <img src="img/service/service1-banner(1).html" alt="">
                   </div>
                </div>
                <div class="vl-service1-box-info">
                    <div class="vl-service1-box-info-top">
                        <div class="vl-service1-box-date">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                            <g clip-path="url(#clip0_446_6446)">
                              <path d="M5.61627 0C5.80006 0 5.97633 0.0811248 6.1063 0.225528C6.23626 0.369931 6.30927 0.565783 6.30927 0.77V2.2099H13.7511V0.7799C13.7511 0.575683 13.8241 0.379831 13.9541 0.235428C14.084 0.0910248 14.2603 0.0099 14.4441 0.0099C14.6279 0.0099 14.8042 0.0910248 14.9341 0.235428C15.0641 0.379831 15.1371 0.575683 15.1371 0.7799V2.2099H17.82C18.345 2.2099 18.8484 2.44153 19.2197 2.85388C19.591 3.26622 19.7997 3.82551 19.8 4.4088V19.8011C19.7997 20.3844 19.591 20.9437 19.2197 21.356C18.8484 21.7684 18.345 22 17.82 22H1.98C1.45504 22 0.951572 21.7684 0.580278 21.356C0.208985 20.9437 0.000262479 20.3844 0 19.8011L0 4.4088C0.000262479 3.82551 0.208985 3.26622 0.580278 2.85388C0.951572 2.44153 1.45504 2.2099 1.98 2.2099H4.92327V0.7689C4.92353 0.564874 4.99666 0.369304 5.12659 0.225139C5.25653 0.0809736 5.43265 -2.0819e-07 5.61627 0ZM1.386 8.5162V19.8011C1.386 19.8878 1.40136 19.9736 1.43122 20.0537C1.46107 20.1337 1.50482 20.2065 1.55998 20.2678C1.61514 20.3291 1.68062 20.3777 1.75269 20.4109C1.82475 20.444 1.90199 20.4611 1.98 20.4611H17.82C17.898 20.4611 17.9752 20.444 18.0473 20.4109C18.1194 20.3777 18.1849 20.3291 18.24 20.2678C18.2952 20.2065 18.3389 20.1337 18.3688 20.0537C18.3986 19.9736 18.414 19.8878 18.414 19.8011V8.5316L1.386 8.5162ZM6.60033 16.0809V17.9135H4.95V16.0809H6.60033ZM10.7247 16.0809V17.9135H9.07533V16.0809H10.7247ZM14.85 16.0809V17.9135H13.1997V16.0809H14.85ZM6.60033 11.7062V13.5388H4.95V11.7062H6.60033ZM10.7247 11.7062V13.5388H9.07533V11.7062H10.7247ZM14.85 11.7062V13.5388H13.1997V11.7062H14.85ZM4.92327 3.7488H1.98C1.90199 3.7488 1.82475 3.76587 1.75269 3.79904C1.68062 3.83221 1.61514 3.88082 1.55998 3.94211C1.50482 4.0034 1.46107 4.07615 1.43122 4.15623C1.40136 4.2363 1.386 4.32213 1.386 4.4088V6.9773L18.414 6.9927V4.4088C18.414 4.32213 18.3986 4.2363 18.3688 4.15623C18.3389 4.07615 18.2952 4.0034 18.24 3.94211C18.1849 3.88082 18.1194 3.83221 18.0473 3.79904C17.9752 3.76587 17.898 3.7488 17.82 3.7488H15.1371V4.7707C15.1371 4.97492 15.0641 5.17077 14.9341 5.31517C14.8042 5.45958 14.6279 5.5407 14.4441 5.5407C14.2603 5.5407 14.084 5.45958 13.9541 5.31517C13.8241 5.17077 13.7511 4.97492 13.7511 4.7707V3.7488H6.30927V4.7608C6.30927 4.96502 6.23626 5.16087 6.1063 5.30527C5.97633 5.44968 5.80006 5.5308 5.61627 5.5308C5.43247 5.5308 5.25621 5.44968 5.12624 5.30527C4.99628 5.16087 4.92327 4.96502 4.92327 4.7608V3.7488Z" fill="#00334E"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_446_6446o">
                                <rect width="19.8" height="22" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>26 Aug 2025</a>
                        </div>
                        <div class="vl-service1-top_line">
                          <span>|</span>
                        </div>
                        <div class="vl-service1-box-right_hover">
                            <a href="blog-single.html">Painting Services</a>
                        </div>
                    </div>
                    <div class="space16"></div>
                    <div class="vl-service1-box-info-content">
                        <h2><a href="blog-single.html">Brush Up On Style Painting Tips <br> Trends & Ideas for Every Home</a></h2>
                        <div class="space16"></div>
                        <p>Our experienced painters get work with <br> precision care. We use premium pai</p>
                        <div class="space32"></div>
                        <a class="view_services" href="blog-single.html">View Services<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="service1_bottom_border"></div>
         </div>
         <div class="col-xl-6 col-lg-6" data-aos="fade-left" data-aos-duration="900">
           <div class="vl-service1-box">
                <div class="vl-service1-box-banner">
                   <div class="vl-service1-box-banner-img image-anime reveal">
                     <img src="img/service/service1-banner(2).html" alt="">
                   </div>
                </div>
                <div class="vl-service1-box-info">
                    <div class="vl-service1-box-info-top">
                        <div class="vl-service1-box-date">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                            <g clip-path="url(#clip0_446_6446)">
                              <path d="M5.61627 0C5.80006 0 5.97633 0.0811248 6.1063 0.225528C6.23626 0.369931 6.30927 0.565783 6.30927 0.77V2.2099H13.7511V0.7799C13.7511 0.575683 13.8241 0.379831 13.9541 0.235428C14.084 0.0910248 14.2603 0.0099 14.4441 0.0099C14.6279 0.0099 14.8042 0.0910248 14.9341 0.235428C15.0641 0.379831 15.1371 0.575683 15.1371 0.7799V2.2099H17.82C18.345 2.2099 18.8484 2.44153 19.2197 2.85388C19.591 3.26622 19.7997 3.82551 19.8 4.4088V19.8011C19.7997 20.3844 19.591 20.9437 19.2197 21.356C18.8484 21.7684 18.345 22 17.82 22H1.98C1.45504 22 0.951572 21.7684 0.580278 21.356C0.208985 20.9437 0.000262479 20.3844 0 19.8011L0 4.4088C0.000262479 3.82551 0.208985 3.26622 0.580278 2.85388C0.951572 2.44153 1.45504 2.2099 1.98 2.2099H4.92327V0.7689C4.92353 0.564874 4.99666 0.369304 5.12659 0.225139C5.25653 0.0809736 5.43265 -2.0819e-07 5.61627 0ZM1.386 8.5162V19.8011C1.386 19.8878 1.40136 19.9736 1.43122 20.0537C1.46107 20.1337 1.50482 20.2065 1.55998 20.2678C1.61514 20.3291 1.68062 20.3777 1.75269 20.4109C1.82475 20.444 1.90199 20.4611 1.98 20.4611H17.82C17.898 20.4611 17.9752 20.444 18.0473 20.4109C18.1194 20.3777 18.1849 20.3291 18.24 20.2678C18.2952 20.2065 18.3389 20.1337 18.3688 20.0537C18.3986 19.9736 18.414 19.8878 18.414 19.8011V8.5316L1.386 8.5162ZM6.60033 16.0809V17.9135H4.95V16.0809H6.60033ZM10.7247 16.0809V17.9135H9.07533V16.0809H10.7247ZM14.85 16.0809V17.9135H13.1997V16.0809H14.85ZM6.60033 11.7062V13.5388H4.95V11.7062H6.60033ZM10.7247 11.7062V13.5388H9.07533V11.7062H10.7247ZM14.85 11.7062V13.5388H13.1997V11.7062H14.85ZM4.92327 3.7488H1.98C1.90199 3.7488 1.82475 3.76587 1.75269 3.79904C1.68062 3.83221 1.61514 3.88082 1.55998 3.94211C1.50482 4.0034 1.46107 4.07615 1.43122 4.15623C1.40136 4.2363 1.386 4.32213 1.386 4.4088V6.9773L18.414 6.9927V4.4088C18.414 4.32213 18.3986 4.2363 18.3688 4.15623C18.3389 4.07615 18.2952 4.0034 18.24 3.94211C18.1849 3.88082 18.1194 3.83221 18.0473 3.79904C17.9752 3.76587 17.898 3.7488 17.82 3.7488H15.1371V4.7707C15.1371 4.97492 15.0641 5.17077 14.9341 5.31517C14.8042 5.45958 14.6279 5.5407 14.4441 5.5407C14.2603 5.5407 14.084 5.45958 13.9541 5.31517C13.8241 5.17077 13.7511 4.97492 13.7511 4.7707V3.7488H6.30927V4.7608C6.30927 4.96502 6.23626 5.16087 6.1063 5.30527C5.97633 5.44968 5.80006 5.5308 5.61627 5.5308C5.43247 5.5308 5.25621 5.44968 5.12624 5.30527C4.99628 5.16087 4.92327 4.96502 4.92327 4.7608V3.7488Z" fill="#00334E"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_446_6446b">
                                <rect width="19.8" height="22" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>22 Aug 2025</a>
                        </div>
                        <div class="vl-service1-top_line">
                          <span>|</span>
                        </div>
                        <div class="vl-service1-box-right_hover">
                            <a href="blog-single.html">Painting Services</a>
                        </div>
                    </div>
                    <div class="space16"></div>
                    <div class="vl-service1-box-info-content">
                        <h2><a href="blog-single.html">Your Home. Your Color Story. <br>Explore Expert Advice & Fresh</a></h2>
                        <div class="space16"></div>
                        <p>Our experienced painters get work with <br> precision care. We use premium pai</p>
                        <div class="space32"></div>
                        <a class="view_services" href="blog-single.html">View Services<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="service1_bottom_border"></div>
         </div>
         <div class="col-xl-6 col-lg-6" data-aos="fade-right" data-aos-duration="900">
             <div class="vl-service1-box">
                <div class="vl-service1-box-banner">
                   <div class="vl-service1-box-banner-img image-anime reveal">
                     <img src="img/service/service1-banner(3).html" alt="">
                   </div>
                </div>
                <div class="vl-service1-box-info">
                    <div class="vl-service1-box-info-top">
                        <div class="vl-service1-box-date">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                            <g clip-path="url(#clip0_446_6446)">
                              <path d="M5.61627 0C5.80006 0 5.97633 0.0811248 6.1063 0.225528C6.23626 0.369931 6.30927 0.565783 6.30927 0.77V2.2099H13.7511V0.7799C13.7511 0.575683 13.8241 0.379831 13.9541 0.235428C14.084 0.0910248 14.2603 0.0099 14.4441 0.0099C14.6279 0.0099 14.8042 0.0910248 14.9341 0.235428C15.0641 0.379831 15.1371 0.575683 15.1371 0.7799V2.2099H17.82C18.345 2.2099 18.8484 2.44153 19.2197 2.85388C19.591 3.26622 19.7997 3.82551 19.8 4.4088V19.8011C19.7997 20.3844 19.591 20.9437 19.2197 21.356C18.8484 21.7684 18.345 22 17.82 22H1.98C1.45504 22 0.951572 21.7684 0.580278 21.356C0.208985 20.9437 0.000262479 20.3844 0 19.8011L0 4.4088C0.000262479 3.82551 0.208985 3.26622 0.580278 2.85388C0.951572 2.44153 1.45504 2.2099 1.98 2.2099H4.92327V0.7689C4.92353 0.564874 4.99666 0.369304 5.12659 0.225139C5.25653 0.0809736 5.43265 -2.0819e-07 5.61627 0ZM1.386 8.5162V19.8011C1.386 19.8878 1.40136 19.9736 1.43122 20.0537C1.46107 20.1337 1.50482 20.2065 1.55998 20.2678C1.61514 20.3291 1.68062 20.3777 1.75269 20.4109C1.82475 20.444 1.90199 20.4611 1.98 20.4611H17.82C17.898 20.4611 17.9752 20.444 18.0473 20.4109C18.1194 20.3777 18.1849 20.3291 18.24 20.2678C18.2952 20.2065 18.3389 20.1337 18.3688 20.0537C18.3986 19.9736 18.414 19.8878 18.414 19.8011V8.5316L1.386 8.5162ZM6.60033 16.0809V17.9135H4.95V16.0809H6.60033ZM10.7247 16.0809V17.9135H9.07533V16.0809H10.7247ZM14.85 16.0809V17.9135H13.1997V16.0809H14.85ZM6.60033 11.7062V13.5388H4.95V11.7062H6.60033ZM10.7247 11.7062V13.5388H9.07533V11.7062H10.7247ZM14.85 11.7062V13.5388H13.1997V11.7062H14.85ZM4.92327 3.7488H1.98C1.90199 3.7488 1.82475 3.76587 1.75269 3.79904C1.68062 3.83221 1.61514 3.88082 1.55998 3.94211C1.50482 4.0034 1.46107 4.07615 1.43122 4.15623C1.40136 4.2363 1.386 4.32213 1.386 4.4088V6.9773L18.414 6.9927V4.4088C18.414 4.32213 18.3986 4.2363 18.3688 4.15623C18.3389 4.07615 18.2952 4.0034 18.24 3.94211C18.1849 3.88082 18.1194 3.83221 18.0473 3.79904C17.9752 3.76587 17.898 3.7488 17.82 3.7488H15.1371V4.7707C15.1371 4.97492 15.0641 5.17077 14.9341 5.31517C14.8042 5.45958 14.6279 5.5407 14.4441 5.5407C14.2603 5.5407 14.084 5.45958 13.9541 5.31517C13.8241 5.17077 13.7511 4.97492 13.7511 4.7707V3.7488H6.30927V4.7608C6.30927 4.96502 6.23626 5.16087 6.1063 5.30527C5.97633 5.44968 5.80006 5.5308 5.61627 5.5308C5.43247 5.5308 5.25621 5.44968 5.12624 5.30527C4.99628 5.16087 4.92327 4.96502 4.92327 4.7608V3.7488Z" fill="#00334E"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_446_6446z">
                                <rect width="19.8" height="22" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>20 Aug 2025</a>
                        </div>
                        <div class="vl-service1-top_line">
                          <span>|</span>
                        </div>
                        <div class="vl-service1-box-right_hover">
                            <a href="blog-single.html">Painting Services</a>
                        </div>
                    </div>
                    <div class="space16"></div>
                    <div class="vl-service1-box-info-content">
                        <h2><a href="blog-single.html">Painting Made Simple Pro Tips <br> & Trends for a Beautiful Home</a></h2>
                        <div class="space16"></div>
                        <p>Our experienced painters get work with <br> precision care. We use premium pai</p>
                        <div class="space32"></div>
                        <a class="view_services" href="blog-single.html">View Services<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6" data-aos="fade-left" data-aos-duration="900">
             <div class="vl-service1-box">
                <div class="vl-service1-box-banner">
                   <div class="vl-service1-box-banner-img image-anime reveal">
                     <img src="img/service/service1-banner(4).html" alt="">
                   </div>
                </div>
                <div class="vl-service1-box-info">
                    <div class="vl-service1-box-info-top">
                        <div class="vl-service1-box-date">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 20 22" fill="none">
                            <g clip-path="url(#clip0_446_6446)">
                              <path d="M5.61627 0C5.80006 0 5.97633 0.0811248 6.1063 0.225528C6.23626 0.369931 6.30927 0.565783 6.30927 0.77V2.2099H13.7511V0.7799C13.7511 0.575683 13.8241 0.379831 13.9541 0.235428C14.084 0.0910248 14.2603 0.0099 14.4441 0.0099C14.6279 0.0099 14.8042 0.0910248 14.9341 0.235428C15.0641 0.379831 15.1371 0.575683 15.1371 0.7799V2.2099H17.82C18.345 2.2099 18.8484 2.44153 19.2197 2.85388C19.591 3.26622 19.7997 3.82551 19.8 4.4088V19.8011C19.7997 20.3844 19.591 20.9437 19.2197 21.356C18.8484 21.7684 18.345 22 17.82 22H1.98C1.45504 22 0.951572 21.7684 0.580278 21.356C0.208985 20.9437 0.000262479 20.3844 0 19.8011L0 4.4088C0.000262479 3.82551 0.208985 3.26622 0.580278 2.85388C0.951572 2.44153 1.45504 2.2099 1.98 2.2099H4.92327V0.7689C4.92353 0.564874 4.99666 0.369304 5.12659 0.225139C5.25653 0.0809736 5.43265 -2.0819e-07 5.61627 0ZM1.386 8.5162V19.8011C1.386 19.8878 1.40136 19.9736 1.43122 20.0537C1.46107 20.1337 1.50482 20.2065 1.55998 20.2678C1.61514 20.3291 1.68062 20.3777 1.75269 20.4109C1.82475 20.444 1.90199 20.4611 1.98 20.4611H17.82C17.898 20.4611 17.9752 20.444 18.0473 20.4109C18.1194 20.3777 18.1849 20.3291 18.24 20.2678C18.2952 20.2065 18.3389 20.1337 18.3688 20.0537C18.3986 19.9736 18.414 19.8878 18.414 19.8011V8.5316L1.386 8.5162ZM6.60033 16.0809V17.9135H4.95V16.0809H6.60033ZM10.7247 16.0809V17.9135H9.07533V16.0809H10.7247ZM14.85 16.0809V17.9135H13.1997V16.0809H14.85ZM6.60033 11.7062V13.5388H4.95V11.7062H6.60033ZM10.7247 11.7062V13.5388H9.07533V11.7062H10.7247ZM14.85 11.7062V13.5388H13.1997V11.7062H14.85ZM4.92327 3.7488H1.98C1.90199 3.7488 1.82475 3.76587 1.75269 3.79904C1.68062 3.83221 1.61514 3.88082 1.55998 3.94211C1.50482 4.0034 1.46107 4.07615 1.43122 4.15623C1.40136 4.2363 1.386 4.32213 1.386 4.4088V6.9773L18.414 6.9927V4.4088C18.414 4.32213 18.3986 4.2363 18.3688 4.15623C18.3389 4.07615 18.2952 4.0034 18.24 3.94211C18.1849 3.88082 18.1194 3.83221 18.0473 3.79904C17.9752 3.76587 17.898 3.7488 17.82 3.7488H15.1371V4.7707C15.1371 4.97492 15.0641 5.17077 14.9341 5.31517C14.8042 5.45958 14.6279 5.5407 14.4441 5.5407C14.2603 5.5407 14.084 5.45958 13.9541 5.31517C13.8241 5.17077 13.7511 4.97492 13.7511 4.7707V3.7488H6.30927V4.7608C6.30927 4.96502 6.23626 5.16087 6.1063 5.30527C5.97633 5.44968 5.80006 5.5308 5.61627 5.5308C5.43247 5.5308 5.25621 5.44968 5.12624 5.30527C4.99628 5.16087 4.92327 4.96502 4.92327 4.7608V3.7488Z" fill="#00334E"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_446_6446d">
                                <rect width="19.8" height="22" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>24 Aug 2025</a>
                        </div>
                        <div class="vl-service1-top_line">
                          <span>|</span>
                        </div>
                        <div class="vl-service1-box-right_hover">
                            <a href="blog-single.html">Painting Services</a>
                        </div>
                    </div>
                    <div class="space16"></div>
                    <div class="vl-service1-box-info-content">
                        <h2><a href="blog-single.html">Get Inspired by Color Expert <br> Painting Tips Transform Space</a></h2>
                        <div class="space16"></div>
                        <p>Our experienced painters get work with <br> precision care. We use premium pai</p>
                        <div class="space32"></div>
                        <a class="view_services" href="blog-single.html">View Services<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
         </div>
       </div>
    </div>
    <div class="service1-area-shape">
       <div class="service1-area-shape-img aniamtion-key-2">
          <img src="img/service/service1_shape.html" alt="">
       </div>
    </div>
</div>

@endsection