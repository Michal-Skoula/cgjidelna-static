<?php
require 'inc/header.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

  function formValidation() {

  }

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $connection = mysqli_connect('localhost','root','','jidelna-app') or die("Failed to connect to database: " . mysqli_connect_error());

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
}c staruc vioud main string atgsPú 90 /(
  let a  = 34;
  for $i = 0, $i < 34, $i++ 
)

?>