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

    <?php include('../include/navbar.php') ?>


    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="<?php echo $domain ?>assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Gallery</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                <div class="row gap-2 justify-content-center">
                    <div  class="col-lg-3 col-md-6 col-12 ">

                        <video autoplay style="width: 100%;aspect-ratio: 1;">
                            <source autoplay src="<?php echo $domain ?>assets/videos/1.mp4" type="video/mp4">
                        </video>


                    </div>
                    <div  class="col-lg-3 col-md-6 col-12 ">

                        <video autoplay style="width: 100%;aspect-ratio: 1;" controls>
                            <source autoplay src="<?php echo $domain ?>assets/videos/2.mp4" type="video/mp4">
                        </video>


                    </div>
                    <div  class="col-lg-3 col-md-6 col-12 ">

                        <video autoplay style="width: 100%;aspect-ratio: 1;" controls>
                            <source autoplay src="<?php echo $domain ?>assets/videos/3.mp4" type="video/mp4">
                        </video>


                    </div>
                    <div  class="col-lg-3 col-md-6 col-12 ">

                        <video autoplay style="width: 100%;aspect-ratio: 1;" controls>
                            <source autoplay src="<?php echo $domain ?>assets/videos/4.mp4" type="video/mp4">
                        </video>


                    </div>
                    <div  class="col-lg-3 col-md-6  col-12">

                        <video autoplay style="width: 100%;aspect-ratio: 1;" controls>
                            <source autoplay src="<?php echo $domain ?>assets/videos/5.mp4" type="video/mp4">
                        </video>


                    </div>
                    
                   
                </div>

        </section>
        <!-- team-details-area-end -->


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

<!-- Mirrored from themedox.com/demo/gerow/team-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 22:56:42 GMT -->

</html>