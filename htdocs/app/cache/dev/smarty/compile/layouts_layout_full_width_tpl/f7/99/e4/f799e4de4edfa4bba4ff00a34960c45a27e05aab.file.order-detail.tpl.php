<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/customer/order-detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:502414447591ff31bb08b37-50389158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f799e4de4edfa4bba4ff00a34960c45a27e05aab' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/customer/order-detail.tpl',
      1 => 1494386134,
      2 => 'file',
    ),
    '6951ec04c0979a58a1dfea3d80a95025a3d42279' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/customer/page.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    '7aaa361d1403dc33dc9663e13742d72a15604bee' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/page.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    'c9bfee4f57a97c3bfd00f5ef0727f1a7d8a0aa1d' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/layouts/layout-full-width.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    '8f913324f852e46a03e4e3922397c5a3236ffcbd' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/layouts/layout-both-columns.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    '3b961c83f22f38bd5a5183f0bbb3276d9638587e' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/_partials/stylesheets.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    '8efc163b7c57f82016ebb3e386b45e76ef210afa' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/_partials/javascript.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    '14052dd1a7c32acaab88282119fa9c484a6e7865' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/_partials/head.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    'd8d397bddcd0d924fe1c8d1f090c10746fe09185' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/catalog/_partials/product-activation.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    '22d65524f3ff1a67cce838369f9157fcb787ee58' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/_partials/header.tpl',
      1 => 1495121821,
      2 => 'file',
    ),
    'f21f25d6724375d3751f55434444f22dd4d37066' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/_partials/notifications.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    '1465235010d6565d38d5702e75d698d51f85fb51' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/_partials/breadcrumb.tpl',
      1 => 1493778198,
      2 => 'file',
    ),
    '38982302c30c8ba3bbe47d504ac95d23881ee9d0' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/customer/_partials/order-detail-return.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    '089c8e77dfcd000169b8c8d40512b6d167951192' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/customer/_partials/order-detail-no-return.tpl',
      1 => 1495121859,
      2 => 'file',
    ),
    '353b55e74f56dd56b8ff14ad4431aafd895a2ffc' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/customer/_partials/order-messages.tpl',
      1 => 1494086321,
      2 => 'file',
    ),
    'fa22cc280adf371c4ca74c42b4d27acfdd5971c9' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/customer/_partials/my-account-links.tpl',
      1 => 1493048578,
      2 => 'file',
    ),
    '06f2cfffca1553da6a16b2c453cbe6592c9687c5' => 
    array (
      0 => '/opt/lampp/htdocs/themes/classic/templates/_partials/footer.tpl',
      1 => 1495121820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '502414447591ff31bb08b37-50389158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ff31c126b43_06998998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ff31c126b43_06998998')) {function content_591ff31c126b43_06998998($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'ISO-8859-1');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '502414447591ff31bb08b37-50389158');
content_591ff31bb7fe92_29146524($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'ISO-8859-1');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'ISO-8859-1');?>
">

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '502414447591ff31bb08b37-50389158');
content_591ff31bc33416_09127571($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      

      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '502414447591ff31bb08b37-50389158');
content_591ff31bc48bd7_26000502($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>

      

      <section id="wrapper">
        <div class="container">
          
            <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '502414447591ff31bb08b37-50389158');
content_591ff31bc90336_96576443($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
          

          

          
  <div id="content-wrapper">
    

  <section id="main">

    
      
        <header class="page-header">
          <h1>
  <?php echo smartyTranslate(array('s'=>'Order details','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

</h1>
        </header>
      
    

    
  <section id="content" class="page-content">
    
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '502414447591ff31bb08b37-50389158');
content_591ff31bc5f324_29266912($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
    
    
  
    <div id="order-infos">
      <div class="box">
          <div class="row">
            <div class="col-xs-<?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>9<?php } else { ?>12<?php }?>">
              <strong>
                <?php echo smartyTranslate(array('s'=>'Order Reference %reference% - placed on %date%','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'],'%date%'=>$_smarty_tpl->tpl_vars['order']->value['details']['order_date'])),$_smarty_tpl);?>

              </strong>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url']) {?>
              <div class="col-xs-3 text-xs-right">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['reorder_url'], ENT_QUOTES, 'ISO-8859-1');?>
" class="button-primary"><?php echo smartyTranslate(array('s'=>'Reorder','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
              </div>
            <?php }?>
            <div class="clearfix"></div>
          </div>
      </div>

      <div class="box">
          <ul>
            <li>
              <strong><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</strong> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['carrier']['name'], ENT_QUOTES, 'ISO-8859-1');?>
 - 
              <?php echo $_smarty_tpl->tpl_vars['order']->value['addresses']['delivery']['formatted_one_line'];?>

            </li>
            <li>
              <div class="row">
                <div class="col-xs-8">
                  <strong>
                    <?php echo smartyTranslate(array('s'=>'Payment method','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

                  </strong>
                  <?php if (strcasecmp(trim($_smarty_tpl->tpl_vars['order']->value['details']['payment']),"Wire payment")==0) {?>
                    <?php echo smartyTranslate(array('s'=>'Bank Transfer','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

                  <?php }?>
                </div>
                <?php if (strcasecmp(trim($_smarty_tpl->tpl_vars['order']->value['details']['payment']),"Wire payment")==0&&!$_smarty_tpl->tpl_vars['order']->value['paid_status']) {?>
                  <div class="col-xs-4 text-xs-right">
                    <a href="###" class="button-primary" id="toggle-display-payment-details" style="display:block;" onclick="toggleWirePaymentDetail(1);"><?php echo smartyTranslate(array('s'=>'Show Detail','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
                    <a href="###" class="button-primary" id="toggle-hide-payment-details" style="display:none;" onclick="toggleWirePaymentDetail(0);"><?php echo smartyTranslate(array('s'=>'Hide Detail','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
                  </div>
                <?php }?>
              </div>
              
              <?php if (strcasecmp(trim($_smarty_tpl->tpl_vars['order']->value['details']['payment']),"Wire payment")==0&&!$_smarty_tpl->tpl_vars['order']->value['paid_status']) {?>
                <div id="div-payment-detail" style="display: none;padding: 1rem;">
                  
                    <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value)) {?>
                    <section id="content-hook_payment_return" class="card definition-list">
                      <div class="card-block">
                        <div class="row">
                          <div class="col-md-12">
                            <?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

                          </div>
                        </div>
                      </div>
                    </section>
                    <?php }?>
                  
                </div>
              <?php }?>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['recyclable']) {?>
              <li>
                <?php echo smartyTranslate(array('s'=>'You have given permission to receive your order in recycled packaging.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

              </li>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['gift_message']) {?>
              <li><?php echo smartyTranslate(array('s'=>'You have requested gift wrapping for this order.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</li>
              <li><?php echo smartyTranslate(array('s'=>'Message','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['order']->value['details']['gift_message'];?>
</li>
            <?php }?>
          </ul>
      </div>
    </div>
  

  
    <section id="order-history" class="box">
      <h3><?php echo smartyTranslate(array('s'=>'Follow your order\'s status step-by-step','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</h3>
      <table class="table table-bordered table-labeled hidden-xs-down">
        <thead class="thead-default">
          <tr>
            <th><?php echo smartyTranslate(array('s'=>'Date','d'=>'Shop.Theme'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Status','d'=>'Shop.Theme'),$_smarty_tpl);?>
</th>
          </tr>
        </thead>
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
            <tr>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['history_date'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
              <td>
                <span class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['contrast'], ENT_QUOTES, 'ISO-8859-1');?>
" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'ISO-8859-1');?>
">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['ostate_name'], ENT_QUOTES, 'ISO-8859-1');?>

                </span>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="hidden-sm-up history-lines">
        <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
          <div class="history-line">
            <div class="date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['history_date'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
            <div class="state" style="text-align: -webkit-right;">
              <span class="label label-pill <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['contrast'], ENT_QUOTES, 'ISO-8859-1');?>
" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['color'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['ostate_name'], ENT_QUOTES, 'ISO-8859-1');?>

              </span>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
  

  <?php if ($_smarty_tpl->tpl_vars['order']->value['follow_up']) {?>
    <div class="box">
      <p><?php echo smartyTranslate(array('s'=>'Click the following link to track the delivery of your order','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</p>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['follow_up'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['follow_up'], ENT_QUOTES, 'ISO-8859-1');?>
</a>
    </div>
  <?php }?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_DISPLAYORDERDETAIL']->value;?>


  
    <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['is_returnable']) {?>
      <?php /*  Call merged included template "customer/_partials/order-detail-return.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/order-detail-return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '502414447591ff31bb08b37-50389158');
content_591ff31bd28fc8_88811393($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/order-detail-return.tpl" */?>
    <?php } else { ?>
      <?php /*  Call merged included template "customer/_partials/order-detail-no-return.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/order-detail-no-return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '502414447591ff31bb08b37-50389158');
content_591ff31be5f9e6_03588098($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/order-detail-no-return.tpl" */?>
    <?php }?>
  

  
    <?php /*  Call merged included template "customer/_partials/order-messages.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/order-messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '502414447591ff31bb08b37-50389158');
content_591ff31bf2c087_37079134($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/order-messages.tpl" */?>
  

  </section>


    
      <footer class="page-footer">
        
  
    <?php /*  Call merged included template "customer/_partials/my-account-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '502414447591ff31bb08b37-50389158');
content_591ff31c01cad2_54732015($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "customer/_partials/my-account-links.tpl" */?>
  

      </footer>
    

  </section>


  </div>


          
        </div>
      </section>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '502414447591ff31bb08b37-50389158');
content_591ff31c10a7d8_28577874($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '502414447591ff31bb08b37-50389158');
content_591ff31bbea7e2_70983051($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

    
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31bb7fe92_29146524')) {function content_591ff31bb7fe92_29146524($_smarty_tpl) {?>

  <meta charset="utf-8">


  <meta http-equiv="x-ua-compatible" content="ie=edge">



  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'ISO-8859-1');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'ISO-8859-1');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'ISO-8859-1');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'ISO-8859-1');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'ISO-8859-1');?>
">
  <?php }?>



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'ISO-8859-1');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'ISO-8859-1');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'ISO-8859-1');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'ISO-8859-1');?>
">



  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '502414447591ff31bb08b37-50389158');
content_591ff31bbc88c4_38293906($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '502414447591ff31bb08b37-50389158');
content_591ff31bbea7e2_70983051($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>




<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31bbc88c4_38293906')) {function content_591ff31bbc88c4_38293906($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'ISO-8859-1');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'ISO-8859-1');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'ISO-8859-1');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31bbea7e2_70983051')) {function content_591ff31bbea7e2_70983051($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'ISO-8859-1');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'ISO-8859-1');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'ISO-8859-1');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31bc33416_09127571')) {function content_591ff31bc33416_09127571($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'ISO-8859-1');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31bc48bd7_26000502')) {function content_591ff31bc48bd7_26000502($_smarty_tpl) {?>

  <div class="header-banner">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBanner'),$_smarty_tpl);?>

  </div>



  <nav class="header-nav">
    <div class="container">
        <div class="row">
          <div class="hidden-sm-down">
            <div class="col-md-4 col-xs-12">
            </div>
            <div class="col-md-8 right-nav">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav2'),$_smarty_tpl);?>

            </div>
          </div>
          <div class="hidden-md-up text-xs-center mobile">
            <div class="pull-xs-left" id="menu-icon">
              <i class="material-icons d-inline">&#xE5D2;</i>
            </div>
            <div class="pull-xs-right" id="_mobile_cart"></div>
            <div class="pull-xs-right" id="_mobile_user_info"></div>
            <div class="top-logo" id="_mobile_logo"></div>
            <div class="clearfix"></div>
          </div>
        </div>
    </div>
  </nav>



  <div class="header-top" style="text-align:center;">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo" style="float: none;margin-bottom: 2em;width:100%;text-align:center;">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'ISO-8859-1');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'ISO-8859-1');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
">
          </a>
        </div>
        <div class="col-md-12 col-sm-12 position-static">
          <div class="row">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31bc5f324_29266912')) {function content_591ff31bc5f324_29266912($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'ISO-8859-1');?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'ISO-8859-1');?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'ISO-8859-1');?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'ISO-8859-1');?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31bc90336_96576443')) {function content_591ff31bc90336_96576443($_smarty_tpl) {?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'ISO-8859-1');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'ISO-8859-1');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'ISO-8859-1');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'ISO-8859-1');?>
">
        </li>
      
    <?php } ?>
  </ol>
</nav>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/customer/_partials/order-detail-return.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31bd28fc8_88811393')) {function content_591ff31bd28fc8_88811393($_smarty_tpl) {?>

  <form id="order-return-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_follow'], ENT_QUOTES, 'ISO-8859-1');?>
" method="post">

    <div class="box hidden-sm-down">
      <table id="order-products" class="table table-bordered return">
        <thead class="thead-default">
          <tr>
            <th class="head-checkbox"><input type="checkbox"/></th>
            <th><?php echo smartyTranslate(array('s'=>'Product','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Returned','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Unit price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Total price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
          </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
          <tr>
            <td>
              <?php if (!$_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                <span id="_desktop_product_line_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <input type="checkbox" id="cb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
" name="ids_order_detail[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
">
              </span>
              <?php } else { ?>
                <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                  <span id="_desktop_product_customization_line_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
">
                  <input type="checkbox" id="cb_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
" name="customization_ids[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
">
                </span>
                <?php } ?>
              <?php }?>
            </td>
            <td>
              <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</strong><br/>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
                <?php echo smartyTranslate(array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'ISO-8859-1');?>
<br/>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                <?php  $_smarty_tpl->tpl_vars["customization"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["customization"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["customization"]->key => $_smarty_tpl->tpl_vars["customization"]->value) {
$_smarty_tpl->tpl_vars["customization"]->_loop = true;
?>
                  <div class="customization">
                    <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
                  </div>
                  <div id="_desktop_product_customization_modal_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
">
                    <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h4>
                          </div>
                          <div class="modal-body">
                            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                              <div class="product-customization-line row">
                                <div class="col-sm-3 col-xs-4 label">
                                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'ISO-8859-1');?>

                                </div>
                                <div class="col-sm-9 col-xs-8 value">
                                  <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
                                    <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                      <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                                    <?php } else { ?>
                                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'ISO-8859-1');?>

                                    <?php }?>
                                  <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                  <?php }?>
                                </div>
                              </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php }?>
            </td>
            <td class="qty">
              <?php if (!$_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                <div class="current">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']>$_smarty_tpl->tpl_vars['product']->value['qty_returned']) {?>
                  <div class="select" id="_desktop_return_qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
">
                    <select name="order_qte_input[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
]" class="form-control form-control-select">
                      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['name'] = 'quantity';
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['product']->value['quantity']+1-$_smarty_tpl->tpl_vars['product']->value['qty_returned']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total']);
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['quantity']['index'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['quantity']['index'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                      <?php endfor; endif; ?>
                    </select>
                  </div>
                <?php }?>
              <?php } else { ?>
                <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                  <div class="current">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>

                  </div>
                  <div class="select" id="_desktop_return_qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
">
                    <select
                      name="customization_qty_input[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
]"
                      class="form-control form-control-select"
                    >
                      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['name'] = 'quantity';
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['customization']->value['quantity']+1) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['quantity']['total']);
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['quantity']['index'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['quantity']['index'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                      <?php endfor; endif; ?>
                    </select>
                  </div>
                <?php } ?>
                <div class="clearfix"></div>
              <?php }?>
            </td>
            <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_returned'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
          </tr>
        <?php } ?>
        <tfoot>
          <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['line']->value['value']) {?>
              <tr class="text-xs-right line-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['type'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <td colspan="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['label'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
                <td colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
              </tr>
            <?php }?>
          <?php } ?>
          <tr class="text-xs-right line-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['type'], ENT_QUOTES, 'ISO-8859-1');?>
">
            <td colspan="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['label'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td colspan="2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
          </tr>
        </tfoot>
      </table>
    </div>

    <div class="order-items hidden-md-up box">
      <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <div class="order-item">
          <div class="row">
            <div class="checkbox">
              <?php if (!$_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                <span id="_mobile_product_line_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
"></span>
              <?php } else { ?>
                <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                  <span id="_mobile_product_customization_line_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
"></span>
                <?php } ?>
              <?php }?>
            </div>
            <div class="content">
              <div class="row">
                <div class="col-sm-5 desc">
                  <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
                    <div class="ref"><?php echo smartyTranslate(array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                    <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                      <div class="customization">
                        <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
                      </div>
                      <div id="_mobile_product_customization_modal_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
">
                      </div>
                    <?php } ?>
                  <?php }?>
                </div>
                <div class="col-sm-7 qty">
                  <div class="row">
                    <div class="col-xs-4 text-sm-left text-xs-left">
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>

                    </div>
                    <div class="col-xs-4">
                      <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                        <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                          <div class="q"><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                          <div class="s" id="_mobile_return_qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
"></div>
                        <?php } ?>
                      <?php } else { ?>
                        <div class="q"><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']>$_smarty_tpl->tpl_vars['product']->value['qty_returned']) {?>
                          <div class="s" id="_mobile_return_qty_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
"></div>
                        <?php }?>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['product']->value['qty_returned']>0) {?>
                        <div><?php echo smartyTranslate(array('s'=>'Returned','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['qty_returned'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
                      <?php }?>
                    </div>
                    <div class="col-xs-4 text-xs-right">
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'ISO-8859-1');?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="order-totals hidden-md-up box">
      <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['line']->value['value']) {?>
          <div class="order-total row">
            <div class="col-xs-8"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['label'], ENT_QUOTES, 'ISO-8859-1');?>
</strong></div>
            <div class="col-xs-4 text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
          </div>
        <?php }?>
      <?php } ?>
      <div class="order-total row">
        <div class="col-xs-8"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['label'], ENT_QUOTES, 'ISO-8859-1');?>
</strong></div>
        <div class="col-xs-4 text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
      </div>
    </div>

    <div class="box">
      <header>
        <h3><?php echo smartyTranslate(array('s'=>'Merchandise return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</h3>
        <p><?php echo smartyTranslate(array('s'=>'If you wish to return one or more products, please mark the corresponding boxes and provide an explanation for the return. When complete, click the button below.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</p>
      </header>
      <section class="form-fields">
        <div class="form-group">
          <textarea cols="67" rows="3" name="returnText" class="form-control"></textarea>
        </div>
      </section>
      <footer class="form-footer">
        <input type="hidden" name="id_order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['id'], ENT_QUOTES, 'ISO-8859-1');?>
">
        <button class="form-control-submit btn btn-primary" type="submit" name="submitReturnMerchandise">
          <?php echo smartyTranslate(array('s'=>'Request a return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>

        </button>
      </footer>
    </div>

  </form>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/customer/_partials/order-detail-no-return.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31be5f9e6_03588098')) {function content_591ff31be5f9e6_03588098($_smarty_tpl) {?>

  <div class="box hidden-sm-down">
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
      <table id="order-products" class="table table-bordered">
        <thead class="thead-default">
          <tr>
            <th><?php echo smartyTranslate(array('s'=>'Product','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Unit price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
            <th><?php echo smartyTranslate(array('s'=>'Total price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</th>
          </tr>
        </thead>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
          <tr>
            <td>
              <strong>
                <a <?php if (isset($_smarty_tpl->tpl_vars['product']->value['download_link'])) {?>href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['download_link'], ENT_QUOTES, 'ISO-8859-1');?>
"<?php }?>>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>

                </a>
              </strong><br/>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
                <?php echo smartyTranslate(array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'ISO-8859-1');?>
<br/>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                <?php  $_smarty_tpl->tpl_vars["customization"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["customization"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["customization"]->key => $_smarty_tpl->tpl_vars["customization"]->value) {
$_smarty_tpl->tpl_vars["customization"]->_loop = true;
?>
                  <div class="customization">
                    <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
                  </div>
                  <div id="_desktop_product_customization_modal_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
">
                    <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h4>
                          </div>
                          <div class="modal-body">
                            <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                              <div class="product-customization-line row">
                                <div class="col-sm-3 col-xs-4 label">
                                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'ISO-8859-1');?>

                                </div>
                                <div class="col-sm-9 col-xs-8 value">
                                  <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
                                    <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                      <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                                    <?php } else { ?>
                                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'ISO-8859-1');?>

                                    <?php }?>
                                  <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'ISO-8859-1');?>
">
                                  <?php }?>
                                </div>
                              </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php }?>
            </td>
            <td>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>

                <?php } ?>
              <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>

              <?php }?>
            </td>
            <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td class="text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
          </tr>
          <?php if ($_smarty_tpl->tpl_vars['order']->value['delivery_status']&&!$_smarty_tpl->tpl_vars['product']->value['comment']) {?>
          <tr>
            <td colspan="4" style="text-align:center;">
              <div class="col-md-12" style="padding-bottom: 1rem;width: 100%;">
                <strong>
                  <?php echo smartyTranslate(array('s'=>'Leave a comment or any suggestion regarding this product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

                </strong>
              </div>
              <div class="col-md-12">
                <textarea rows="3" name="textarea_comment_product[]" class="form-control" id="textarea_comment_product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'ISO-8859-1');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'ISO-8859-1');?>
"></textarea>
              </div>
              <div class="col-md-12" style="margin-top: 1rem;width: 100%;">
                <?php if (count($_smarty_tpl->tpl_vars['order']->value['products'])>1) {?>
                  <button type="button"  name="button_apply_comment_to_all_product" id="button_apply_comment_to_all_product-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'ISO-8859-1');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'ISO-8859-1');?>
" class="btn btn-primary form-control-submit" style="font-size: small;" onclick="apply_comment_to_all(event);">
                    <?php echo smartyTranslate(array('s'=>'Apply to all products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

                  </button>
                <?php }?>
                <input type="hidden" name="id_order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <input type="hidden" name="id_product[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <input type="hidden" name="id_product_attribute[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <button type="submit" name="submitComment" class="btn btn-primary form-control-submit" style="font-size: small;">
                  <?php echo smartyTranslate(array('s'=>'Save all comments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

                </button>
              </div>
            </td>
          </tr>
          <?php }?>
        <?php } ?>
        <tfoot>
          <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['line']->value['value']) {?>
              <tr class="text-xs-right line-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['type'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <td colspan="3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['label'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
              </tr>
            <?php }?>
          <?php } ?>
          <tr class="text-xs-right line-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['type'], ENT_QUOTES, 'ISO-8859-1');?>
" style="font-size: x-large;">
            <td colspan="3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['label'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'ISO-8859-1');?>
</td>
          </tr>
        </tfoot>
      </table>
    </form>
  </div>

  <div class="order-items hidden-md-up box">
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
      <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <div class="order-item">
          <div class="row">
            <div class="col-sm-5 desc">
              <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
                <div class="ref"><?php echo smartyTranslate(array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                  <div class="customization">
                    <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
                  </div>
                  <div id="_mobile_product_customization_modal_wrapper_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'ISO-8859-1');?>
">
                  </div>
                <?php } ?>
              <?php }?>
            </div>
            <div class="col-sm-7 qty">
              <div class="row">
                <div class="col-xs-4 text-sm-left text-xs-left">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'ISO-8859-1');?>

                </div>
                <div class="col-xs-4">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['customizations']) {?>
                    <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>

                    <?php } ?>
                  <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'ISO-8859-1');?>

                  <?php }?>
                </div>
                <div class="col-xs-4 text-xs-right">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'ISO-8859-1');?>

                </div>
              </div>
            </div>
          </div>
          <?php if ($_smarty_tpl->tpl_vars['order']->value['delivery_status']&&!$_smarty_tpl->tpl_vars['product']->value['comment']) {?>
            <div style="text-align:center;padding-bottom:1rem">
              <div class="col-md-12" style="padding-bottom: 1rem;width: 100%;">
                <strong>
                  <?php echo smartyTranslate(array('s'=>'Leave a comment or any suggestion regarding this product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

                </strong>
              </div>
              <div class="col-md-12">
                <textarea rows="3" name="textarea_comment_product[]" class="form-control" id="textarea_comment_product_mobile-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'ISO-8859-1');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'ISO-8859-1');?>
"></textarea>
              </div>
              <div class="col-md-12" style="margin-top: 1rem;width: 100%;padding: 0px">
                <?php if (count($_smarty_tpl->tpl_vars['order']->value['products'])>1) {?>
                  <button type="button"  name="button_apply_comment_to_all_product" id="button_apply_comment_to_all_product_mobile-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'ISO-8859-1');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'ISO-8859-1');?>
" class="btn btn-primary form-control-submit" style="font-size: xx-small;padding-left: 1rem;padding-right: 1rem;" onclick="apply_comment_to_all_mobile(event);">
                    <?php echo smartyTranslate(array('s'=>'Apply to all products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

                  </button>
                <?php }?>
                <input type="hidden" name="id_order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['id'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <input type="hidden" name="id_product[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <input type="hidden" name="id_product_attribute[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'ISO-8859-1');?>
">
                <button type="submit" name="submitComment" class="btn btn-primary form-control-submit" style="font-size: xx-small;padding-left: 1rem;padding-right: 1rem;">
                  <?php echo smartyTranslate(array('s'=>'Save all comments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

                </button>
              </div>
            </div>
          <?php }?>
        </div>
      <?php } ?>
    </form>
  </div>
  <div class="order-totals hidden-md-up box">
    <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['line']->value['value']) {?>
        <div class="order-total row">
          <div class="col-xs-7"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['label'], ENT_QUOTES, 'ISO-8859-1');?>
</strong></div>
          <div class="col-xs-5 text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['value'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
        </div>
      <?php }?>
    <?php } ?>
    <div class="order-total row" style="font-weight: bold;font-size: large;padding-top: 1rem;">
      <div class="col-xs-7"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['label'], ENT_QUOTES, 'ISO-8859-1');?>
</strong></div>
      <div class="col-xs-5 text-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['totals']['total']['value'], ENT_QUOTES, 'ISO-8859-1');?>
</div>
    </div>
  </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:15
         compiled from "/opt/lampp/htdocs/themes/classic/templates/customer/_partials/order-messages.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31bf2c087_37079134')) {function content_591ff31bf2c087_37079134($_smarty_tpl) {?>

  <?php if ($_smarty_tpl->tpl_vars['order']->value['messages']) {?>
    <div class="box messages">
      <h3><?php echo smartyTranslate(array('s'=>'Messages','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</h3>
      <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
        <div class="message row">
          <div class="col-sm-8">
            <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

          </div>
          <div class="col-sm-4" style="float: right;font-style: italic;">
            <!-- <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
<br/> -->
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message_date'], ENT_QUOTES, 'ISO-8859-1');?>

          </div>
        </div>
      <?php } ?>
    </div>
  <?php }?>
  
    <section class="order-message-form box" style="box-shadow: none; margin-bottom: 0; padding-bottom: 0;">
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order_detail'], ENT_QUOTES, 'ISO-8859-1');?>
" method="post">
        <header>
          <!-- <h3><?php echo smartyTranslate(array('s'=>'Add a message','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</h3> -->
          <p><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it in the field below.','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</p>
        </header>

        <section class="form-fields">

  <!--         <div class="form-group row">
            <label class="col-md-3 form-control-label"><?php echo smartyTranslate(array('s'=>'Product','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
</label>
            <div class="col-md-5">
              <select name="id_product" class="form-control form-control-select">
                <option value="0"><?php echo smartyTranslate(array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
</option>
                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                  <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'ISO-8859-1');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'ISO-8859-1');?>
</option>
                <?php } ?>
              </select>
            </div>
          </div> -->

           <div class="form-group row">
            <!-- <label class="col-md-3 form-control-label"></label> -->
            <div class="col-md-12">
              <textarea rows="3" name="msgText" class="form-control"></textarea>
            </div>
          </div>

        </section>

        <footer class="form-footer text-xs-center">
          <input type="hidden" name="id_order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['details']['id'], ENT_QUOTES, 'ISO-8859-1');?>
">
          <button type="submit" name="submitMessage" class="btn btn-primary form-control-submit" style="margin-bottom: 1rem;">
            <?php echo smartyTranslate(array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </button>
        </footer>

      </form>
    </section>
  



<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:16
         compiled from "/opt/lampp/htdocs/themes/classic/templates/customer/_partials/my-account-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31c01cad2_54732015')) {function content_591ff31c01cad2_54732015($_smarty_tpl) {?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'ISO-8859-1');?>
" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo smartyTranslate(array('s'=>'Back to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</span>
  </a>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'ISO-8859-1');?>
" class="account-link">
    <i class="material-icons">&#xE88A;</i>
    <span><?php echo smartyTranslate(array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
  </a>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:41:16
         compiled from "/opt/lampp/htdocs/themes/classic/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_591ff31c10a7d8_28577874')) {function content_591ff31c10a7d8_28577874($_smarty_tpl) {?>
<div class="container">
  <div class="row">
    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

    
  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

      
    </div>
    <div class="row">
      <div class="col-md-12" style="text-align: center;">
        <p>
          
              <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Powered by %taorai.asia%','sprintf'=>array('%taorai.asia%'=>'taorai.asia','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme'),$_smarty_tpl);?>

          
        </p>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
