<?php
	session_start();
	#ini_set("display_errors",1);
	if($_SESSION['userId']=='')
		{
			//header("location:index.php");
		}
	require_once("xajax_core/xajax.inc.php");
	require_once("libs/Smarty.class.php");
	require_once("lib/database/dbConnection.php");
	require_once("classes/class.supplierDetails.php");
	require_once("classes/class.addCallDetails.php");
	require_once("Control/menu.php");
	require_once("Control/getSupplierDetails.php");
	require_once("Control/addSupplierDetails.php");
	$xajax = new xajax();
	$smarty = new Smarty;
	$xajax->registerFunction("newCall");
	$xajax->registerFunction("getSupplierDetails");
	$xajax->registerFunction("addSupplierDetails");
	$xajax->processRequest();
	$xajax->printJavascript();
	$smarty->assign("username",$_SESSION['username']);
	$smarty->display("main.tpl");
?>
