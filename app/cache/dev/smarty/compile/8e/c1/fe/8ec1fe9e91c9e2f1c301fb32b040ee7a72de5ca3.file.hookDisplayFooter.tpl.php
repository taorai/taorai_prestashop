<?php /* Smarty version Smarty-3.1.19, created on 2017-04-18 07:39:30
         compiled from "modules/ps_legalcompliance/views/templates/hook/hookDisplayFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283027458f560421f9c18-98595702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec1fe9e91c9e2f1c301fb32b040ee7a72de5ca3' => 
    array (
      0 => 'modules/ps_legalcompliance/views/templates/hook/hookDisplayFooter.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283027458f560421f9c18-98595702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_links' => 0,
    'cms_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f5604220aa75_73537358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f5604220aa75_73537358')) {function content_58f5604220aa75_73537358($_smarty_tpl) {?>

 <div class="euAboutUsCMS col-md-2">
 	<h3 class="h3"><?php echo smartyTranslate(array('s'=>'Information','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl);?>
</h3>
 	<ul>
 		<?php  $_smarty_tpl->tpl_vars['cms_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_link']->key => $_smarty_tpl->tpl_vars['cms_link']->value) {
$_smarty_tpl->tpl_vars['cms_link']->_loop = true;
?>
 			<li>
 				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="cms-page-link" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['cms_link']->value['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['id'], ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['title'], ENT_QUOTES, 'UTF-8');?>
 </a>
 			</li>
 		<?php } ?>
 	</ul>
 </div>
<?php }} ?>
