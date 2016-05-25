<?php session_start();
  $conn = new mysqli("localhost:8889", "root", "root", "newspaper");
  $postId = $_REQUEST["entryID"];
  $userId = $_SESSION["userId"];
  $comment= $_REQUEST["commentData"];

  $commentQuery = "INSERT INTO comments (post_id, user_id, content) VALUES('$postId', '$userId', '$comment')";
  if (!$conn->query($commentQuery)) {
     http_response_code(400);
   }
  $username="";
  $userQuery = "SELECT * FROM users WHERE id=$userId";
  if ($result = $conn->query($userQuery)) {
    $row = mysqli_fetch_object($result);
    $username = $row->name;
  }
  $conn->close();
  exit(
  '<div class="media">' .
    '<div class="media-body">' .
      '<h5 class="media-heading lead section-lead">' . $username . '</h5>' .
    '<span class="lead section-lead"><pre>' .
      $comment . '</pre></span>' .
    '</div>' .
  '</div>');
?>
