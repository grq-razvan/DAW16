<?php
session_start();
$conn = new mysqli("localhost:8889", "root", "root", "newspaper");
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$sql = "INSERT INTO users (name, pass, email) VALUES ('$username', '$password', '$email')";
if ($conn->query($sql) === TRUE) {
  $_SESSION['username'] = $username;
  $_SESSION['loggedIn'] = true;
  $sqlGetID = "SELECT id,admin FROM users where name='$username' AND pass='$password'";
  $result = $conn->query($sqlGetID);
  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['userId'] = $row["id"];
    $_SESSION['admin'] = $row["admin"];
  }
};
$conn->close();
?>
