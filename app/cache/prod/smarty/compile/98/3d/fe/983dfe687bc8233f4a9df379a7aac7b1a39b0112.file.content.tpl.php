<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 06:35:36
         compiled from "/opt/lampp/htdocs/taorai/admin_portal/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21665695858e42dc8b693f2-23378665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '983dfe687bc8233f4a9df379a7aac7b1a39b0112' => 
    array (
      0 => '/opt/lampp/htdocs/taorai/admin_portal/themes/default/template/content.tpl',
      1 => 1491348620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21665695858e42dc8b693f2-23378665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e42dc8b6bdc0_02432211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e42dc8b6bdc0_02432211')) {function content_58e42dc8b6bdc0_02432211($_smarty_tpl) {?>
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
