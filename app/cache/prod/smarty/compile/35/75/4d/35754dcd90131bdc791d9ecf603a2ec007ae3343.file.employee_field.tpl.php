<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 23:38:17
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70809337358fe29f9eab9b8-35424330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35754dcd90131bdc791d9ecf603a2ec007ae3343' => 
    array (
      0 => '/home/steven/GitRepository/taorai/admin_portal/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70809337358fe29f9eab9b8-35424330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fe29f9eb2cf9_49872938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe29f9eb2cf9_49872938')) {function content_58fe29f9eb2cf9_49872938($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>

<?php }} ?>
