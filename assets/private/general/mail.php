<?php session_start();
$conn = new mysqli("localhost:8889", "root", "root", "newspaper");

  if (isset($_SESSION['otherUserId'])) {
    $otherId = $_SESSION['otherUserId'];
    $findOtherUserQuery = "SELECT * from users WHERE id=$otherId";
    $result = $conn->query($findOtherUserQuery);
    $user = mysqli_fetch_object($result);
    $to = $user->email;
  }
    // $to = "razvangrecu.2@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $body = $_REQUEST['message'];
    $headers = "From: $from";
    $subject = "You have a message sent from your site";
    $send = mail($to, $subject, $body, $headers);

    $sql = "INSERT INTO emails (sender, content, receiver) VALUES ('$from', '$body', '$to')";
    $conn->query($sql);
$conn->close();
?>
