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
                            <li><i class="flaticon-location"></i><?php echo $siteaddress ?></li>
                            <li><i class="flaticon-mail"></i><a href="mailto:<?php echo $siteemail ?>"><?php echo $siteemail ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="header-top-right">
                        <div class="header-contact">
                            <a href="tel:<?php echo $sitephone ?>"><i class="flaticon-phone-call"></i><?php echo $sitephone ?></a>
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
                                <a href=""><img style="height: 130px; width: 150px; padding: 10px;" src="<?php echo $domain ?>assets/img/logo.jpg" alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li><a href="<?php echo $domain ?>">Home</a>

                                    </li>
                                    <li class=""><a href="<?php echo $domain ?>about">About Us</a></li>
                                    <li><a href="<?php echo $domain ?>portfolio">Portfolio</a></li>
                                    <li><a href="<?php echo $domain ?>pricing">Pricing</a></li>
                                    <li><a href="<?php echo $domain ?>user/login.php">Login</a></li>

                                    <!-- <li><a href="<?php echo $domain ?>contact">contact Us</a></li> -->
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul class="list-wrap">
                                    <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li>
                                    <li class="header-btn"><a href="<?php echo $domain ?>user/login.php" class="btn btn-two">Login</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fas fa-times"></i></div>
                            <div class="nav-logo">
                                <a href=""><img src="<?php echo $domain ?>assets/img/logo.jpg" alt="Logo"></a>
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

</header>
<!-- header-area-end -->