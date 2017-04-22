<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 12:34:36
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33398172058faeb6cece920-27703319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '019f728f810590ab419deffd2f729b91a82b5346' => 
    array (
      0 => '/home/steven/GitRepository/taorai/admin_portal/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33398172058faeb6cece920-27703319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58faeb6ceda067_30971546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58faeb6ceda067_30971546')) {function content_58faeb6ceda067_30971546($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'),'html','UTF-8');?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
