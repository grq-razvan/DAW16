<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
      <li><a href="/contact/contact.php">Contact</a></li>
  </ul>
  <ul class="nav navbar-nav pull-right">
    <li>
        <a class="btn btn-link" href="/general/map.php"> Location </a>
    </li>
    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
      if (isset($_SESSION['admin']) && $_SESSION['admin']) {?>
        <li>
            <a class="btn btn-danger" href="/general/administration.php"> Administration </a>
        </li> <?php } ?>
      <li>
        <a class="btn btn-link" href= "/user/user.php?id=<?php echo $_SESSION['userId']?>">
            <?php echo $_SESSION['username'];?>
          </a>
      </li>
      <li><a href="../assets/private/authentication/logout.php">Log out</a></li>
      <?php } else { ?>
        <li> <a href="/authentication/login.php">Login</a></li>
        <li> <a href="/authentication/register.php">Register</a></li>
      <?php } ?>
  </ul>
</div>
