<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 20:30:45
         compiled from "module:ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15634943458fdfe05383b81-51693976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac93800f7c79e4effac1051becf76659826f5560' => 
    array (
      0 => 'module:ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl',
      1 => 1492474529,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '15634943458fdfe05383b81-51693976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bankwireReservationDays' => 0,
    'bankwireCustomText' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58fdfe05396020_14099427',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdfe05396020_14099427')) {function content_58fdfe05396020_14099427($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/modules/ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl -->

<section>
  <p>
    <?php echo smartyTranslate(array('s'=>'Please transfer the invoice amount to our bank account. You will receive our order confirmation by email containing bank details and order number.','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>

    <?php echo smartyTranslate(array('s'=>'Goods will be reserved %s days for you and we\'ll process the order immediately after receiving the payment.','sprintf'=>array($_smarty_tpl->tpl_vars['bankwireReservationDays']->value),'d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['bankwireCustomText']->value) {?>
        <a data-toggle="modal" data-target="#bankwire-modal"><?php echo smartyTranslate(array('s'=>'More information','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</a>
    <?php }?>
  </p>

  <div class="modal fade" id="bankwire-modal" tabindex="-1" role="dialog" aria-labelledby="Bankwire information" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h2><?php echo smartyTranslate(array('s'=>'Bankwire','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</h2>
        </div>
        <div class="modal-body">
          <p><?php echo smartyTranslate(array('s'=>'Payment is made by transfer of the invoice amount to the following account:','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl);?>
</p>
          <?php echo $_smarty_tpl->getSubTemplate ('module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php echo $_smarty_tpl->tpl_vars['bankwireCustomText']->value;?>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- end /home/steven/GitRepository/taorai/modules/ps_wirepayment/views/templates/hook/ps_wirepayment_intro.tpl --><?php }} ?>
