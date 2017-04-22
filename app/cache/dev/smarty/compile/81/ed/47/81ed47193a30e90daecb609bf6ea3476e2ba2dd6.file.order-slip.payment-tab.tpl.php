<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 12:35:48
         compiled from "/home/steven/GitRepository/taorai/pdf/order-slip.payment-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167300778158faebb4d08821-08144535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81ed47193a30e90daecb609bf6ea3476e2ba2dd6' => 
    array (
      0 => '/home/steven/GitRepository/taorai/pdf/order-slip.payment-tab.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167300778158faebb4d08821-08144535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58faebb4d0db60_23487496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58faebb4d0db60_23487496')) {function content_58faebb4d0db60_23487496($_smarty_tpl) {?>
<table id="payment-tab" width="100%">
	<tr>
		<td class="payment center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Payment Method','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="payment left white" width="56%">
			<?php echo $_smarty_tpl->tpl_vars['order']->value->payment;?>

		</td>
	</tr>
</table>
<?php }} ?>
