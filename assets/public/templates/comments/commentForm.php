<?php
  if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) { ?>
<div class="well">
    <h4>Leave a Comment:</h4>
    <form method="post" class="form" id="commentForm" role="form">
        <div class="form-group">
            <textarea id="commentText" class="form-control" name="commentData" rows="3"></textarea>
            <input id="postid" type="hidden" name="entryID" value="<?php echo $_GET['id'];?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div> <?php } ?>
