<?php /* Smarty version Smarty-3.1.19, created on 2017-04-03 23:36:42
         compiled from "/opt/lampp/htdocs/taorai/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110736424758e27a1a9218e4-30857980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec8d2c9b13ae94b11bc253dff2cb4c779ec69992' => 
    array (
      0 => '/opt/lampp/htdocs/taorai/modules/welcome/views/templates/tooltip.tpl',
      1 => 1491236446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110736424758e27a1a9218e4-30857980',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e27a1a924858_58546924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e27a1a924858_58546924')) {function content_58e27a1a924858_58546924($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
