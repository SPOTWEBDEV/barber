<?php
include '../server/connection.php';
?>


<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

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
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />



    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />



    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>

    <script src="<?php echo $domain ?>user/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $domain ?>user/assets/js/sweetalert2.all.min.js"></script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User/</span> Register</h4>
                        <div class="row">
                            <div class="">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">User Registration</h5>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        if (isset($_POST['register'])) {
                                            $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
                                            $email = mysqli_real_escape_string($connection, $_POST['email']);
                                            $phone = mysqli_real_escape_string($connection, $_POST['phone']);
                                            $password = md5($_POST['password']);

                                            if (!empty($fullname) && !empty($email) && !empty($_POST['password']) && !empty($_POST['phone'])) {
                                                $insert_user = mysqli_query($connection, "INSERT INTO `user`(`fullname`, `email`, `password`,`phone`) VALUES ('$fullname','$email','$password','$phone')");

                                                if ($insert_user) {
                                                    echo "<script>Swal.fire('Success','Registration Successful','success').then(()=>{
                                                       window.location.href = 'login.php'
                                                    });</script>";
                                                } else {
                                                    echo "<script>Swal.fire('Error','Registration Failed','error');</script>";
                                                }
                                            } else {
                                                echo "<script>Swal.fire('Warning','All fields are required','warning');</script>";
                                            }
                                        }
                                        ?>
                                        <form method="POST">
                                            <div class="mb-3">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control" name="fullname" placeholder="John Doe" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" name="phone"  required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Enter password" required />
                                            </div>
                                            <div class="mb-3">
                                                <i>Already have an account? </i><a href="<?php echo $domain ?>user/login.php"> Login</a>
                                            </div>
                                            <button type="submit" class="btn btn-primary" name="register">Register</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->



    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>