<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:20
         compiled from "module:ps_specials/views/templates/hook/ps_specials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263727946591ff320517234-23214809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69eca6f7099f96303240f391e6c6743858b25719' => 
    array (
      0 => 'module:ps_specials/views/templates/hook/ps_specials.tpl',
      1 => 1494156652,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '263727946591ff320517234-23214809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'allSpecialProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ff32051cbd0_02609342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ff32051cbd0_02609342')) {function content_591ff32051cbd0_02609342($_smarty_tpl) {?><!-- begin /opt/lampp/htdocs/themes/classic/modules/ps_specials/views/templates/hook/ps_specials.tpl -->

<section class="featured-products clearfix m-t-0">
  <h1 class="h1 products-section-title text-uppercase">
    <?php echo smartyTranslate(array('s'=>'On sale','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  </h1>
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
  <a class="all-product-link pull-xs-left pull-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allSpecialProductsLink']->value, ENT_QUOTES, 'ISO-8859-1');?>
">
    <?php echo smartyTranslate(array('s'=>'All sale products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
<i class="material-icons">&#xE315;</i>
  </a>
</section>
<!-- end /opt/lampp/htdocs/themes/classic/modules/ps_specials/views/templates/hook/ps_specials.tpl --><?php }} ?>
