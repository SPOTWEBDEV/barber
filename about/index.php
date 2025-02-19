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

		<?php include('../include/navbar.php') ?>


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
                                <img height="600" width="500" src="<?php echo $domain ?>assets/img/work/6.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content-eight">
                                <div class="section-title-two mb-30">
                                    <span class="sub-title">Get To Know More</span>
                                  
                                </div>
                                <p>At *Go Fine Cutz*, we are more than just a barbershop—we are a community dedicated to grooming excellence. Founded with a passion for style and precision, our team of expert barbers brings years of experience in men’s grooming, ensuring each client gets a cut that suits their personality and lifestyle.  </p>

                                <p>We take pride in offering a welcoming and comfortable atmosphere where customers can relax and enjoy premium services. From traditional barbershop techniques to modern hair trends, we continuously upgrade our skills to deliver the best results. Your satisfaction is our top priority, and we guarantee a sharp, clean, and stylish cut every time.</p>
                                
                                
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
                               
                                <p>Beyond haircuts, we build relationships with our clients. Whether you need a quick touch-up, a complete transformation, or advice on maintaining your style, we’re here to help. Join us at *<?php  echo $sitename ?>s* and experience the art of precision grooming! </p>
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="choose-img-three">
                                <img style="object-position: center; height:500px;" src="<?php echo $domain ?>assets/img/work/1.jpg" alt="">
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
