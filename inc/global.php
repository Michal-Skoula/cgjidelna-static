<?php 
// echo 'global.php loaded <br>';

ini_set('display_errors', true);
error_reporting(E_ALL ^ E_NOTICE);

define('TITLE', 'Jídelna aplikace');
define('BASE_URL', '/jidelna-rating');
define('SQL_CONNECTION', mysqli_connect('localhost','root','','jidelna-app') or die("Failed to connect to database: " . mysqli_connect_error()));