<?php 
session_start();
define('SITEURL', 'http://thecitycafe.shop/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'zeeshanzahoor786');
define('DB_PASSWORD', 'doberman99');
define('DB_NAME', 'food-order');
    
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database 

?>