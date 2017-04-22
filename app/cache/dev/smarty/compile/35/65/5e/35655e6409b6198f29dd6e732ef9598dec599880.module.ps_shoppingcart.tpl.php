<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 22:14:58
         compiled from "module:ps_shoppingcart/ps_shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12633126958fb7372c4b1d2-14699854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 12:44:20
         compiled from "module:ps_shoppingcart/ps_shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129792208458faedb4a4f705-59759699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> dev
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcart/ps_shoppingcart.tpl',
      1 => 1492474529,
      2 => 'module',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '12633126958fb7372c4b1d2-14699854',
=======
  'nocache_hash' => '129792208458faedb4a4f705-59759699',
>>>>>>> dev
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'refresh_url' => 0,
    'cart_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_58fb7372c62169_52025430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb7372c62169_52025430')) {function content_58fb7372c62169_52025430($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div id="_desktop_cart">
=======
  'unifunc' => 'content_58faedb4a63939_33617442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58faedb4a63939_33617442')) {function content_58faedb4a63939_33617442($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div id="_desktop_cart">
>>>>>>> dev
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
        <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
        <i class="material-icons shopping-cart">shopping_cart</i>
        <span class="hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
        <span class="cart-products-count">(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count']>0) {?>
        </a>
      <?php }?>
    </div>
  </div>
</div>
<!-- end /home/steven/GitRepository/taorai/themes/classic/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php }} ?>
