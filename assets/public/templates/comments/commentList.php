<?php
$conn = new mysqli("localhost:8889", "root", "root", "newspaper");
$postId = $_GET['id'];
$commentQuery = "SELECT * FROM comments WHERE post_id=$postId";

if ($commentResult = $conn->query($commentQuery)) {
  while ($comment = mysqli_fetch_object($commentResult)) {
    $userQuery = "SELECT * FROM users WHERE id=$comment->user_id;";
    if ($userResult = $conn->query($userQuery)) {
      $user = mysqli_fetch_object($userResult);
      $username = $user->name;
    }
  ?>
    <div class="media">
      <div class="media-body">
          <div class="meadia-header alert-info">
            <img class="img-center img-circle" width="60" height="60"
            src="<?php echo $user->image; ?>" alt="test">
            <a class="btn btn-link"
             href="/user/user.php?id=<?php echo $user->id;?>">
                <?php echo $username; ?> </a>
             <span class="pull-right">[ <?php echo $comment->timestamp;?> ]
             <?php if (isset($_SESSION['admin']) && $_SESSION['admin']) { ?>
             <a class="btn btn-danger"
             href="http://localhost:3000/comments/<? echo $comment->id ?>/edit">
               <span><i class="glyphicon glyphicon-pencil"></i></span> </a> <?php } ?>
             </span>
           </div>
        <div class="media-body">
          <pre class="section-paragraph alert-warning"> <?php echo $comment->content; ?> </pre>
        </div>
      </div>
    </div> <?php
  }
}
$conn->close();
?>
