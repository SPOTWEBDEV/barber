<?php

include '../server/connection.php';
include '../server/client/auth.php';


?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title><?php echo $sitename ?> -- Booking History</title>

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

  <!-- beautify ignore:end -->
  <script src="jquery-3.6.0.min.js"></script>
  <script src="sweetalert2.all.min.js"></script>

</head>

<body>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

      <!-- Menu -->
      <?php include 'includes/side_bar.php' ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

       


        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="fw-bold py-3 mb-4">
              <span class="text-muted fw-light">User /</span> Booking
            </h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
              <h5 class="card-header">All Booking</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>S/N</th>
                      <th>Fullname</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Address</th>
                      <th>Booked_Date</th>
                      <th>Amount</th>

                      <th>Status</th>
                      <th>Action</th>


                    </tr>
                  </thead>
                  <tbody class="table-border-bottom-0">
                    <?php

                    

                    $sql = mysqli_query($connection, "SELECT booking.*, user.fullname, user.email,user.phone FROM booking,user WHERE user.id='$user_login' ");
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
                          <td><?php echo $details['address'] ?></td>
                          <td><?php echo $details['appointment_date'] ?></td>
                          <td><?php echo ($details['amount'] == '') ? '0.00' : number_format($details['amount'], 2) ?></td>
                          <td><?php

                              if ($details['status'] == 'pending' || $details['status'] == 'ongoing') {
                                echo "<span class='badge bg-danger'>Pending</span>";
                              }
                              if ($details['status'] == 'cancelled' || $details['status'] == 'declined' || $details['status'] == 'failed' || $details['status'] == 'abandoned') {
                                echo "<span class='badge bg-warning'>Declined</span>";
                              }
                              if ($details['status'] == 'success' || $details['status'] == 'approved' || $details['status'] == 'completed') {
                                echo "<span class='badge bg-success'>Completed</span>";
                              }
                              ?>
                          </td>

                          


                        </tr>
                    <?php $count++;
                      }
                    } else {
                      echo "<td class='bg-danger text-white' colspan='10'>No Users</td>";
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


  




  <!-- <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
  </div> -->


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