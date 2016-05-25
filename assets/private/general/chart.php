<?php
 $connection = new mysqli("localhost:8889", "root", "root", "newspaper");
 $sql = "SELECT post_id as post, COUNT(*) as comcount FROM comments GROUP BY post_id";
 $result = $connection->query($sql);
 $stack = array();
 while($comments = mysqli_fetch_object($result)) {
   array_push($stack, $comments);
 }
 $data = json_encode($stack);
 ?>
