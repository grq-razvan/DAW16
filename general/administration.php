<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include '../assets/public/templates/general/header.php'; ?>
  <title>DAW Newspaper</title>
  <link href="/assets/public/css/general/base.css" rel="stylesheet">
  </head>
  <body>
    <?php include '../assets/public/templates/general/navbar/navbar.php'; ?>
    <?php if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
    <div class="container"> <br><br><br>
      <span class="col-md-2">
      <a class="btn btn-primary" href="http://localhost:3000/users">User administration</a>
      </span>
      <span class="col-md-2 col-md-offset-1">
      <a class="btn btn-primary" href="http://localhost:3000/comments">Comment administration</a>
    </span>
    <span class="col-md-2 col-md-offset-1">
      <a class="btn btn-primary" href="http://localhost:3000/emails">Email administration</a>
    </span>
    <span class="col-md-2 col-md-offset-1">
      <a class="btn btn-primary" href="/general/chart.php">Comments/post chart</a></span>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include '../assets/public/templates/general/footer.php'; ?>
    </div>
    <?php } ?>
    <script src="../assets/public/js/lib/jquery.js"></script>
    <script src="../assets/public/js/lib/bootstrap.min.js"></script>
  </body>
  </html>
