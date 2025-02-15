<?php

include('./server/connection.php');

?>



<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from themedox.com/demo/gerow/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 22:55:01 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gerow - Business Consulting HTML Template</title>
        <meta name="description" content="Gerow - Business Consulting HTML Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/flaticon.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/odometer.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/jarallax.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/aos.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/default.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo $domain ?>assets/css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div class="loader">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header  id="sticky-header" class="transparent-header header-style-three">
            <div class="menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="logo">
                                        <a href="index.html"><img src="<?php echo $domain ?>assets/img/logo/logo.png" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="#">Home</a>
                                                <ul class="sub-menu mega-menu">
                                                    <li>
                                                        <ul class="mega-sub-menu">
                                                            <li><a href="index.html">Finance</a></li>
                                                            <li class="active"><a href="index-2.html">Consulting</a></li>
                                                            <li><a href="index-3.html">Insurance</a></li>
                                                            <li><a href="index-4.html">Digital Agency</a></li>
                                                            <li><a href="index-5.html">Business</a></li>
                                                            <li><a href="index-6.html">Business Strategy <span class="badge">New</span></a></li>
                                                            <li><a href="index-7.html">Personal Advisory <span class="badge">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="mega-sub-menu">
                                                            <li><a href="index-8.html">It Company <span class="badge">New</span></a></li>
                                                            <li><a href="index-9.html">Business Consulting <span class="badge">New</span></a></li>
                                                            <li><a href="index-10.html">Start Up Agency <span class="badge">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">About Us</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">About Finance</a></li>
                                                    <li><a href="about-2.html">About Consulting</a></li>
                                                    <li><a href="about-3.html">About Insurance</a></li>
                                                    <li><a href="about-4.html">About Digital Agency</a></li>
                                                    <li><a href="about-5.html">About Business</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item-has-children"><a href="services.html">Services</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="services.html">Finance Services</a></li>
                                                            <li><a href="services-2.html">Consulting Services</a></li>
                                                            <li><a href="services-3.html">Insurance Services</a></li>
                                                            <li><a href="services-4.html">Agency Services</a></li>
                                                            <li><a href="services-5.html">Business Services</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children"><a href="services-details.html">Services Details</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="services-details.html">Services Details One</a></li>
                                                            <li><a href="services-details-2.html">Services Details Two</a></li>
                                                            <li><a href="services-details-3.html">Services Details Three</a></li>
                                                            <li><a href="services-details-4.html">Services Details Four</a></li>
                                                            <li><a href="services-details-5.html">Services Details Five</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="project-details.html">Portfolio Details</a></li>
                                                    <li><a href="team-details.html">Team Details</a></li>
                                                    <li><a href="error.html">404 Error</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contacts</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action">
                                        <ul class="list-wrap">
                                            <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
                                            <li class="offcanvas-menu offcanvas-menu-two">
                                                <a href="#" class="menu-tigger">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </a>
                                            </li>
                                            <li class="header-contact-two">
                                                <div class="icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </div>
                                                <div class="content">
                                                    <span>Hot Line Number</span>
                                                    <a href="tel:0123456789">+123 8989 444</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo">
                                        <a href="index.html"><img src="<?php echo $domain ?>assets/img/logo/logo.png" alt="Logo"></a>
                                    </div>
                                    <div class="mobile-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search here...">
                                            <button><i class="flaticon-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- header-search -->
            <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="search-close">
                    <span><i class="fas fa-times"></i></span>
                </div>
                <div class="search-wrap text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="title">... Search Here ...</h2>
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Type keywords here">
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-end -->

            <!-- offCanvas-menu -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button><i class="far fa-window-close"></i></button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index.html"><img src="<?php echo $domain ?>assets/img/logo/logo.png" alt="Logo"></a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli <br> Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                        <p>example.mail@hum.com</p>
                    </div>
                </div>
                <ul class="side-instagram list-wrap">
                    <li><a href="#"><img src="<?php echo $domain ?>assets/img/images/sb_insta01.jpg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo $domain ?>assets/img/images/sb_insta02.jpg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo $domain ?>assets/img/images/sb_insta03.jpg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo $domain ?>assets/img/images/sb_insta04.jpg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo $domain ?>assets/img/images/sb_insta05.jpg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo $domain ?>assets/img/images/sb_insta06.jpg" alt=""></a></li>
                </ul>
                <div class="social-icon-right mt-30">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offCanvas-menu-end -->

        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main class="fix">

            <!-- banner-area -->
            <section class="banner-area-three">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-9 order-0 order-lg-2">
                            <div class="banner-img-three" data-aos="fade-left" data-aos-delay="300">
                                <img src="<?php echo $domain ?>assets/img/banner/h3_banner_img01.jpg" alt="" class="main-img">
                                <img src="<?php echo $domain ?>assets/img/banner/h3_banner_img02.jpg" alt="" class="img-two" data-parallax='{"y" : 100 }'>
                                <img src="<?php echo $domain ?>assets/img/banner/h3_banner_img03.jpg" alt="" class="img-three" data-parallax='{"x" : -100 }'>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="banner-content-three">
                                <h2 class="title" data-aos="fade-right" data-aos-delay="0">Need Business Consultation Today</h2>
                                <p data-aos="fade-right" data-aos-delay="300">Agilos helps you to convert your data into a strategic asset and get top-notch business insights.</p>
                                <form action="#" class="banner-form" data-aos="fade-right" data-aos-delay="600">
                                    <input type="text" placeholder="E-mail Address">
                                    <button type="submit"><i class="flaticon-right-arrow"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape-wrap-three">
                    <img src="<?php echo $domain ?>assets/img/banner/h3_banner_shape01.png" alt="">
                    <img src="<?php echo $domain ?>assets/img/banner/h3_banner_shape02.png" alt="">
                </div>
            </section>
            <!-- banner-area-end -->

            <!-- brand-area -->
            <section class="brand-aera-two">
                <div class="container">
                    <div class="brand-item-wrap">
                        <h6 class="title">Trusted by 10,000+ companies around the world</h6>
                        <div class="row brand-active">
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="<?php echo $domain ?>assets/img/brand/brand_img01.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="<?php echo $domain ?>assets/img/brand/brand_img02.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="<?php echo $domain ?>assets/img/brand/brand_img03.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="<?php echo $domain ?>assets/img/brand/brand_img04.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="<?php echo $domain ?>assets/img/brand/brand_img05.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="brand-item">
                                    <img src="<?php echo $domain ?>assets/img/brand/brand_img03.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- brand-area-end -->

            <!-- features-area -->
            <section class="features-area-three">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7">
                            <div class="section-title-two text-center mb-40 tg-heading-subheading animation-style1">
                                <span class="sub-title tg-element-title">What We Do For You</span>
                                <h2 class="title tg-element-title">The features that make our Service unique</h2>
                            </div>
                        </div>
                    </div>
                    <div class="features-item-wrap-two">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="features-item-three">
                                    <div class="features-icon-three">
                                        <i class="flaticon-inspiration"></i>
                                    </div>
                                    <div class="features-content-three">
                                        <h2 class="title">Finance Planning</h2>
                                        <p>Morem ipsum dolor sittemet consectetur adipiscing elitflorai psum dolor.</p>
                                        <a href="services-details.html" class="link-btn">See Details <img src="<?php echo $domain ?>assets/img/icons/right-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="features-item-three">
                                    <div class="features-icon-three">
                                        <i class="flaticon-layers"></i>
                                    </div>
                                    <div class="features-content-three">
                                        <h2 class="title">Business Consulting</h2>
                                        <p>Morem ipsum dolor sittemet consectetur adipiscing elitflorai psum dolor.</p>
                                        <a href="services-details.html" class="link-btn">See Details <img src="<?php echo $domain ?>assets/img/icons/right-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="features-item-three">
                                    <div class="features-icon-three">
                                        <i class="flaticon-calculator"></i>
                                    </div>
                                    <div class="features-content-three">
                                        <h2 class="title">Tax Advisory</h2>
                                        <p>Morem ipsum dolor sittemet consectetur adipiscing elitflorai psum dolor.</p>
                                        <a href="services-details.html" class="link-btn">See Details <img src="<?php echo $domain ?>assets/img/icons/right-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="features-item-three">
                                    <div class="features-icon-three">
                                        <i class="flaticon-investment"></i>
                                    </div>
                                    <div class="features-content-three">
                                        <h2 class="title">Business Audit</h2>
                                        <p>Morem ipsum dolor sittemet consectetur adipiscing elitflorai psum dolor.</p>
                                        <a href="services-details.html" class="link-btn">See Details <img src="<?php echo $domain ?>assets/img/icons/right-arrow.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->

            <!-- about-area -->
            <section class="about-area-four pb-120">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-7 col-md-10 order-0 order-lg-2">
                            <div class="about-img-wrap-four">
                                <div class="mask-img-wrap">
                                    <img src="<?php echo $domain ?>assets/img/images/h3_about_img01.jpg" alt="">
                                </div>
                                <div class="icon"><i class="flaticon-business-presentation"></i></div>
                                <img src="<?php echo $domain ?>assets/img/images/h3_about_img02.jpg" alt="" class="img-two">
                                <div class="about-shape-wrap-three">
                                    <img src="<?php echo $domain ?>assets/img/images/h3_about_shape01.png" alt="">
                                    <img src="<?php echo $domain ?>assets/img/images/h3_about_shape02.png" alt="">
                                    <img src="<?php echo $domain ?>assets/img/images/h3_about_shape03.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-content-four">
                                <div class="section-title-two mb-30 tg-heading-subheading animation-style1">
                                    <span class="sub-title tg-element-title">Get To know US</span>
                                    <h2 class="title tg-element-title">We are the next gen Business experience</h2>
                                </div>
                                <p>With over 25 years of experience, we have crafted thousands of Strategic discovery process that enables us to peel back which enable us to understand.</p>
                                <div class="about-list-three">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-profit"></i>
                                            </div>
                                            <div class="content">
                                                <h2 class="title">Business Growth</h2>
                                                <p>eiusmod temporincididunt ut labore magna aliqua Quisery.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-mission"></i>
                                            </div>
                                            <div class="content">
                                                <h2 class="title">Target Audience</h2>
                                                <p>eiusmod temporincididunt ut labore magna aliqua Quisery.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- overview-area -->
            <section class="overview-area-two">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="overview-img-two">
                                <div class="mask-img-two">
                                    <img src="<?php echo $domain ?>assets/img/images/h3_overview_img01.jpg" alt="">
                                </div>
                                <img src="<?php echo $domain ?>assets/img/images/h3_overview_img02.jpg" alt="" class="img-two" data-parallax='{"y" : 100 }'>
                                <div class="overview-shape-wrap">
                                    <img src="<?php echo $domain ?>assets/img/images/h3_overview_shape01.png" alt="">
                                    <img src="<?php echo $domain ?>assets/img/images/h3_overview_shape02.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="overview-content-two">
                                <div class="section-title-two mb-30 tg-heading-subheading animation-style1">
                                    <span class="sub-title tg-element-title">Company Overview</span>
                                    <h2 class="title tg-element-title">We Prepare An Effective Strategy For Companies</h2>
                                </div>
                                <p>Morem ipsum dolor sit amet, consectetur adipiscing elita florai psum dolor sit amet, consecteture.</p>
                                <div class="progress-wrap">
                                    <div class="progress-item">
                                        <h6 class="title">Consulting</h6>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="85" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay=".1s" style="width: 85%"><span>85%</span></div>
                                        </div>
                                    </div>
                                    <div class="progress-item">
                                        <h6 class="title">Investment</h6>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="76" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay=".2s" style="width: 76%"><span>76%</span></div>
                                        </div>
                                    </div>
                                    <div class="progress-item">
                                        <h6 class="title">Investment</h6>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay=".3s" style="width: 90%"><span>90%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- overview-area-end -->

            <!-- project-area -->
            <section class="project-area-three pb-90">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-8">
                            <div class="section-title-two mb-40 tg-heading-subheading animation-style1">
                                <span class="sub-title tg-element-title">Complete Projects</span>
                                <h2 class="title tg-element-title">A Complete Solution For Global Business</h2>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-4">
                            <div class="view-all-btn text-end mb-30">
                                <a href="project-details.html" class="btn btn-three">See All Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container custom-container-three">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="project-item-three">
                                <div class="project-thumb-three">
                                    <a href="project-details.html"><img src="<?php echo $domain ?>assets/img/project/h3_project_img01.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="project-item-three">
                                <div class="project-thumb-three">
                                    <a href="project-details.html"><img src="<?php echo $domain ?>assets/img/project/h3_project_img02.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="project-item-three">
                                <div class="project-thumb-three">
                                    <a href="project-details.html"><img src="<?php echo $domain ?>assets/img/project/h3_project_img03.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="project-item-three">
                                <div class="project-thumb-three">
                                    <a href="project-details.html"><img src="<?php echo $domain ?>assets/img/project/h3_project_img04.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- project-area-end -->

            <!-- counter-area -->
            <section class="counter-area-two">
                <div class="container">
                    <div class="counter-item-wrap">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="counter-item-two">
                                    <h2 class="count"><span class="odometer" data-count="95"></span>%</h2>
                                    <p>Success Rate</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="counter-item-two">
                                    <h2 class="count"><span class="odometer" data-count="55"></span>k</h2>
                                    <p>Complete Projects</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="counter-item-two">
                                    <h2 class="count"><span class="odometer" data-count="25"></span>k</h2>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="counter-item-two">
                                    <h2 class="count"><span class="odometer" data-count="15"></span>k</h2>
                                    <p>Trade In The World</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- counter-area-end -->

            <!-- team-area -->
            <section class="team-area-three">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style1">
                                <span class="sub-title tg-element-title">Expert People</span>
                                <h2 class="title tg-element-title">Dedicated Team Members</h2>
                                <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="team-item-three">
                                <div class="team-thumb-three">
                                    <img src="<?php echo $domain ?>assets/img/team/h3_team_img01.png" alt="">
                                    <div class="team-social-three">
                                        <div class="social-toggle-icon">
                                            <i class="fas fa-share-alt"></i>
                                        </div>
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content-three">
                                    <h4 class="title"><a href="team-details.html">Brooklyn Simmons</a></h4>
                                    <span>Finance Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="team-item-three">
                                <div class="team-thumb-three">
                                    <img src="<?php echo $domain ?>assets/img/team/h3_team_img02.png" alt="">
                                    <div class="team-social-three">
                                        <div class="social-toggle-icon">
                                            <i class="fas fa-share-alt"></i>
                                        </div>
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content-three">
                                    <h4 class="title"><a href="team-details.html">Jenny Wilson</a></h4>
                                    <span>Finance Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="team-item-three">
                                <div class="team-thumb-three">
                                    <img src="<?php echo $domain ?>assets/img/team/h3_team_img03.png" alt="">
                                    <div class="team-social-three">
                                        <div class="social-toggle-icon">
                                            <i class="fas fa-share-alt"></i>
                                        </div>
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content-three">
                                    <h4 class="title"><a href="team-details.html">Ronald Richards</a></h4>
                                    <span>Finance Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="team-item-three">
                                <div class="team-thumb-three">
                                    <img src="<?php echo $domain ?>assets/img/team/h3_team_img04.png" alt="">
                                    <div class="team-social-three">
                                        <div class="social-toggle-icon">
                                            <i class="fas fa-share-alt"></i>
                                        </div>
                                        <ul class="list-wrap">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content-three">
                                    <h4 class="title"><a href="team-details.html">Marvin McKinney</a></h4>
                                    <span>Finance Advisor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- team-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area-three">
                <div class="container">
                    <div class="row g-0 align-items-end">
                        <div class="col-37">
                            <div class="testimonial-img-three">
                                <img src="<?php echo $domain ?>assets/img/images/h3_testimonial_img.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-63">
                            <div class="testimonial-item-wrap-three" data-background="<?php echo $domain ?>assets/img/bg/h3_testimonial_bg.png">
                                <div class="testimonial-active-three">
                                    <div class="testimonial-item-three">
                                        <div class="testimonial-content-three">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing elita Moremsit amet.</p>
                                            <div class="testimonial-info">
                                                <h2 class="title">Mr.Robey Alexa</h2>
                                                <span>CEO, Gerow Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-item-three">
                                        <div class="testimonial-content-three">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing elita Moremsit amet.</p>
                                            <div class="testimonial-info">
                                                <h2 class="title">Mr.Robey Alexa</h2>
                                                <span>CEO, Gerow Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-nav-three"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- cta-area -->
            <section class="cta-area-two pt-120">
                <div class="container">
                    <div class="cta-inner-wrap-two" data-background="<?php echo $domain ?>assets/img/bg/cta_bg02.jpg">
                        <div class="row align-items-center">
                            <div class="col-lg-9">
                                <div class="cta-content">
                                    <div class="cta-info-wrap">
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="content">
                                            <span>Call For More Info</span>
                                            <a href="tel:0123456789">+123 8989 444</a>
                                        </div>
                                    </div>
                                    <h2 class="title">Let’s Request a Schedule For Free Consultation</h2>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="cta-btn text-end">
                                    <a href="contact.html" class="btn btn-three">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- cta-area-end -->

            <!-- blog-area -->
            <section class="blog-area-three pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style1">
                                <span class="sub-title tg-element-title">News & Blogs</span>
                                <h2 class="title tg-element-title">Read Our Latest Updates</h2>
                                <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="blog-post-item-two">
                                <div class="blog-post-thumb-two">
                                    <a href="blog-details.html"><img src="<?php echo $domain ?>assets/img/blog/h3_blog_img01.jpg" alt=""></a>
                                    <a href="blog.html" class="tag tag-two">Development</a>
                                </div>
                                <div class="blog-post-content-two">
                                    <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                                    <p>Everything you need to start building area atching presence for your business.</p>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>
                                                <a href="blog-details.html"><img src="<?php echo $domain ?>assets/img/blog/blog_avatar01.png" alt="">Kat Doven</a>
                                            </li>
                                            <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="blog-post-item-two">
                                <div class="blog-post-thumb-two">
                                    <a href="blog-details.html"><img src="<?php echo $domain ?>assets/img/blog/h3_blog_img02.jpg" alt=""></a>
                                    <a href="blog.html" class="tag tag-two">Business</a>
                                </div>
                                <div class="blog-post-content-two">
                                    <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                                    <p>Everything you need to start building area atching presence for your business.</p>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>
                                                <a href="blog-details.html"><img src="<?php echo $domain ?>assets/img/blog/blog_avatar01.png" alt="">Kat Doven</a>
                                            </li>
                                            <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="blog-post-item-two">
                                <div class="blog-post-thumb-two">
                                    <a href="blog-details.html"><img src="<?php echo $domain ?>assets/img/blog/h3_blog_img03.jpg" alt=""></a>
                                    <a href="blog.html" class="tag tag-two">Tax Advisory</a>
                                </div>
                                <div class="blog-post-content-two">
                                    <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                                    <p>Everything you need to start building area atching presence for your business.</p>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li>
                                                <a href="blog-details.html"><img src="<?php echo $domain ?>assets/img/blog/blog_avatar01.png" alt="">Kat Doven</a>
                                            </li>
                                            <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer>
            <div class="footer-area-three">
                <div class="footer-top-three">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-7">
                                <div class="footer-widget">
                                    <div class="fw-logo">
                                        <a href="index.html"><img src="<?php echo $domain ?>assets/img/logo/w_logo.png" alt=""></a>
                                    </div>
                                    <div class="footer-content">
                                        <p>When an unknown printer took a galley of type aawer awtnd scrambled it to make a type specimen book.</p>
                                        <div class="footer-social footer-social-three">
                                            <ul class="list-wrap">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-5 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Menu</h4>
                                    <div class="footer-link">
                                        <ul class="list-wrap">
                                            <li><a href="about.html">Company</a></li>
                                            <li><a href="contact.html">Careers</a></li>
                                            <li><a href="contact.html">Press media</a></li>
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="contact.html">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-5 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Quick Links</h4>
                                    <div class="footer-link">
                                        <ul class="list-wrap">
                                            <li><a href="contact.html">How it’s Work</a></li>
                                            <li><a href="contact.html">Partners</a></li>
                                            <li><a href="contact.html">Testimonials</a></li>
                                            <li><a href="contact.html">Case Studies</a></li>
                                            <li><a href="contact.html">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-7">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Contact</h4>
                                    <div class="footer-info">
                                        <ul class="list-wrap">
                                            <li>
                                                <div class="icon">
                                                    <i class="flaticon-pin"></i>
                                                </div>
                                                <div class="content">
                                                    <p>58 Street Commercial Road Fratton, Australia</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </div>
                                                <div class="content">
                                                    <a href="tel:0123456789">+123 888 9999</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="flaticon-clock"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Mon – Sat: 8 am – 5 pm, <br> Sunday: <span>CLOSED</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-three">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="copyright-text-two text-center">
                                    <p>Copyright © gerow | All Right Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->


        <!-- JS here -->
        <script src="<?php echo $domain ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/jquery.odometer.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/jquery.appear.js"></script>
        <script src="<?php echo $domain ?>assets/js/gsap.js"></script>
        <script src="<?php echo $domain ?>assets/js/ScrollTrigger.js"></script>
        <script src="<?php echo $domain ?>assets/js/SplitText.js"></script>
        <script src="<?php echo $domain ?>assets/js/gsap-animation.js"></script>
        <script src="<?php echo $domain ?>assets/js/jarallax.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/jquery.parallaxScroll.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/particles.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/jquery.inview.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/swiper-bundle.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/slick.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/ajax-form.js"></script>
        <script src="<?php echo $domain ?>assets/js/aos.js"></script>
        <script src="<?php echo $domain ?>assets/js/wow.min.js"></script>
        <script src="<?php echo $domain ?>assets/js/main.js"></script>
    </body>

<!-- Mirrored from themedox.com/demo/gerow/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 22:55:10 GMT -->
</html>

