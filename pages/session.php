<?php
	session_start();
	if(!isset($_SESSION['personnel'])){	//si la variable $_SESSION['user'] n'existe pas
		header('location:login.php');
		exit();
	}
?>