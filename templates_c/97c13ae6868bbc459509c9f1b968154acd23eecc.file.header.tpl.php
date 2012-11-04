<?php /* Smarty version Smarty-3.1.12, created on 2012-11-02 23:08:46
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20047443725088a79b761b21-86742098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1351877901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20047443725088a79b761b21-86742098',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5088a79b7655d9_97426497',
  'variables' => 
  array (
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5088a79b7655d9_97426497')) {function content_5088a79b7655d9_97426497($_smarty_tpl) {?><html>
	<head>
		<title>
			Call Management System
		</title>
		<script type="text/javascript" src="lib/js/validation.js" ></script>
		<script type="text/javascript" src="lib/js/common.js" ></script>
		<script type="text/javascript" src="lib/js/bootstrap.js"></script>
		<script type="text/javascript" src-"lib/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="lib/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="lib/css/commonStyle.css">
	</head>
  <body>
  	<div id="header">
  		<?php if ($_smarty_tpl->tpl_vars['username']->value!=''){?>
  		<span>
  			<img src="images/management-system.jpg" class="headImage">
		 </span>
  		</span>
  		<span class="showLeft">
  			Welcome <b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
<b>
  		</span>
  		<span class="ShowRight">
  			<a href="Control/signout.php">Signout</a>
  		</span>
  		<?php }?>
  	</div><?php }} ?>