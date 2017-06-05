<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 12:57:04
         compiled from "/opt/lampp/htdocs/themes/classic/templates/catalog/_partials/product-discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1616841826591fdab0534562-33431280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73c9203a5280f61a46bc2c1ca52a463a0fa90d58' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/catalog/_partials/product-discounts.tpl',
      1 => 1494767905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1616841826591fdab0534562-33431280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'index' => 0,
    'quantity_discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591fdab0550355_51329738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591fdab0550355_51329738')) {function content_591fdab0550355_51329738($_smarty_tpl) {?>
<section class="product-discounts">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_discounts']) {?>
    <h3 class="h6 product-discounts-title"><?php echo smartyTranslate(array('s'=>'Volume discounts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h3>
    
      <table class="table-product-discounts">
        <thead>
        <tr>
          <th><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
          <th><?php echo smartyTranslate(array('s'=>'Wholesale Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <td><= <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_discounts'][0]['quantity']-1, ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['original_price'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
          </tr>
          <?php  $_smarty_tpl->tpl_vars['quantity_discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quantity_discount']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['quantity_discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->key => $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['quantity_discount']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['index']->value>0) {?>
              <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_discounts'][$_smarty_tpl->tpl_vars['index']->value-1]['quantity'], ENT_QUOTES, 'ISO-8859-1');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']-1, ENT_QUOTES, 'ISO-8859-1');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['original_price']-$_smarty_tpl->tpl_vars['product']->value['quantity_discounts'][$_smarty_tpl->tpl_vars['index']->value-1]['real_value'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
              </tr>
            <?php }?>
          <?php } ?>
          <tr>
            <td><?php echo smartyTranslate(array('s'=>'More than %quantity%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['quantity_discounts'][count($_smarty_tpl->tpl_vars['product']->value['quantity_discounts'])-1]['quantity'])),$_smarty_tpl);?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['original_price']-$_smarty_tpl->tpl_vars['product']->value['quantity_discounts'][count($_smarty_tpl->tpl_vars['product']->value['quantity_discounts'])-1]['real_value'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
          </tr>
        </tbody>
      </table>
    
  <?php }?>
</section>
<?php }} ?>
