<?php /* Smarty version Smarty-3.1.19, created on 2017-04-18 07:39:20
         compiled from "modules/ps_legalcompliance/views/templates/hook/hookDisplayFooterAfter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187494874958f560383ab9e9-99267827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '850ae3b24cec628ce127d04a06d256cefa1b37fe' => 
    array (
      0 => 'modules/ps_legalcompliance/views/templates/hook/hookDisplayFooterAfter.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187494874958f560383ab9e9-99267827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'delivery_additional_information' => 0,
    'link_shipping' => 0,
    'tax_included' => 0,
    'show_shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f560383ca527_64309692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f560383ca527_64309692')) {function content_58f560383ca527_64309692($_smarty_tpl) {?>

<div class="aeuc_footer_info">
	<?php if (isset($_smarty_tpl->tpl_vars['delivery_additional_information']->value)) {?>
		* <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_additional_information']->value, ENT_QUOTES, 'UTF-8');?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shipping']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Shipping and payment','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</a>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['tax_included']->value) {?>
			<?php echo smartyTranslate(array('s'=>'All prices are mentioned tax included','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'All prices are mentioned tax excluded','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['show_shipping']->value) {?>
			<?php echo smartyTranslate(array('s'=>'and','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['link_shipping']->value) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shipping']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php }?>
			<?php echo smartyTranslate(array('s'=>'shipping excluded','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['link_shipping']->value) {?>
				</a>
			<?php }?>
		<?php }?>
	<?php }?>
</div>
<?php }} ?>
