<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 12:56:28
         compiled from "/opt/lampp/htdocs/admin_portal/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1687747124591fda8cce5a28-03008454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0fac40d6be46dd3e11f3e5aa1335b2f7add52ec' => 
    array (
      0 => '/opt/lampp/htdocs/admin_portal/themes/default/template/content.tpl',
      1 => 1493048574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1687747124591fda8cce5a28-03008454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591fda8ccf3f14_58780829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591fda8ccf3f14_58780829')) {function content_591fda8ccf3f14_58780829($_smarty_tpl) {?>
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
