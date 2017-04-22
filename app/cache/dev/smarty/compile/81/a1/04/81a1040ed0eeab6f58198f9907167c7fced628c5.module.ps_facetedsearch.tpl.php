<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 11:03:08
         compiled from "module:ps_facetedsearch/ps_facetedsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11789140758fad5fccbcbe1-20502480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:ps_facetedsearch/ps_facetedsearch.tpl',
      1 => 1492474529,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '11789140758fad5fccbcbe1-20502480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listing' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fad5fccc5686_12531478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fad5fccc5686_12531478')) {function content_58fad5fccc5686_12531478($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
<div id="search_filters_wrapper" class="hidden-sm-down">
  <div id="search_filter_controls" class="hidden-md-up">
      <span id="_mobile_search_filters_clear_all"></span>
      <button class="btn btn-secondary ok">
        <i class="material-icons">&#xE876;</i>
        <?php echo smartyTranslate(array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </button>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

</div>
<?php }?>
<!-- end /home/steven/GitRepository/taorai/themes/classic/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }} ?>
