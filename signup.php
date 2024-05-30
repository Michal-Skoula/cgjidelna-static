<?php
require 'inc/header.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

  function formValidation() {

  }

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  if(isset($username, $email, $password, $connection)) {
    $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username','$email','$password')";

    $query = mysqli_query($connection, $sql);
    if($query) { 
      echo 'added to database.';
    }
    else {
      echo 'something went wrong.';
    }
  }
}
?>