<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 22:15:10
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/new-theme/template/components/layout/non-responsive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218294158fb737e3a7d42-23274592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 12:15:42
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/new-theme/template/components/layout/non-responsive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196617087158fae6fe8227b2-77257186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> dev
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ff0ed177bcd5180c2c940a09081a18565eb372' => 
    array (
      0 => '/home/steven/GitRepository/taorai/admin_portal/themes/new-theme/template/components/layout/non-responsive.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '218294158fb737e3a7d42-23274592',
=======
  'nocache_hash' => '196617087158fae6fe8227b2-77257186',
>>>>>>> dev
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'default_tab_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_58fb737e3b26d6_45369659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb737e3b26d6_45369659')) {function content_58fb737e3b26d6_45369659($_smarty_tpl) {?>
=======
  'unifunc' => 'content_58fae6fe82cde0_56314751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fae6fe82cde0_56314751')) {function content_58fae6fe82cde0_56314751($_smarty_tpl) {?>
>>>>>>> dev
<div id="non-responsive" class="js-non-responsive">
  <h1><?php echo smartyTranslate(array('s'=>'Oh no!'),$_smarty_tpl);?>
</h1>
  <p class="m-t-3">
    <?php echo smartyTranslate(array('s'=>'The mobile version of this page is not available yet.'),$_smarty_tpl);?>

  </p>
  <p class="m-t-2">
    <?php echo smartyTranslate(array('s'=>'Please use a desktop computer to access this page, until is adapted to mobile.'),$_smarty_tpl);?>

  </p>
  <p class="m-t-2">
    <?php echo smartyTranslate(array('s'=>'Thank you.'),$_smarty_tpl);?>

  </p>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['default_tab_link']->value,'html','UTF-8');?>
" class="btn btn-primary p-y-1 m-t-3">
    <i class="material-icons">arrow_back</i>
    <?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>

  </a>
</div>
<div class="mobile-layer"></div>
<?php }} ?>
