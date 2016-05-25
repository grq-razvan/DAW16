<?php
  $conn = new mysqli("localhost:8889", "root", "root", "newspaper");

  $id = $_REQUEST['userID'];
  $name = $_REQUEST['name'];
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $email = $_REQUEST['email'];
  $address = $_REQUEST['address'];
  $phone = $_REQUEST['phone'];
  $description = $_REQUEST['description'];

  $sql = "UPDATE `users`
          SET `name`='$name',
              `email`='$email',
              `firstname`='$firstname',
              `lastname`='$lastname',
              `phone`='$phone',
              `address`='$address',
              `description`='$description'
         WHERE id=$id";

  $conn->query($sql);
  $conn->close();
?>
