<?php

$url = $domain . 'user/login.php';

if (!isset($_SESSION['user_login']) && $_SESSION['user_login'] != true) {
  echo "
    <script>
      window.location.href = '$url';
    </script>";
}

?>