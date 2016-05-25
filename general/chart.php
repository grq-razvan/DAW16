<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../assets/public/templates/general/header.php'; ?>
    <link href="../assets/public/css/newspaper/entry.css" rel="stylesheet">
</head>

<body>
  <?php include '../assets/private/general/chart.php';?>
  <?php include '../assets/public/templates/general/navbar/navbar.php'; ?>
  <canvas id="myChart" width="400" height="400"></canvas>
  <?php include '../assets/public/templates/general/footer.php'; ?>
<script src="../assets/public/js/lib/jquery.js"></script>
<script src="../assets/public/js/lib/bootstrap.min.js"></script>
<script src="../assets/public/js/lib/Chart.js"></script>
<script src="../assets/public/js/general/charts.js"></script>
<script type="text/javascript">
  var data = '<?php echo $data; ?>';
  var result = createChart(data);
  var ctx = document.getElementById("myChart").getContext("2d");
  new Chart(ctx).Bar(result, {});
</script>
</body>
</html>
