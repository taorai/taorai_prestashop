<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-25 22:09:06
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/new-theme/template/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162344796758ff6692b31935-48916024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 22:23:36
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/new-theme/template/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163596319658fe1878e86fe9-83662952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> dev
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '286aac1db00458c379dff9780cbd879483fbaab4' => 
    array (
      0 => '/home/steven/GitRepository/taorai/admin_portal/themes/new-theme/template/modal.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '162344796758ff6692b31935-48916024',
=======
  'nocache_hash' => '163596319658fe1878e86fe9-83662952',
>>>>>>> dev
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modal_id' => 0,
    'modal_class' => 0,
    'modal_title' => 0,
    'modal_content' => 0,
    'modal_actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_58ff6692b68f34_28490465',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ff6692b68f34_28490465')) {function content_58ff6692b68f34_28490465($_smarty_tpl) {?>
=======
  'unifunc' => 'content_58fe1878eb6583_35852692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe1878eb6583_35852692')) {function content_58fe1878eb6583_35852692($_smarty_tpl) {?>
>>>>>>> dev
<div class="modal fade" id="<?php echo $_smarty_tpl->tpl_vars['modal_id']->value;?>
" tabindex="-1">
	<div class="modal-dialog <?php if (isset($_smarty_tpl->tpl_vars['modal_class']->value)) {?><?php echo $_smarty_tpl->tpl_vars['modal_class']->value;?>
<?php }?>">
		<div class="modal-content">
			<?php if (isset($_smarty_tpl->tpl_vars['modal_title']->value)) {?>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['modal_title']->value;?>
</h4>
			</div>
			<?php }?>

			<?php echo $_smarty_tpl->tpl_vars['modal_content']->value;?>


			<?php if (isset($_smarty_tpl->tpl_vars['modal_actions']->value)) {?>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo smartyTranslate(array('s'=>'Close'),$_smarty_tpl);?>
</button>
				<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modal_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['action']->value['type']=='link') {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['action']->value['href'];?>
" class="btn <?php echo $_smarty_tpl->tpl_vars['action']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>
</a>
					<?php } elseif ($_smarty_tpl->tpl_vars['action']->value['type']=='button') {?>
						<button type="button" value="<?php echo $_smarty_tpl->tpl_vars['action']->value['value'];?>
" class="btn <?php echo $_smarty_tpl->tpl_vars['action']->value['class'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['action']->value['label'];?>

						</button>
					<?php }?>
				<?php } ?>
			</div>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>
