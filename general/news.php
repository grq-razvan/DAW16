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
    <div class="container">
      <header class="jumbotron hero-spacer">
        <h1 id="welcome"></h1>
        <p id="intro"></p>
      </header>
      <hr>
      <div class="row">
        <div class="col-lg-12">
          <h3 id="latest"></h3>
        </div>
      </div>
    <div class="row text-center" id="entries"></div>
    <hr>
    <?php include '../assets/public/templates/general/footer.php'; ?>
    </div>

    <script src="../assets/public/js/lib/jquery.js"></script>
    <script src="../assets/public/js/lib/bootstrap.min.js"></script>
    <script src="../assets/public/js/general/base.js"></script>
    <script src="../assets/public/js/newspaper/indexTransmog.js"></script>
    <script type="text/javascript">
        parse(newsTransmog);
        i18nHax();
    </script>
  </body>
</html>
