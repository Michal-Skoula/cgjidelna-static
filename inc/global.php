<?php 
// echo 'global.php loaded <br>';

ini_set('display_errors', true);
error_reporting(E_ALL ^ E_NOTICE);

define('TITLE', 'Jídelna aplikace');
define('BASE_URL', '/jidelna-rating');

$connection = new mysqli('localhost','root','','jidelna-app');
if($connection->connect_error) {
  die('Couldnt connect to database: ' . $connection->connect_error);
}