<?php
include '../assets/private/general/base.php';
include '../assets/private/general/Constants.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../assets/public/templates/general/header.php'; ?>
    <link href="../assets/public/css/newspaper/entry.css" rel="stylesheet">
</head>

<body>
  <?php include '../assets/public/templates/general/navbar/navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
              <div id="entry"></div>
              <?php include '../assets/public/templates/comments/commentForm.php'; ?>
              <hr>
              <div id="comments">
              <?php include '../assets/public/templates/comments/commentList.php'; ?>
            </div>
            </div>
        </div>
        <hr>
        <?php include '../assets/public/templates/general/footer.php'; ?>
    </div>
    <script src="../assets/public/js/lib/jquery.js"></script>
    <script src="../assets/public/js/lib/jquery.form.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="../assets/public/js/lib/bootstrap.min.js"></script>
    <script src="../assets/public/js/newspaper/entryTransmog.js"></script>
    <script src="../assets/public/js/comments/comments.js"></script>
    <script type="text/javascript">
        parse(function(xml) {
          entityTransmog(xml, getUrlParameter('id'))
        });
    </script>
</body>

</html>
