<?php

include '../server/connection.php';

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $sitename ?></title>
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

    <?php include '../include/navbar.php' ?>


    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo $domain ?>assets/img/work/13.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Our Price</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
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




        <!-- pricing-area -->
        <section class="pricing-area-three">
            <div class="pricing-shape">
                <img src="<?php echo $domain ?>assets/img/images/pricing_shape.png" alt="" data-aos="fade-left" data-aos-delay="200">
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title-two mb-50">
                            <span class="sub-title">Affordable Barber Services</span>
                            <h2 class="title">Get the Best <br> Grooming at the Right Price</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="section-top-content mb-30">
                            <p>Enjoy professional barber services at unbeatable prices. Choose a plan that fits your style and budget.</p>
                        </div>
                    </div>
                </div>

                <div class="pricing-item-wrap">

                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="pricing-box-three">
                                <div class="pricing-icon">
                                    <i class="flaticon-scissors"></i>
                                </div>
                                <div class="pricing-plan">
                                    <h4 class="title">Basic Haircut</h4>
                                </div>
                                <div class="pricing-price-two">
                                    <h2 class="price"><strong>₦</strong>2,500<span>/session</span></h2>
                                </div>
                                <div class="pricing-list">
                                    <ul class="list-wrap">
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Standard Haircut</li>
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Beard Trim</li>
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Basic Styling</li>
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">No Hidden Charges</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn-two">
                                    <a href="<?php  echo $domain ?>payment/" class="btn transparent-btn-two">Book Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="pricing-box-three">
                                <div class="pricing-icon">
                                    <i class="flaticon-razor"></i>
                                </div>
                                <div class="pricing-plan">
                                    <h4 class="title">Premium Grooming</h4>
                                </div>
                                <div class="pricing-price-two">
                                    <h2 class="price"><strong>₦</strong>5,000<span>/session</span></h2>
                                </div>
                                <div class="pricing-list">
                                    <ul class="list-wrap">
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Classic Haircut</li>
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Beard Shaping</li>
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Scalp Treatment</li>
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Facial Scrub</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn-two">
                                    <a href="<?php  echo $domain ?>payment/" class="btn transparent-btn-two">Book Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="pricing-box-three">
                                <div class="pricing-icon">
                                    <i class="flaticon-hair-dryer"></i>
                                </div>
                                <div class="pricing-plan">
                                    <h4 class="title">Luxury Package</h4>
                                </div>
                                <div class="pricing-price-two">
                                    <h2 class="price"><strong>₦</strong>10,000<span>/session</span></h2>
                                </div>
                                <div class="pricing-list">
                                    <ul class="list-wrap">
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Custom Haircut</li>
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Hot Towel Shave</li>
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Deluxe Scalp Massage</li>
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Beard & Hair Styling</li>
                                        <li><img src="<?php echo $domain ?>assets/img/icons/check_icon03.svg" alt="">Premium Hair Products</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn-two">
                                    <a href="<?php  echo $domain ?>payment/" class="btn transparent-btn-two">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- pricing-area-end -->


    </main>
    <!-- main-area-end -->


    <!-- footer-area -->
    <?php include '../include/footer.php' ?>
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



</html>