<?php
	session_start();
	unset($_SESSION['userId']);
	unset($_SESSION['username']);
	unset($_SESSION['emailId']);
	session_destroy();
	header("location:../index.php");
?>