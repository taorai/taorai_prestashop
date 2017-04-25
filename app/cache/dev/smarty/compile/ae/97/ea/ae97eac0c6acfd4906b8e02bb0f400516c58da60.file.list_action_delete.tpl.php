<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-25 19:04:37
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144937979858ff3b551301c1-86865125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 22:25:03
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202290540258fe18cf79c406-42113854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> dev
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae97eac0c6acfd4906b8e02bb0f400516c58da60' => 
    array (
      0 => '/home/steven/GitRepository/taorai/admin_portal/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '144937979858ff3b551301c1-86865125',
=======
  'nocache_hash' => '202290540258fe18cf79c406-42113854',
>>>>>>> dev
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_58ff3b551436b2_56257904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ff3b551436b2_56257904')) {function content_58ff3b551436b2_56257904($_smarty_tpl) {?>
=======
  'unifunc' => 'content_58fe18cf7afd62_11418413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe18cf7afd62_11418413')) {function content_58fe18cf7afd62_11418413($_smarty_tpl) {?>
>>>>>>> dev
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="delete">
	<i class="icon-trash"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
