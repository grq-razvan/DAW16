<?php session_start();
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
  $userID = $_GET['id'];
  $sql = "SELECT * from users where id=$userID";
  $connection = new mysqli("localhost:8889", "root", "root", "newspaper");
  if ($result = $connection->query($sql)) {
    if ($result->num_rows == 1) {
      $user = mysqli_fetch_object($result);
    } else {
      http_response_code(400);
    }
  }
  $connection->close();
}
?>
<header id="profilePicture" class="image-bg-fluid-height">
<img class="img-responsive img-center img-rounded img-thumbnail" width="304" height="236" src="<?php echo $user->image; ?>" alt="http://placehold.it/200x200&text=Logo">
</header>

<section>
    <div class="container">
      <div class="col-sm-6 col-sm-offset-10">

      <?php
      if ($_SESSION['userId'] != $_GET['id']) {
          $_SESSION['otherUserId'] = $_GET['id'];
        ?>
        <div class="container">
            <a href="/contact/contact.php"
            class="btn btn-primary"> Send mail <?php echo $_SESSION['otherUserId'];?></a>
        </div>
    <?php  } ?>

      </div>
        <div class="row">
            <div id="personalData" class="col-sm-6 col-md-offset-4">
                <h1 id="fullname" class="section-heading"><?php echo $user->firstname; ?> <?php echo $user->lastname;?></h1>
                <p id="username" class="lead section-lead"><span class="glyphicon glyphicon-user"></span> <?php echo $user->name; ?> </p>
                <p id="email" class="section-paragraph"><span class="glyphicon glyphicon-envelope"></span> <?php echo $user->email; ?></p>
                <p id="address" class="section-paragraph"><span class="glyphicon glyphicon-home"></span> <?php echo $user->address; ?></p>
                <p id="phone" class="section-paragraph"><span class="glyphicon glyphicon-phone"></span> <?php echo $user->phone; ?></p>
            </div>
            <div id="aboutMe" class="col-sm-6">
                <h1 class="section-heading">About me</h1>
                <p id="description" class="lead section-lead"><?php echo $user->description; ?></p>
            </div>
        </div>
    </div>
</section>
