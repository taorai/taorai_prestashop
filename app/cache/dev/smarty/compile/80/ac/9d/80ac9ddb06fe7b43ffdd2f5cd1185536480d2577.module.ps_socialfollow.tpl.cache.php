<<<<<<< HEAD:app/cache/dev/smarty/compile/80/ac/9d/80ac9ddb06fe7b43ffdd2f5cd1185536480d2577.module.ps_socialfollow.tpl.cache.php
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 22:09:36
         compiled from "module:ps_socialfollow/ps_socialfollow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85204075558fb7230e18ce8-97323472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 12:44:20
         compiled from "module:ps_socialfollow/ps_socialfollow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46089117458faedb4b03824-85378057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> dev:app/cache/dev/smarty/compile/80/ac/9d/80ac9ddb06fe7b43ffdd2f5cd1185536480d2577.module.ps_socialfollow.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollow/ps_socialfollow.tpl',
      1 => 1492474529,
      2 => 'module',
    ),
  ),
<<<<<<< HEAD:app/cache/dev/smarty/compile/80/ac/9d/80ac9ddb06fe7b43ffdd2f5cd1185536480d2577.module.ps_socialfollow.tpl.cache.php
  'nocache_hash' => '85204075558fb7230e18ce8-97323472',
=======
  'nocache_hash' => '46089117458faedb4b03824-85378057',
>>>>>>> dev:app/cache/dev/smarty/compile/80/ac/9d/80ac9ddb06fe7b43ffdd2f5cd1185536480d2577.module.ps_socialfollow.tpl.php
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'social_links' => 0,
    'social_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD:app/cache/dev/smarty/compile/80/ac/9d/80ac9ddb06fe7b43ffdd2f5cd1185536480d2577.module.ps_socialfollow.tpl.cache.php
  'unifunc' => 'content_58fb7230e256d6_06116875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb7230e256d6_06116875')) {function content_58fb7230e256d6_06116875($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_socialfollow/ps_socialfollow.tpl -->
=======
  'unifunc' => 'content_58faedb4b15007_55535277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58faedb4b15007_55535277')) {function content_58faedb4b15007_55535277($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_socialfollow/ps_socialfollow.tpl -->
>>>>>>> dev:app/cache/dev/smarty/compile/80/ac/9d/80ac9ddb06fe7b43ffdd2f5cd1185536480d2577.module.ps_socialfollow.tpl.php


  <div class="block-social col-lg-4 col-md-12 col-sm-12">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['social_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['social_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['social_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->key => $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->_loop = true;
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
      <?php } ?>
    </ul>
  </div>

<!-- end /home/steven/GitRepository/taorai/themes/classic/modules/ps_socialfollow/ps_socialfollow.tpl --><?php }} ?>
