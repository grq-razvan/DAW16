<?php
session_start();
$conn = new mysqli("localhost:8889", "root", "root", "newspaper");

function connect($host, $user, $pass, $db) {
  return new mysqli($host, $user, $pass, $db);
}

function isLoggedIn() {
  return isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"];
}

function getCurrentUsername() {
  if (isLoggedIn()) {
    return $_SESSION["username"];
  } else return "Anonymous";
}

function getCurrentUserId() {
  if (isLoggedIn()) {
    return $_SESSION["userId"];
  }
}

  function getCurrentUser() {
    $user = array();
    $user["name"] = "";
    $user["id"] = 0;
    if (isLoggedIn()) {
      $user["name"] = $_SESSION["username"];
      $user["id"] = $_SESSION["userId"];
    }
    return $user;
  }

  function logOut() {
    session_destroy();
  }

  function startSession() {
    session_start();
  }

  function closeConnection($conn) {
    $conn->close();
  }

  function checkConnection($conn) {
    if ($conn->connect_error) { die("Failed! " . $conn->connect_error);  }
  }

  function redirect($url) {
    header("Location: $url");
  }
?>
