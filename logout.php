<?php 
	unset($_SESSION['logout']);
	unset($_SESSION['phone']);
	header("location: index.php");
?>