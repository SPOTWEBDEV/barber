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
                                        <li class="menu-item-has-children"><a href="#">About Us</a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">About Finance</a></li>
                                                <li><a href="about-2.html">About Consulting</a></li>
                                                <li><a href="about-3.html">About Insurance</a></li>
                                                <li><a href="about-4.html">About Digital Agency</a></li>
                                                <li><a href="about-5.html">About Business</a></li>
                                            </ul>
                                        </li>
                                        <li class="active menu-item-has-children"><a href="#">Pages</a>
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
                                                <li class="active"><a href="team-details.html">Team Details</a></li>
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
                            <h2 class="title">Portfolio</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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

        <!-- team-details-area -->
        <section class="team-details-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="team-details-info-wrap">
                            <div class="team-details-thumb">
                                <img src="<?php echo $domain ?>assets/img/me.jpg" alt="">
                            </div>
                            <div class="team-details-info">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-phone-call"></i>+123 8989 444</li>
                                    <li><i class="flaticon-mail"></i>info@gmail.com</li>
                                    <li><i class="flaticon-location"></i>256 Avenue, Mark Street, Newyork City</li>
                                </ul>
                                <div class="td-info-bottom">
                                    <a href="#" class="btn btn-three">Contact With Me</a>
                                    <a href="#" class="share-btn"><img src="<?php echo $domain ?>assets/img/icons/share.svg" alt="">Share</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="team-details-content">
                            <h2 class="title">Leslie Alexander</h2>
                            <span>Finance Advisor</span>
                            <p>estibulum ac diam sit amet quam vehicula elementum sed sit amet dui Sed porttitor lect us nibh. Praesent sapien massa, convallis a pellentesquam vehiculaestibulum ac diam sit amet quam vehicula elementumsit amet dui Sed porttitor lectus nibPraesent sapien massa convallis a pellentese nec diam sit amet quam vehicula.</p>
                            <div class="team-skill-wrap">
                                <h3 class="title-two">My Expertise & Skills</h3>
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries</p>
                                <div class="progress-wrap">
                                    <div class="progress-item">
                                        <h6 class="title">Finance Consultancy</h6>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay=".1s" style="width: 65%"><span>65%</span></div>
                                        </div>
                                    </div>
                                    <div class="progress-item">
                                        <h6 class="title">Business</h6>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay=".2s" style="width: 80%"><span>80%</span></div>
                                        </div>
                                    </div>
                                    <div class="progress-item">
                                        <h6 class="title">Marketing</h6>
                                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar wow slideInLeft" data-wow-delay=".3s" style="width: 90%"><span>90%</span></div>
                                        </div>
                                    </div>
                                </div>
                                <p>estibulum ac diam sit amet quam vehicula elementum sed sit amet dui Sed porttitor lect us nibh. Praesent sapien massa, convallis a pellentesquam vehiculaestibulum ac diam sit amet quam vehicula elementumsit amet dui Sed porttitor lectus nibPraesent sapien massa convallis a pellentese nec diam sit amet quam vehicula.</p>
                                <div class="col-12">
                                    <div class="counter-item-wrap-four">
                                        <ul class="list-wrap">
                                            <li>
                                                <div class="counter-item-three">
                                                    <div class="counter-icon">
                                                        <i class="flaticon-trophy"></i>
                                                    </div>
                                                    <div class="counter-content">
                                                        <h2 class="count"><span class="odometer" data-count="23"></span>k</h2>
                                                        <p>Best Awards</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter-item-three">
                                                    <div class="counter-icon">
                                                        <i class="flaticon-rating"></i>
                                                    </div>
                                                    <div class="counter-content">
                                                        <h2 class="count"><span class="odometer" data-count="223"></span>k</h2>
                                                        <p>Happy Clients</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter-item-three">
                                                    <div class="counter-icon">
                                                        <i class="flaticon-folder-1"></i>
                                                    </div>
                                                    <div class="counter-content">
                                                        <h2 class="count"><span class="odometer" data-count="98"></span>k</h2>
                                                        <p>Projects Done</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter-item-three">
                                                    <div class="counter-icon">
                                                        <i class="flaticon-round-table"></i>
                                                    </div>
                                                    <div class="counter-content">
                                                        <h2 class="count"><span class="odometer" data-count="22"></span>k</h2>
                                                        <p>Expert People</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-details-area-end -->


    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <footer>
        <div class="footer-area footer-bg" data-background="<?php echo $domain ?>assets/img/bg/footer_bg.jpg">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-3 col-md-7">
                            <div class="footer-widget">
                                <h4 class="fw-title">Information</h4>
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
                        <div class="col-lg-4 col-md-7">
                            <div class="footer-widget">
                                <h4 class="fw-title">Subscribe to Our Newsletter</h4>
                                <div class="footer-newsletter">
                                    <p>Sign up to Privitar’s weekly newsletter to get the latest updates.</p>
                                    <form action="#">
                                        <input type="email" placeholder="enter your e-mail">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                    <span>We don’t send you any spam</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="left-sider">
                                <div class="f-logo">
                                    <a href="index.html"><img src="<?php echo $domain ?>assets/img/logo/w_logo.png" alt=""></a>
                                </div>
                                <div class="copyright-text">
                                    <p>Copyright © gerow | All Right Reserved</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-social">
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

<!-- Mirrored from themedox.com/demo/gerow/team-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 22:56:42 GMT -->

</html>