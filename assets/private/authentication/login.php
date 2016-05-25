<?php
  session_start();
  $conn = new mysqli("localhost:8889", "root", "root", "newspaper");
  $username = $_REQUEST['name'];
  $password = $_REQUEST['pass'];

  $sql = "SELECT id,name,admin FROM users WHERE name = '$username' AND pass = '$password'";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $sessionUsername = $row["name"];
    if ($sessionUsername) {
      $_SESSION['username'] = $sessionUsername;
      $_SESSION['loggedIn'] = true;
      $_SESSION['userId'] = $row["id"];
      $_SESSION['admin'] = $row["admin"];
    }
  } else {
    http_response_code(400);
  }
  $conn->close();
?>
