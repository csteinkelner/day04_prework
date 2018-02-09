<?php 

session_start();

$_SESSION["username"] = "John";
$_SESSION["password"] = "123";

?>

<a href="login.php">Login</a>