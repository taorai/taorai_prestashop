<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 11:12:59
         compiled from "module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151956146358fad84b2abfe2-11608173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89661fbe7f9f4c111d8bdb6320dbdcd70e1222f8' => 
    array (
      0 => 'module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl',
      1 => 1492474529,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '151956146358fad84b2abfe2-11608173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'bankwireOwner' => 0,
    'bankwireDetails' => 0,
    'bankwireAddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fad84b2bc2b2_60539460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fad84b2bc2b2_60539460')) {function content_58fad84b2bc2b2_60539460($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/modules/ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl -->


<dl>
    <dt><?php echo smartyTranslate(array('s'=>'Amount','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Name of account owner','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bankwireOwner']->value, ENT_QUOTES, 'UTF-8');?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Please include these details','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;?>
</dd>
    <dt><?php echo smartyTranslate(array('s'=>'Bank name','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;?>
</dd>
</dl>
<!-- end /home/steven/GitRepository/taorai/modules/ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl --><?php }} ?>
