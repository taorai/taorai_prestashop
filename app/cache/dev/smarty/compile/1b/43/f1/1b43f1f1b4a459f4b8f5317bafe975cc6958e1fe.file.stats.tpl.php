<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 21:33:12
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128045621958fe0ca8e1b7f7-32133010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b43f1f1b4a459f4b8f5317bafe975cc6958e1fe' => 
    array (
      0 => '/home/steven/GitRepository/taorai/admin_portal/themes/default/template/controllers/stats/stats.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128045621958fe0ca8e1b7f7-32133010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fe0ca8e2b581_57399955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe0ca8e2b581_57399955')) {function content_58fe0ca8e2b581_57399955($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>
