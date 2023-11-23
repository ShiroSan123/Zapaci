<?php 
	session_start();
	setcookie('my_cookie', '', time() - 3600);
	unset($_SESSION['Phone']);
	header("location: index.php");
?>