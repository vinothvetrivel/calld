<html>
	<head>
		<title>
			Call Management System
		</title>
		<script type="text/javascript" src="lib/js/validation.js" ></script>
		<script type="text/javascript" src="lib/js/common.js" ></script>
		<script type="text/javascript" src="lib/js/bootstrap.js"></script>
		<!--<script type="text/javascript" src="lib/js/bootstrap.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="lib/css/commonStyle.css">
	</head>
  <body>
  	<div id="header">
  		{if $username!=""}
  		<span>
  			<img src="images/management-system.jpg" class="headImage">
		 </span>
  		</span>
  		<span class="showLeft">
  			Welcome <b>{$username}<b>
  		</span>
  		<span class="ShowRight">
  			<a href="Control/signout.php">Signout</a>
  		</span>
  		{/if}
  	</div>