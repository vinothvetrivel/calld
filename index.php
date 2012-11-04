<?php
	session_start();
	#ini_set("display_errors",1);
	if($_SESSION['userId']!='')
		{
			header("location:main.php");
		}
	require_once("lib/database/dbConnection.php");
	require_once("libs/Smarty.class.php");
	require_once("xajax_core/xajax.inc.php");
	require_once("Control/loginAuthentication.php");
	require_once("classes/class.loginAuthentication.php");
	$smarty = new Smarty;
	$xajax = new xajax();
	$xajax->registerFunction("loginAuthentication");
	$xajax->processRequest();
	$xajax->printJavascript();
	$smarty->display("container.tpl");
?>
