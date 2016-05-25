<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../assets/public/templates/general/header.php'; ?>
  <title>DAW Newspaper</title>
  <link href="../assets/public/css/contact/contact.css" rel="stylesheet">
</head>

<body>
  <?php include '../assets/public/templates/general/navbar/navbar.php'; ?>
  <br><br><br><br><br><br>
  <?php include '../assets/public/templates/contact/contact-form.php'; ?>
  <br><br><br><br><br><br>
  <?php include '../assets/public/templates/general/footer.php'; ?>
  <script src="../assets/public/js/lib/jquery.js"></script>
  <script src="../assets/public/js/lib/jquery.form.min.js"></script>
  <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
  <script src="../assets/public/js/lib/bootstrap.min.js"></script>
  <script src="../assets/public/js/contact/contact.js"></script>

</body>

</html>
