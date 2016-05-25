<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../assets/public/templates/general/header.php'; ?>
    <title>Error</title>
    <link href="../assets/public/css/newspaper/entry.css" rel="stylesheet">
</head>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../index.php">Home</a>
  </div>
</div>
</nav>
<body>
  <div class="container alert alert-danger fade in">
    <h3>You are seeing this message because something went wrong. Please try again!<h3>
    <h4>If there are any further problems, please contact your system administrator. </h4>
  </div>
<?php include '../assets/public/templates/general/footer.php'; ?>
<script src="../assets/public/js/lib/jquery.js"></script>
<script src="../assets/public/js/lib/bootstrap.min.js"></script>
</body>
