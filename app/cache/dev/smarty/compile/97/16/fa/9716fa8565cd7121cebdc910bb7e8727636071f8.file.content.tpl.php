<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 22:25:07
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35509422558fe18d392d8e3-07863355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9716fa8565cd7121cebdc910bb7e8727636071f8' => 
    array (
      0 => '/home/steven/GitRepository/taorai/admin_portal/themes/default/template/content.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35509422558fe18d392d8e3-07863355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fe18d3934451_80707356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe18d3934451_80707356')) {function content_58fe18d3934451_80707356($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
