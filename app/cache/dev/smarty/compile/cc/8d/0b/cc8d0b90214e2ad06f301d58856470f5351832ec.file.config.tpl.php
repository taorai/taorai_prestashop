<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-25 19:01:17
         compiled from "/home/steven/GitRepository/taorai/modules/dashgoals/views/templates/hook/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102534600758ff3a8ddde2e5-37975847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 21:32:54
         compiled from "/home/steven/GitRepository/taorai/modules/dashgoals/views/templates/hook/config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152497781158fe0c96c951a9-33921448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> dev
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc8d0b90214e2ad06f301d58856470f5351832ec' => 
    array (
      0 => '/home/steven/GitRepository/taorai/modules/dashgoals/views/templates/hook/config.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '102534600758ff3a8ddde2e5-37975847',
=======
  'nocache_hash' => '152497781158fe0c96c951a9-33921448',
>>>>>>> dev
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'goals_year' => 0,
    'goals_months' => 0,
    'month' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_58ff3a8de101e4_44756242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ff3a8de101e4_44756242')) {function content_58ff3a8de101e4_44756242($_smarty_tpl) {?>
=======
  'unifunc' => 'content_58fe0c96cc8ff6_11654059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe0c96cc8ff6_11654059')) {function content_58fe0c96cc8ff6_11654059($_smarty_tpl) {?>
>>>>>>> dev
<section id="dashgoals_config" class="dash_config hide">
	<header><i class="icon-wrench"></i> <?php echo smartyTranslate(array('s'=>'Configuration','d'=>'Admin.Global'),$_smarty_tpl);?>
</header>
	<form class="defaultForm form-horizontal" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard'),'html','UTF-8');?>
">
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th class="fixed-width-md"><?php echo $_smarty_tpl->tpl_vars['goals_year']->value;?>
</th>
					<th class="fixed-width-md"><?php echo smartyTranslate(array('s'=>'Traffic','d'=>'Modules.Dashgoals.Admin'),$_smarty_tpl);?>
</th>
					<th class="fixed-width-md"><?php echo smartyTranslate(array('s'=>'Conversion Rate','d'=>'Modules.Dashgoals.Admin'),$_smarty_tpl);?>
</th>
					<th class="fixed-width-lg"><?php echo smartyTranslate(array('s'=>'Average Cart Value','d'=>'Modules.Dashgoals.Admin'),$_smarty_tpl);?>
</th>
					<th><?php echo smartyTranslate(array('s'=>'Sales','d'=>'Admin.Global'),$_smarty_tpl);?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goals_months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
?>
				<tr>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['month']->value['label'];?>

					</td>
					<td>
						<div class="input-group">
							<input id="dashgoals_traffic_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_traffic_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_config_input form-control"
								value="<?php echo intval($_smarty_tpl->tpl_vars['month']->value['values']['traffic']);?>
" />
						</div>
					</td>
					<td>
						<div class="input-group">
							<input id="dashgoals_conversion_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_conversion_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_config_input form-control"
								value="<?php echo floatval($_smarty_tpl->tpl_vars['month']->value['values']['conversion']);?>
" />
							<span class="input-group-addon">%</span>
						</div>
					</td>
					<td>
						<div class="input-group">
							<span class="input-group-addon"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['currency']->value->iso_code);?>
</span>
							<input id="dashgoals_avg_cart_value_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" name="dashgoals_avg_cart_value_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_config_input form-control"
								value="<?php echo intval($_smarty_tpl->tpl_vars['month']->value['values']['avg_cart_value']);?>
" />
						</div>
					</td>
					<td id="dashgoals_sales_<?php echo $_smarty_tpl->tpl_vars['month']->key;?>
" class="dashgoals_sales">
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="panel-footer">
			<button class="btn btn-default pull-right" name="submitDashGoals" type="submit"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl);?>
</button>
		</div>
	</form>
</section>
<?php }} ?>