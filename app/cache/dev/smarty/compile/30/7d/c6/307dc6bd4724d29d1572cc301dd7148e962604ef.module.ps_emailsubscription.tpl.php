<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-26 12:28:08
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39142215559002fe8457824-34627876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-28 00:26:34
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148983137590229caca2702-03746922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> non-debug-mode-fix
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1492875491,
      2 => 'module',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '39142215559002fe8457824-34627876',
=======
  'nocache_hash' => '148983137590229caca2702-03746922',
>>>>>>> non-debug-mode-fix
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
    'value' => 0,
    'conditions' => 0,
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_59002fe846f142_67083582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59002fe846f142_67083582')) {function content_59002fe846f142_67083582($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
=======
  'unifunc' => 'content_590229cacc9a86_79080969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590229cacc9a86_79080969')) {function content_590229cacc9a86_79080969($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
>>>>>>> non-debug-mode-fix

<div class="block_newsletter col-lg-8 col-md-12 col-sm-12" style="float: right;">
  <div class="row">
    <!-- <p class="col-md-5 col-xs-12"><?php echo smartyTranslate(array('s'=>'Get our latest news and special sales','d'=>'Shop.Theme'),$_smarty_tpl);?>
</p> -->
    <div class="col-md-7 col-xs-12">
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="row">
          <div class="col-xs-12">
            <input
              class="btn btn-primary pull-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="<?php echo smartyTranslate(array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
            >
            <input
              class="btn btn-primary pull-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo smartyTranslate(array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
            >
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo smartyTranslate(array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
"
              >
            </div>
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12">
              <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end /home/steven/GitRepository/taorai/themes/classic/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }} ?>
