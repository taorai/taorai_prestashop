<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 12:56:19
         compiled from "/opt/lampp/htdocs/modules/welcome/views/contents/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1878701275591fda83bf5c90-52521458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bb0aabaada1560b074fa4388a1be5b2fc31d579' => 
    array (
      0 => '/opt/lampp/htdocs/modules/welcome/views/contents/welcome.tpl',
      1 => 1493048577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1878701275591fda83bf5c90-52521458',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591fda83bff1f3_75986689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591fda83bff1f3_75986689')) {function content_591fda83bff1f3_75986689($_smarty_tpl) {?>

<div class="onboarding-welcome">
  <i class="material-icons onboarding-button-shut-down">close</i>
  <p class="welcome"><?php echo smartyTranslate(array('s'=>'Welcome to your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hi! My name is Preston and I\'m here to show you around.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'You will discover a few essential steps before you can launch your shop:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    <?php echo smartyTranslate(array('s'=>'Create your first product, customize your shop, configure shipping and payments...','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  </div>
  <div class="started">
    <p><?php echo smartyTranslate(array('s'=>'Let\'s get started!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
  </div>
  <div class="buttons">
    <button class="btn btn-tertiary-outline btn-lg onboarding-button-shut-down"><?php echo smartyTranslate(array('s'=>'Later','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    <button class="blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Start','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
</div>
<?php }} ?>
