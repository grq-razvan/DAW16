<?php
  session_start();
  $conn = new mysqli("localhost:8889", "root", "root", "newspaper");
  $_SESSION['username'] = '';
  $_SESSION['loggedIn'] = false;
  session_destroy();
  header("Location: /general/news.php")
 ?>
