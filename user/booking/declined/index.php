<?php

include '../../../server/connection.php';
include '../../../server/client/auth.php';

?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="<?php echo $domain ?>admin/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?php echo $sitename ?> - Expert Barbering, Haircuts & Beard Styling</title>
    <meta name="description" content="Discover premium grooming at <?php echo $sitename ?>. Specializing in modern haircuts, precision beard trims, and classic shaves. Book your appointment today!">
    <meta name="keywords" content="barber shop, men's grooming, modern haircuts, beard trimming, hot towel shave, Enugu Town barbers, men's haircuts Enugu State">
    <meta property="og:title" content="<?php echo $sitename ?> - Professional Barbering Services">
    <meta property="og:description" content="Premium haircuts, beard trims, and shaves. Book your grooming experience today!">
    <meta property="og:url" content="https://gofinecutz.com.ng/about/">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $domain ?>admin/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo $domain ?>admin/assets/vendor/fonts/boxicons.css" />



    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo $domain ?>admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo $domain ?>admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo $domain ?>admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo $domain ?>admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />



    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo $domain ?>admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo $domain ?>admin/assets/js/config.js"></script>

    <!-- beautify ignore:end -->
    <script src="<?php  echo $domain ?>admin/assets/js/jquery-3.6.0.min.js"></script>
  <script src="<?php  echo $domain ?>admin/assets/js/sweetalert2.all.min.js"></script>

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu -->
            <?php include '../../includes/side_bar.php' ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>


                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search...">
                            </div>
                        </div>
                        <!-- /Search -->


                        <ul class="navbar-nav flex-row align-items-center ms-auto">



                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                               
                            </li>





                        </ul>
                    </div>



                </nav>

                <!-- / Navbar -->


                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">

                        <h4 class="fw-bold py-3 mb-4">
                            <span class="text-muted fw-light">User /</span>Declined Booking
                        </h4>

                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <h5 class="card-header">All Declined Booking</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Fullname</th>
                                            <th>Email</th>
                                            <th>Phonenumber</th>
                                            <th>Booked_Date</th>
                                            <th>Amount</th>

                                            <th>Status</th>
                                            <th>Status Message</th>



                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <?php

                                        $sql = mysqli_query($connection, "SELECT booking.*, user.fullname, user.email,user.phone FROM booking,user WHERE booking.status='declined' AND user.id='$user_login' ");
                                        if (mysqli_num_rows($sql)) {
                                            $count = 1;
                                            while ($details = mysqli_fetch_assoc($sql)) {

                                                $id = $details['id'];
                                        ?>
                                                <tr>
                                                    <td><?php echo $count ?></td>
                                                    <td><?php echo $details['fullname'] ?></td>

                                                    <td><?php echo $details['email'] ?></td>
                                                    <td><?php echo $details['phone'] ?></td>
                                                    <td><?php echo $details['appointment_date'] ?></td>
                                                    <td><?php echo ($details['amount'] == '') ? '0.00' : number_format($details['amount'], 2) ?></td>
                                                    <td><?php


                                                        if ($details['status'] == 'cancelled' || $details['status'] == 'declined' || $details['status'] == 'failed' || $details['status'] == 'abandoned') {
                                                            echo "<span class='badge bg-warning'>Declined</span>";
                                                        }

                                                        ?>
                                                    </td>
                                                    <td>
                                                        <p><?php echo $details['status_message'] ?></p>
                                                    </td>

                                                </tr>
                                        <?php $count++;
                                            }
                                        } else {
                                            echo "<td class='bg-danger text-white' colspan='10'>No Declined Booking Found</td>";
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Basic Bootstrap Table -->
                    </div>
                    <!-- / Content -->


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


    </div>


    <?php

    if (isset($_GET['app_id'])) {
        $app_id      = mysqli_real_escape_string($connection, $_GET['app_id']);
        $updateQuery = "UPDATE `donations` SET `status`='approved', `updated_at`=NOW() WHERE `id`='$app_id'";
        mysqli_query($connection, $updateQuery);
        echo "<script>alert('Donation Approved!');;</script>";
    }

    if (isset($_GET['del_id'])) {
        $del_id      = mysqli_real_escape_string($connection, $_GET['del_id']);
        $updateQuery = "UPDATE `donations` SET `status`='declined', `updated_at`=NOW() WHERE `id`='$del_id'";
        mysqli_query($connection, $updateQuery);
        echo "<script>alert('Donation Declined!');</script>";
    }

    ?>




    <!-- <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
  </div> -->


    <!-- Core JS -->
    <!-- build:js <?php echo $domain ?>admin/assets/vendor/js/core.js -->
    <script src="<?php echo $domain ?>admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo $domain ?>admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo $domain ?>admin/assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo $domain ?>admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo $domain ?>admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->



    <!-- Main JS -->
    <script src="<?php echo $domain ?>admin/assets/js/main.js"></script>

    <!-- Page JS -->



    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>