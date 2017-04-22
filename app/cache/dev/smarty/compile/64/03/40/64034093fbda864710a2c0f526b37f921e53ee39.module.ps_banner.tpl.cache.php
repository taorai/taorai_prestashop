<<<<<<< HEAD:app/cache/dev/smarty/compile/64/03/40/64034093fbda864710a2c0f526b37f921e53ee39.module.ps_banner.tpl.cache.php
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 22:09:36
         compiled from "module:ps_banner/ps_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92280123258fb7230b1a506-70275027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 12:44:20
         compiled from "module:ps_banner/ps_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72745646458faedb481b076-24738110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> dev:app/cache/dev/smarty/compile/64/03/40/64034093fbda864710a2c0f526b37f921e53ee39.module.ps_banner.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_banner/ps_banner.tpl',
      1 => 1492474529,
      2 => 'module',
    ),
  ),
<<<<<<< HEAD:app/cache/dev/smarty/compile/64/03/40/64034093fbda864710a2c0f526b37f921e53ee39.module.ps_banner.tpl.cache.php
  'nocache_hash' => '92280123258fb7230b1a506-70275027',
=======
  'nocache_hash' => '72745646458faedb481b076-24738110',
>>>>>>> dev:app/cache/dev/smarty/compile/64/03/40/64034093fbda864710a2c0f526b37f921e53ee39.module.ps_banner.tpl.php
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_link' => 0,
    'banner_desc' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD:app/cache/dev/smarty/compile/64/03/40/64034093fbda864710a2c0f526b37f921e53ee39.module.ps_banner.tpl.cache.php
  'unifunc' => 'content_58fb7230b29337_02563559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb7230b29337_02563559')) {function content_58fb7230b29337_02563559($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_banner/ps_banner.tpl -->
=======
  'unifunc' => 'content_58faedb482a228_45300237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58faedb482a228_45300237')) {function content_58faedb482a228_45300237($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_banner/ps_banner.tpl -->
>>>>>>> dev:app/cache/dev/smarty/compile/64/03/40/64034093fbda864710a2c0f526b37f921e53ee39.module.ps_banner.tpl.php
<a class="banner hidden-sm-down" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
  <?php } else { ?>
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<!-- end /home/steven/GitRepository/taorai/themes/classic/modules/ps_banner/ps_banner.tpl --><?php }} ?>
