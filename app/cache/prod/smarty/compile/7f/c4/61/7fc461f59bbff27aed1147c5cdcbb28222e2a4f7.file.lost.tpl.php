<?php /* Smarty version Smarty-3.1.19, created on 2017-04-03 23:36:42
         compiled from "/opt/lampp/htdocs/taorai/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201291400158e27a1a912c26-72069028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fc461f59bbff27aed1147c5cdcbb28222e2a4f7' => 
    array (
      0 => '/opt/lampp/htdocs/taorai/modules/welcome/views/templates/lost.tpl',
      1 => 1491236446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201291400158e27a1a912c26-72069028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e27a1a917a27_91564187',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e27a1a917a27_91564187')) {function content_58e27a1a917a27_91564187($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
