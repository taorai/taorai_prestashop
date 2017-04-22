<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 12:17:54
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73818183358fae782196d55-25429235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '689b079da4dcb606eaa3ff3d05c1567edf71592b' => 
    array (
      0 => '/home/steven/GitRepository/taorai/admin_portal/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73818183358fae782196d55-25429235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fae7821a1347_75765194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fae7821a1347_75765194')) {function content_58fae7821a1347_75765194($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
