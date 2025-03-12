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

<script src="<?php  echo $domain ?>admin/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php  echo $domain ?>admin/assets/js/sweetalert2.all.min.js"></script>
  <!-- Custom notification for demo -->
  <!-- beautify ignore:end -->

</head>

<body>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
      <!-- Menu -->

      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

        <!-- Navbar -->

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User/</span> Sign in</h4>

            <!-- Basic Layout -->
            <div class="row">
              <div class="">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">User Login</h5> <small class="text-muted float-end">Sign in</small>
                  </div>
                  <div class="card-body">
                    <?php
                    if (isset($_POST['proceed'])) {
                      $email = mysqli_real_escape_string($connection, $_POST['email']);
                      $pass  = mysqli_real_escape_string($connection, $_POST['pass']);



                      if (! empty($email) && ! empty($pass)) {
                        $password = md5($pass);
                        $check_ad = mysqli_query($connection, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'");



                        if (mysqli_num_rows($check_ad) > 0) {
                          $row_user = mysqli_fetch_assoc($check_ad);

                          $_SESSION['user_login'] = $row_user['id'];
                          echo "<script>
                                window.location.href = 'index.php';
                              </script>";
                        } else {
                          echo "<script>
                                  Swal.fire('Error','INCORRECT LOGIN DETAILS','error')
                                </script>";
                        }
                      } else {
                        echo "<script>
                              Swal.fire('warning','YOUR INPUT IS EMPTY','warning')
                            </script>";
                      }
                    }

                    ?>
                    <form method="POST">
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Email</label>
                        <input type="text" class="form-control" name="email" id="basic-default-fullname" placeholder="Brad@gmail.com" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Password</label>
                        <input type="password" class="form-control" name="pass" id="basic-default-company" placeholder="Who Knows" />
                      </div>
                      <div class="mb-3">
                        <i>Don't have an account? </i><a href="<?php echo $domain ?>user/register.php"> Register</a>
                      </div>



                      <button type="submit" class="btn btn-primary" name="proceed">LOGIN</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!-- / Content -->

          <!-- Footer -->

          <!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
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