<?php

$url = $domain . 'user/login.php';

if (!isset($_SESSION['user_login']) && $_SESSION['user_login'] != true) {
  echo "
    <script>
      window.location.href = '$url';
    </script>";
}



$user_login =  $_SESSION['user_login'];

$fetchUser = mysqli_query($connection, "SELECT * FROM `user` WHERE `id` = '$user_login'");

if (mysqli_num_rows($fetchUser)) {
  $userDetails = mysqli_fetch_assoc($fetchUser);
} else {
  echo "
    <script>
      window.location.href = '$url';
    </script>";
}
