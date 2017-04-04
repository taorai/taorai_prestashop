<?php /*%%SmartyHeaderCode:140753844158e27a069ed352-37666327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1491236446,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '140753844158e27a069ed352-37666327',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e27a7beeb6f1_32428730',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e27a7beeb6f1_32428730')) {function content_58e27a7beeb6f1_32428730($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/taorai/th/my-account" rel="nofollow">
      Your account
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/taorai/th/identity" title="Personal info" rel="nofollow">
            Personal info
          </a>
        </li>
            <li>
          <a href="http://localhost/taorai/th/addresses" title="ที่อยู่" rel="nofollow">
            ที่อยู่
          </a>
        </li>
            <li>
          <a href="http://localhost/taorai/th/order-history" title="รายการสั่งซื้อ" rel="nofollow">
            รายการสั่งซื้อ
          </a>
        </li>
            <li>
          <a href="http://localhost/taorai/th/credit-slip" title="เครดิตสลิป" rel="nofollow">
            เครดิตสลิป
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
