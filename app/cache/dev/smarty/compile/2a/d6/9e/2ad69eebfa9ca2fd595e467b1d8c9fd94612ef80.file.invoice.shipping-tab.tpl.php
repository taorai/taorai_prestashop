<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 12:35:08
         compiled from "/home/steven/GitRepository/taorai/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147526938758faeb8c7edfb1-69620936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ad69eebfa9ca2fd595e467b1d8c9fd94612ef80' => 
    array (
      0 => '/home/steven/GitRepository/taorai/pdf/invoice.shipping-tab.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147526938758faeb8c7edfb1-69620936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58faeb8c7fc3a7_02852303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58faeb8c7fc3a7_02852303')) {function content_58faeb8c7fc3a7_02852303($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
