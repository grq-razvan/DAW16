<?php

$conn = new mysqli("localhost:8889", "root", "root", "newspaper");
$userId = $_REQUEST['userID'];
$sql = "SELECT * FROM users WHERE id=$userId";
$result = $conn->query($sql);
$user = mysqli_fetch_object($result);
$conn->close();

?>
