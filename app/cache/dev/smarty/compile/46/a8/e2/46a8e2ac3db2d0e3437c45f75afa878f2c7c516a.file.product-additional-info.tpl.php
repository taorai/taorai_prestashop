<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 21:12:47
         compiled from "/home/steven/GitRepository/taorai/themes/classic/templates/catalog/_partials/product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79413570758fe07dfd31b27-82878596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a8e2ac3db2d0e3437c45f75afa878f2c7c516a' => 
    array (
      0 => '/home/steven/GitRepository/taorai/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79413570758fe07dfd31b27-82878596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fe07dfd35303_60961683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe07dfd35303_60961683')) {function content_58fe07dfd35303_60961683($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>