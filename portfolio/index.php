<?php

include('../server/connection.php');

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
                                    <li><i class="flaticon-phone-call"></i><?php echo $sitephone ?></li>
                                    <li><i class="flaticon-mail"></i><?php echo $siteemail  ?></li>
                                    <li><i class="flaticon-location"></i><?php echo $siteaddress ?></li>
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
                            <span>CEO <?php echo $sitename  ?></span>
                            <p>Our work speaks for itself! From modern fades to classic cuts, we have mastered the art of grooming to suit all styles and personalities. Our portfolio showcases our expertise in precision haircuts, detailed beard trims, and stylish designs. </p>
                            <div class="team-skill-wrap">
                                <h3 class="title-two">My Expertise & Skills</h3>
                                <p>We take pride in every cut, ensuring sharp lines, smooth fades, and flawless finishing. Whether it’s a professional corporate style or a bold creative look, our clients trust us to bring their vision to life. </p>
                                <p>Visit our gallery to see some of our best transformations. At *<?php  echo $sitename ?>s*, every haircut is a masterpiece, and we’re ready to create your next signature look!</p>
                               
                               
                                <div class="col-12 mt-4">
                                    <div class="counter-item-wrap-four">
                                        <ul class="list-wrap">
                                            <li>
                                                <div class="counter-item-three">
                                                    <div class="counter-icon">
                                                        <i class="flaticon-trophy"></i>
                                                    </div>
                                                    <div class="counter-content">
                                                        <h2 class="count"><span class="odometer" data-count="23"></span></h2>
                                                        <p>Awards Recived</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter-item-three">
                                                    <div class="counter-icon">
                                                        <i class="flaticon-rating"></i>
                                                    </div>
                                                    <div class="counter-content">
                                                        <h2 class="count"><span class="odometer" data-count="246"></span></h2>
                                                        <p>Happy Clients</p>
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