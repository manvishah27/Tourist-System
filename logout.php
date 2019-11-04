<?php
	session_start();
	session_destroy();
	unset($_SESSION['login']);
	unset($_SESSION['success']);
	header("location: index.php");
?>