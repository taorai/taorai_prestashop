<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 12:57:04
         compiled from "/opt/lampp/htdocs/themes/classic/templates/catalog/_partials/product-images-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41240271591fdab05714f5-93470055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6f1b3be3fc78540c6c742cab5fb91b5bfd3259f' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/catalog/_partials/product-images-modal.tpl',
      1 => 1494293502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41240271591fdab05714f5-93470055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591fdab057f023_77982893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591fdab057f023_77982893')) {function content_591fdab057f023_77982893($_smarty_tpl) {?>
<div class="modal fade js-product-images-modal" id="product-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php $_smarty_tpl->tpl_vars['imagesCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['product']->value['images']), null, 0);?>
        <figure>
          <img class="js-modal-product-cover product-cover-modal" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'ISO-8859-1');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'ISO-8859-1');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'ISO-8859-1');?>
" itemprop="image">
          <figcaption class="image-caption">
          
            <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          
        </figcaption>
        </figure>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }} ?>
