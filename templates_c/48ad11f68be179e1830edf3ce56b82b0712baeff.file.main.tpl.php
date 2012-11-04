<?php /* Smarty version Smarty-3.1.12, created on 2012-11-02 22:03:44
         compiled from "./templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1744365269508ad8b61503a5-35542396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48ad11f68be179e1830edf3ce56b82b0712baeff' => 
    array (
      0 => './templates/main.tpl',
      1 => 1351874022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1744365269508ad8b61503a5-35542396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_508ad8b62806c2_28518972',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_508ad8b62806c2_28518972')) {function content_508ad8b62806c2_28518972($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="navbar navbar-inverse">
     <div class="navbar-inner">
        <div class="container">
        	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</a>
          	<div class="nav-collapse collapse">
            	<ul class="nav">
              		<li class="active">
              			<a href="javascript:;" onclick="xajax_newCall();">New call</a>
              		</li>
              		<li><a href="#about">Show call</a></li>
              		<li><a href="#contact">Delete call</a></li>
            	</ul>
          	</div><!--/.nav-collapse -->
        </div>
 	</div>
</div>    
<div id="container" name="container">
	<?php echo $_smarty_tpl->getSubTemplate ("middle.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }} ?>