<?php /* Smarty version Smarty-3.1.12, created on 2012-11-02 22:58:42
         compiled from "./templates/enterSuplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1876807817508bd825f06c06-19421411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b6e8d851ef755404ad050abeae963b46a2feff' => 
    array (
      0 => './templates/enterSuplier.tpl',
      1 => 1351877319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1876807817508bd825f06c06-19421411',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_508bd82602de47_65833020',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508bd82602de47_65833020')) {function content_508bd82602de47_65833020($_smarty_tpl) {?><center>
	<form class="form-search" id="supplierForm" name="supplierForm">
		Supplier id <input type="text" id="supplierId" name="supplierId"/>
					<input type="button" id="getSupplier" name="getSupplier" value="Submit" onclick="supplierIdValidation(this.form)" class="btn btn-primary"/>
	</form>
</center><?php }} ?>