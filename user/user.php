<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../assets/public/templates/general/header.php'; ?>
    <title>Personal space</title>
    <link href="../assets/public/css/user/profile.css" rel="stylesheet">
</head>

<body>

    <?php include '../assets/public/templates/general/navbar/navbar.php'; ?>
    <?php include '../assets/public/templates/user/user.php'; ?>
    <?php include '../assets/public/templates/general/footer.php'; ?>

    <script src="../assets/public/js/lib/jquery.js"></script>
    <script src="../assets/public/js/lib/jquery.form.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="../assets/public/js/lib/bootstrap.min.js"></script>
    <script src="../assets/public/js/user/edit.js"></script>
    <script src="../assets/public/js/user/update.js"></script>
</body>
</html>
