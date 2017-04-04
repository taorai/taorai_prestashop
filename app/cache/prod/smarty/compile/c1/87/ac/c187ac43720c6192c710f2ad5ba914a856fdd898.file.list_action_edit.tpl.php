<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 06:39:51
         compiled from "/opt/lampp/htdocs/taorai/admin_portal/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133850991258e42ec72952e9-49367383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c187ac43720c6192c710f2ad5ba914a856fdd898' => 
    array (
      0 => '/opt/lampp/htdocs/taorai/admin_portal/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1491348620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133850991258e42ec72952e9-49367383',
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
  'unifunc' => 'content_58e42ec729f4d0_63693786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e42ec729f4d0_63693786')) {function content_58e42ec729f4d0_63693786($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
