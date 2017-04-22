<<<<<<< HEAD:app/cache/dev/smarty/compile/42/f9/46/42f9461127ce7396a601c2484841253ea5ba658f.module.ps_customeraccountlinks.tpl.cache.php
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 22:09:36
         compiled from "module:ps_customeraccountlinks/ps_customeraccountlinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111302925558fb7230e66fa2-75837107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 12:44:20
         compiled from "module:ps_customeraccountlinks/ps_customeraccountlinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46469140258faedb4b5e616-61587094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> dev:app/cache/dev/smarty/compile/42/f9/46/42f9461127ce7396a601c2484841253ea5ba658f.module.ps_customeraccountlinks.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1492474529,
      2 => 'module',
    ),
  ),
<<<<<<< HEAD:app/cache/dev/smarty/compile/42/f9/46/42f9461127ce7396a601c2484841253ea5ba658f.module.ps_customeraccountlinks.tpl.cache.php
  'nocache_hash' => '111302925558fb7230e66fa2-75837107',
=======
  'nocache_hash' => '46469140258faedb4b5e616-61587094',
>>>>>>> dev:app/cache/dev/smarty/compile/42/f9/46/42f9461127ce7396a601c2484841253ea5ba658f.module.ps_customeraccountlinks.tpl.php
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD:app/cache/dev/smarty/compile/42/f9/46/42f9461127ce7396a601c2484841253ea5ba658f.module.ps_customeraccountlinks.tpl.cache.php
  'unifunc' => 'content_58fb7230e7bc78_79574216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb7230e7bc78_79574216')) {function content_58fb7230e7bc78_79574216($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl -->
=======
  'unifunc' => 'content_58faedb4b6fb18_44150888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58faedb4b6fb18_44150888')) {function content_58faedb4b6fb18_44150888($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl -->
>>>>>>> dev:app/cache/dev/smarty/compile/42/f9/46/42f9461127ce7396a601c2484841253ea5ba658f.module.ps_customeraccountlinks.tpl.php

<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
      <?php echo smartyTranslate(array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3"><?php echo smartyTranslate(array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</span>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
    <?php  $_smarty_tpl->tpl_vars['my_account_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['my_account_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['my_account_urls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['my_account_url']->key => $_smarty_tpl->tpl_vars['my_account_url']->value) {
$_smarty_tpl->tpl_vars['my_account_url']->_loop = true;
?>
        <li>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value['title'], ENT_QUOTES, 'UTF-8');?>

          </a>
        </li>
    <?php } ?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMyAccountBlock'),$_smarty_tpl);?>

	</ul>
</div>
<!-- end /home/steven/GitRepository/taorai/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl --><?php }} ?>
