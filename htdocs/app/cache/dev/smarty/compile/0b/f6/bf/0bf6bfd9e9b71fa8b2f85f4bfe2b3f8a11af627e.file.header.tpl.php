<?php /* Smarty version Smarty-3.1.19, created on 2017-05-20 14:39:03
         compiled from "/opt/lampp/htdocs/pdf/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1943615411591ff297dd0795-04629132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bf6bfd9e9b71fa8b2f85f4bfe2b3f8a11af627e' => 
    array (
      0 => '/opt/lampp/htdocs/pdf/header.tpl',
      1 => 1493048577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1943615411591ff297dd0795-04629132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo_path' => 0,
    'width_logo' => 0,
    'height_logo' => 0,
    'header' => 0,
    'date' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591ff297dea9d1_09706578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591ff297dea9d1_09706578')) {function content_591ff297dea9d1_09706578($_smarty_tpl) {?>


<table style="width: 100%">
<tr>
	<td style="width: 50%">
		<?php if ($_smarty_tpl->tpl_vars['logo_path']->value) {?>
			<img src="<?php echo $_smarty_tpl->tpl_vars['logo_path']->value;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['width_logo']->value;?>
px; height:<?php echo $_smarty_tpl->tpl_vars['height_logo']->value;?>
px;" />
		<?php }?>
	</td>
	<td style="width: 50%; text-align: right;">
		<table style="width: 100%">
			<tr>
				<td style="font-weight: bold; font-size: 14pt; color: #444; width: 100%;"><?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo strtoupper($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['header']->value,'html','UTF-8'));?>
<?php }?></td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #9E9F9E"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['date']->value,'html','UTF-8');?>
</td>
			</tr>
			<tr>
				<td style="font-size: 14pt; color: #9E9F9E"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['title']->value,'html','UTF-8');?>
</td>
			</tr>
		</table>
	</td>
</tr>
</table>

<?php }} ?>
