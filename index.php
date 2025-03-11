<?php

include './server/connection.php';

?>



<!doctype html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain ?>assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <title><?php echo $sitename ?> - Expert Barbering, Haircuts & Beard Styling</title>
    <meta name="description" content="Discover premium grooming at <?php echo $sitename ?>. Specializing in modern haircuts, precision beard trims, and classic shaves. Book your appointment today!">
    <meta name="keywords" content="barber shop, men's grooming, modern haircuts, beard trimming, hot towel shave, Enugu Town barbers, men's haircuts Enugu State">
    <meta property="og:title" content="<?php echo $sitename ?> - Professional Barbering Services">
    <meta property="og:description" content="Premium haircuts, beard trims, and shaves. Book your grooming experience today!">
    <meta property="og:url" content="https://gofinecutz.com.ng/about/">





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
    <header id="sticky-header" class="transparent-header header-style-three">
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a href=""><img style="height: 130px; width: 150px; padding: 0px 0px;" src="<?php echo $domain ?>assets/img/logo.jpg" alt="Logo"></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation">



                                        <li><a href="<?php echo $domain ?>">Home</a></li>
                                        <li><a href="<?php echo $domain ?>about/">About</a></li>
                                        <li><a href="<?php echo $domain ?>portfolio/">Portfolio</a></li>
                                        <li><a href="<?php echo $domain ?>pricing/">Pricing</a></li>

                                    </ul>
                                </div>
                                <div class="header-action d-none d-md-block">
                                <ul class="list-wrap">
                                    <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
                                    <li class="header-btn"><a href="<?php echo $domain ?>user/login.php" class="btn btn-two">Login</a></li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul class="list-wrap">
                                    <!-- <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li> -->
                                    <li class="header-btn"><a href="<?php echo $domain ?>user/register.php" class="btn btn-two">Register</a></li>
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
                                                <a href="tel:<?php echo $sitephone ?>"><?php echo $sitephone ?></a>
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
                                    <a href="index-2.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
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
                <a href="index-2.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p><?php echo $siteaddress ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p><?php echo $sitephone ?></p>
                   
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p><?php echo $siteemail ?></p>
                    
                </div>
            </div>
            <ul class="side-instagram list-wrap">
                <li><a href="#"><img src="assets/img/images/sb_insta01.jpg" alt=""></a></li>
                <li><a href="#"><img src="assets/img/images/sb_insta02.jpg" alt=""></a></li>
                <li><a href="#"><img src="assets/img/images/sb_insta03.jpg" alt=""></a></li>
                <li><a href="#"><img src="assets/img/images/sb_insta04.jpg" alt=""></a></li>
                <li><a href="#"><img src="assets/img/images/sb_insta05.jpg" alt=""></a></li>
                <li><a href="#"><img src="assets/img/images/sb_insta06.jpg" alt=""></a></li>
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
                            <img height="500" src="<?php echo $domain ?>assets/img/work/1.jpg" alt="" class="main-img">


                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="banner-content-three">
                            <h2 class="title" data-aos="fade-right" data-aos-delay="0">Welcome to *Go Fine Cutz</h2>
                            <p data-aos="fade-right" data-aos-delay="300">where style meets precision! Our expert barbers are dedicated to delivering sharp, clean cuts that leave you looking and feeling your best. Whether it’s a classic trim, a modern fade, or a stylish beard sculpting, we ensure top-tier service tailored to your unique look. </p>
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





        <!-- about-area -->
        <section class="about-area-four pb-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-10 order-0 order-lg-2">
                        <div class="about-img-wrap-four">
                            <div class="mask-img-wrap">
                                <img src="<?php echo $domain ?>assets/img/work/1.jpg" alt="">
                            </div>
                            <div class="icon"><i class="flaticon-business-presentation"></i></div>
                            <!-- <img src="<?php echo $domain ?>assets/img/images/h3_about_img02.jpg" alt="" class="img-two"> -->
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
                            <p>We are a team of skilled and passionate barbers dedicated to bringing out the best in every client. Our expertise spans across different hair textures, styles, and trends, ensuring we cater to a diverse clientele with personalized grooming solutions. </p>

                            <p>At *Go Fine Cutz*, we don’t just cut hair—we craft styles that leave lasting impressions. Whether you’re looking for a clean professional look, a trendy fade, or a sharp beard lineup, our team delivers with precision and artistry. </p>

                            <p>Our dedication to quality service and client satisfaction has made us a trusted name in the barbering industry. We take pride in our craft and in the relationships we build with our customers, ensuring they always leave with a look they love. </p>

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
                                <img src="<?php echo $domain ?>assets/img/work/3.jpg" alt="">
                            </div>

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
                                <h2 class="title tg-element-title">Our Mission</h2>
                            </div>
                            <p>Our mission at *Go Fine Cutz* is to redefine the art of grooming by offering top-quality haircuts, beard trims, and styling services tailored to every individual. We believe that a great haircut is more than just aesthetics—it’s about boosting confidence and making a lasting impression. </p>

                            <p>We strive to create an environment where every client feels valued, comfortable, and satisfied with their look. Our team is committed to continuous learning, ensuring we stay ahead of the latest trends and techniques in men’s grooming. Excellence is at the heart of everything we do.</p>

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

                </div>
            </div>
            <div class="container custom-container-three">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="project-item-three">
                            <div class="project-thumb-three">
                                <a href=""><img style="height: 500px !important;" src="<?php echo $domain ?>assets/img/work/3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="project-item-three">
                            <div style="" class="project-thumb-three">
                                <a href=""><img style="height: 500px !important;" src="<?php echo $domain ?>assets/img/work/14.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="project-item-three">
                            <div class="project-thumb-three">
                                <a href=""><img style="height: 500px !important;" src="<?php echo $domain ?>assets/img/work/7.jpeg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="project-item-three">
                            <div class="project-thumb-three">
                                <a href=""><img style="height: 500px !important;" src="<?php echo $domain ?>assets/img/work/5.jpeg" alt=""></a>
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
                                <h2 class="count"><span class="odometer" data-count="98"></span>%</h2>
                                <p>Customer Satisfaction</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item-two">
                                <h2 class="count"><span class="odometer" data-count="30"></span>k</h2>
                                <p>Haircuts Delivered</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item-two">
                                <h2 class="count"><span class="odometer" data-count="246"></span></h2>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="counter-item-two">
                                <h2 class="count"><span class="odometer" data-count="5"></span>+</h2>
                                <p>Years of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- counter-area-end -->



        <!-- testimonial-area -->
        <section class="testimonial-area-three">
            <div class="container">
                <div class="row g-0 align-items-end">
                    <div class="col-37">
                        <div class="testimonial-img-three">
                            <img src="<?php echo $domain ?>assets/img/work/12.jpg" alt="">
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
                                        <p>“ <?php echo $sitename ?>s is hands down the best barbershop I’ve ever been to. The barbers are skilled, professional, and really take the time to perfect every cut. I always leave feeling fresh and confident!</p>
                                        <div class="testimonial-info">
                                            <h2 class="title">Eze Micheal</h2>
                                            <span>Student Of ESUT</span>
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
                                        <p>“ I love the atmosphere at <?php echo $sitename ?>s. The team is friendly, and the service is top-notch. Whether I’m getting a fade or a beard trim, I know I’m in good hands!</p>
                                        <div class="testimonial-info">
                                            <h2 class="title">Daniel K.</h2>
                                            <span>Student Of ESUT</span>
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
                                        <p>“ If you’re looking for a barbershop that understands style, look no further! I’ve been coming here for years, and they never disappoint. Highly recommend!</p>
                                        <div class="testimonial-info">
                                            <h2 class="title">Joy E.</h2>
                                            <span>Student Of ESUT</span>
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
                                        <a href="tel:0123456789"><?php echo $sitephone ?></a>
                                    </div>
                                </div>
                                <h2 class="title">Let’s Request a Schedule For Free Consultation</h2>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <!-- <div class="cta-btn text-end">
                                <a href="<?php echo $domain ?>contact" class="btn btn-three">Contact Us</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-area-end -->



    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <?php include './include/footer.php' ?>
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