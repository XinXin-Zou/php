<?php 
	unset($_SESSION['username']);
	unset($_SESSION['success']);
	header("location: login.php");
 ?>