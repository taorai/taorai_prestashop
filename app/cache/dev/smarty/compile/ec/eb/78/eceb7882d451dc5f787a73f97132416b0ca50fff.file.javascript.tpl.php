<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-08 22:23:46
         compiled from "/home/steven/GitRepository/taorai/themes/javascript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112317357359108d82a3cf50-19419632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-08 21:45:54
         compiled from "/home/steven/GitRepository/taorai/themes/javascript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:419593234591084a2926db2-93202905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> variant-bug-fix
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eceb7882d451dc5f787a73f97132416b0ca50fff' => 
    array (
      0 => '/home/steven/GitRepository/taorai/themes/javascript.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '112317357359108d82a3cf50-19419632',
=======
  'nocache_hash' => '419593234591084a2926db2-93202905',
>>>>>>> variant-bug-fix
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'js_def' => 0,
    'k' => 0,
    'def' => 0,
    'js_files' => 0,
    'js_uri' => 0,
    'js_inline' => 0,
    'inline' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_59108d82a6a8a8_71235575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59108d82a6a8a8_71235575')) {function content_59108d82a6a8a8_71235575($_smarty_tpl) {?>
=======
  'unifunc' => 'content_591084a2957b20_04840203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591084a2957b20_04840203')) {function content_591084a2957b20_04840203($_smarty_tpl) {?>
>>>>>>> variant-bug-fix
<?php if (isset($_smarty_tpl->tpl_vars['js_def']->value)&&is_array($_smarty_tpl->tpl_vars['js_def']->value)&&count($_smarty_tpl->tpl_vars['js_def']->value)) {?>
<script type="text/javascript">
<?php  $_smarty_tpl->tpl_vars['def'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['def']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['js_def']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['def']->key => $_smarty_tpl->tpl_vars['def']->value) {
$_smarty_tpl->tpl_vars['def']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['def']->key;
?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['def']->value);?>
;
<?php } ?>
</script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)&&count($_smarty_tpl->tpl_vars['js_files']->value)) {?>
<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['js_uri']->key;
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"></script>
<?php } ?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['js_inline']->value)&&count($_smarty_tpl->tpl_vars['js_inline']->value)) {?>
<script type="text/javascript">
<?php  $_smarty_tpl->tpl_vars['inline'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inline']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['js_inline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inline']->key => $_smarty_tpl->tpl_vars['inline']->value) {
$_smarty_tpl->tpl_vars['inline']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['inline']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['inline']->value;?>

<?php } ?>
</script>
<?php }?>
<?php }} ?>
