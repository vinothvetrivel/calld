<?php /* Smarty version Smarty-3.1.12, created on 2012-11-02 23:53:09
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15848250825088a2ca1f7f98-23740059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1351880588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15848250825088a2ca1f7f98-23740059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5088a2ca3ed9a0_09682790',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5088a2ca3ed9a0_09682790')) {function content_5088a2ca3ed9a0_09682790($_smarty_tpl) {?><span id="indexImage" name="indexImage" >
	<h1>Call Management System</h1>
 	<img src="images/callgirl.jpg" class="frontImage">
</span>
 <form id="login" name="login" class="form-signin">
	<center><h2 class="form-signin-heading">Login</h2></center>
		username<input type="text" id="username" name="username" value="" placeholder="Please enter username" class="input-block-level"/>
		password<input type="password" id="password" name="password" placeholder="Please enter password" class="input-block-level"/>
		<center><input type="button" id="loginFormSubmit" name="loginFormSubmit" value="Login" onclick="formValidation(this.form)" class="btn btn-large btn-primary"/></center>
	<br>
		<a href="#" id="signup" name="signup">Signup</a>
		<a href="#" id="forgetPassword" name="forgetPassword" class="rLink">Forget password</a>
</form>

 <?php }} ?>