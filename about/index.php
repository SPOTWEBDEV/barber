<?php

include('../server/connection.php');

?>

<!doctype html>
<html class="no-js" lang="en">
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
        <div id="header-fixed-height"></div>
        <header class="header-style-six">
            <div class="heder-top-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="header-top-left">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-location"></i>256 Avenue, Mark Street, Newyork City</li>
                                    <li><i class="flaticon-mail"></i><a href="mailto:gerow@gmail.com">gerow@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="header-top-right">
                                <div class="header-contact">
                                    <a href="tel:0123456789"><i class="flaticon-phone-call"></i>+123 8989 444</a>
                                </div>
                                <div class="header-social">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="menu-area">
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
                                            <li class="menu-item-has-children"><a href="#">Home</a>
                                                <ul class="sub-menu mega-menu">
                                                    <li>
                                                        <ul class="mega-sub-menu">
                                                            <li><a href="index.html">Finance</a></li>
                                                            <li><a href="index-2.html">Consulting</a></li>
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
                                            <li class="active menu-item-has-children"><a href="#">About Us</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">About Finance</a></li>
                                                    <li class="active"><a href="about-2.html">About Consulting</a></li>
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
                                    <div class="header-action d-none d-md-block">
                                        <ul class="list-wrap">
                                            <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
                                            <li class="header-btn"><a href="contact.html" class="btn btn-two">Get a Quote</a></li>
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

        </header>
        <!-- header-area-end -->


        <!-- main-area -->
        <main class="fix">

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo $domain ?>assets/img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">About us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape-wrap">
                    <img src="<?php echo $domain ?>assets/img/images/breadcrumb_shape01.png" alt="">
                    <img src="<?php echo $domain ?>assets/img/images/breadcrumb_shape02.png" alt="">
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- about-area -->
            <section class="about-area-eight pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-9">
                            <div class="about-img-eight">
                                <img src="<?php echo $domain ?>assets/img/images/inner_about_img03.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content-eight">
                                <div class="section-title-two mb-30">
                                    <span class="sub-title">Get To Know More</span>
                                    <h2 class="title">We Have More Than 20+ Years Of Practical Finance Industries</h2>
                                </div>
                                <p>At *Elite Cuts*, we believe that a great haircut is more than just a style—it’s a statement. That’s why we pay close attention to detail, ensuring every cut complements your personality and enhances your confidence. Our barbers stay up-to-date with the latest trends to provide a fresh, stylish experience every time. </p>
                                <div class="about-content-inner">
                                    <ul class="list-wrap">
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-business-presentation"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Growing Business</h4>
                                                <p>Finance helps you to convert into a strategic asset get.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="flaticon-investment"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Finance Investment</h4>
                                                <p>Finance helps you to convert into a strategic asset get.</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="right-slide-img">
                                        <img src="<?php echo $domain ?>assets/img/images/inner_about_img04.jpg" alt="">
                                    </div>
                                </div>
                                <div class="about-content-bottom">
                                    <div class="services-btn">
                                        <a href="services.html" class="btn">Our Services</a>
                                    </div>
                                    <div class="about-author-info">
                                        <div class="thumb">
                                            <img src="<?php echo $domain ?>assets/img/images/about_author.png" alt="">
                                        </div>
                                        <div class="content">
                                            <h2 class="title">Mark Stranger</h2>
                                            <span>CEO, Gerow Finance</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- choose-area -->
            <section class="choose-area-three">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="choose-content-three">
                                <div class="section-title-two white-title mb-30">
                                    <span class="sub-title">What Specialty</span>
                                    <h2 class="title">Keep Your Business Safe & Ensure High Availability.</h2>
                                </div>
                                <p>Ever find yourself staring at your computer s good consulting slogan to come to mind? Oftentimes.</p>
                                <div class="accordion-wrap-two">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Interdum et malesuada fames ac ante ipsum
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Ever find yourself staring at your computer screen a good consulting slogan to coind yourself sta your computer screen a good consulting slogan.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Interdum et malesuada ante ipsum
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Ever find yourself staring at your computer screen a good consulting slogan to coind yourself sta your computer screen a good consulting slogan.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Ente ipsumerdum et malesuada fames
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Ever find yourself staring at your computer screen a good consulting slogan to coind yourself sta your computer screen a good consulting slogan.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="choose-img-three">
                                <img src="<?php echo $domain ?>assets/img/images/inner_choose_img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- choose-area-end -->




        

        


        </main>
        <!-- main-area-end -->


        <!-- footer-area -->

        <?php include('../include/footer.php')  ?>
       
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

<!-- Mirrored from themedox.com/demo/gerow/about-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 22:56:31 GMT -->
</html>
