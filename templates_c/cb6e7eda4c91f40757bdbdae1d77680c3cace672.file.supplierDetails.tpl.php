<?php /* Smarty version Smarty-3.1.12, created on 2012-11-02 23:04:50
         compiled from "./templates/supplierDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141372088450915aad4da1e7-06821619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb6e7eda4c91f40757bdbdae1d77680c3cace672' => 
    array (
      0 => './templates/supplierDetails.tpl',
      1 => 1351877688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141372088450915aad4da1e7-06821619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50915aad553ce5_76073555',
  'variables' => 
  array (
    'supplierId' => 0,
    'supplierName' => 0,
    'companyName' => 0,
    'companyMobile' => 0,
    'companyAddress' => 0,
    'supplierEmailId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50915aad553ce5_76073555')) {function content_50915aad553ce5_76073555($_smarty_tpl) {?><form id="supplierDetails" name="supplierDetails" class="form-search">
	<center><h3>Supplier Details</h3></center>
		<input type="hidden" id="supplierId" name="supplierId" value="<?php echo $_smarty_tpl->tpl_vars['supplierId']->value;?>
"/>
		<input type="hidden" id="supplierName" name="supplierName" value="<?php echo $_smarty_tpl->tpl_vars['supplierName']->value;?>
" readonly/>
		<input type="hidden" id="companyName" name="companyName" value="<?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>
" readonly/>
		<input type="hidden" id="companyMobile" name="companyMoblie" value="<?php echo $_smarty_tpl->tpl_vars['companyMobile']->value;?>
" readonly/>
		<input type="hidden" id="companyAddress" name="companyAddress" value="<?php echo $_smarty_tpl->tpl_vars['companyAddress']->value;?>
" readonly/>
		<input type="hidden" id="supplierEmailid" name="supplierEmailId" value="<?php echo $_smarty_tpl->tpl_vars['supplierEmailId']->value;?>
" readonly/>
<table class="table table-striped">
	<tr>
		<td><b>Supplier id</b></td>
		<td><b>Supplier name</b></td>
		<td><b>Company name</b></td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['supplierId']->value;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['supplierName']->value;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>
</td>
	</tr>
	<tr>
		<td><b>Address</b></td>
		<td><b>Contact no</b></td>
		<td><b>Email id</b></td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['companyAddress']->value;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['companyMobile']->value;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['supplierEmailId']->value;?>
</td>
	</tr>
	<tr>
		<td>
			<b>Description</b>
		</td>
		<td>
			<textarea rows="5" cols="200" id="description" name="description"></textarea>
		</td>
		<td> </td>
	</tr>
</table>
	<center><input type="button" id="callSubmit" name="callSubmit" value="submit" class="btn btn-primary" onclick="addCallDetails(this.form)"/></center>
</form><?php }} ?>