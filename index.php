<?php require 'inc/header.php';?>

<h1>Form</h1>
<form method="POST" action="signup.php">
  <label for="username">Username</label>
  <input id="username" name="username" type="text" placeholder="Username" required>
  <label for="email">Email</label>
  <input id="email" name="email" type="email" placeholder="Email" required>
  <label for="password">Password</label>
  <input id="password" name="password" type="password" placeholder="Password" required>
  <button id="submit" type="submit">Sign up!</button>
</form>
<input type="file">

<?php require 'inc/footer.php'; ?>

<?php
$query = "SELECT `USERNAME` FROM `users`";
$result = $connection->query($query);
print_r($result->fetch_all());
?>
<!--  -->