<?php /* Smarty version Smarty-3.1.19, created on 2017-04-21 07:32:58
         compiled from "/home/steven/GitRepository/taorai/modules/netreviews//views/templates/hook/avisverifies-backoffice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12648470158f9533a4ccb90-56386443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '732a8e22808b461c4f915627b82c3051fac3b05e' => 
    array (
      0 => '/home/steven/GitRepository/taorai/modules/netreviews//views/templates/hook/avisverifies-backoffice.tpl',
      1 => 1492734627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12648470158f9533a4ccb90-56386443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'av_path' => 0,
    'url_back' => 0,
    'order_statut_list' => 0,
    'state' => 0,
    'version' => 0,
    'current_multilingue_checked' => 0,
    'languages' => 0,
    'lang' => 0,
    'current_avisverifies_clesecrete' => 0,
    'current_avisverifies_idwebsite' => 0,
    'current_lightwidget_checked' => 0,
    'current_starproductlist_checked' => 0,
    'avisverifies_nb_reviews' => 0,
    'current_snippets_produit_checked' => 0,
    'current_snippets_site_checked' => 0,
    'current_snippets_liste_produit_checked' => 0,
    'shop_name' => 0,
    'debug_nb_reviews' => 0,
    'debug_nb_reviews_average' => 0,
    'debug_nb_orders_not_flagged' => 0,
    'debug_nb_orders_flagged' => 0,
    'debug_nb_orders_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58f9533a622d69_19365256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f9533a622d69_19365256')) {function content_58f9533a622d69_19365256($_smarty_tpl) {?><!--
* 2012-2017 NetReviews
*
*  @author    NetReviews SAS <contact@avis-verifies.com>
*  @copyright 2017 NetReviews SAS
*  @version   Release: $Revision: 7.3.2
*  @license   NetReviews
*  @date      28/03/2017
*  International Registered Trademark & Property of NetReviews SAS
-->


	<script language=javascript>

	<!--
		function cocheToute(){
			$('.cbOrderstates').each(function () {
			    $(this).attr('checked', true);
			});
		}
		function decocheToute(){
			$('.cbOrderstates').each(function () {
			    $(this).attr('checked', false);
			});
		}
	// -->

	</script>

<div id="avisverifies_module">
	<div id="av-header-intro">
		<div id="av-top">
			<table class="tg" cellspacing="0" cellpadding="0">
			  <tr>
			    <th class="tg-031e"><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['av_path']->value,'htmlall','UTF-8');?>
views/img/<?php echo smartyTranslate(array('s'=>'logo_full_en.png','mod'=>'netreviews'),$_smarty_tpl);?>
"/></th>
			    <th class="tg-031e"><span id="av-title"><?php echo smartyTranslate(array('s'=>'Increase your sales through customer reviews','mod'=>'netreviews'),$_smarty_tpl);?>
</span></th>
			    <th class="tg-031e"><a href="<?php echo smartyTranslate(array('s'=>'url_avisverifies_track','mod'=>'netreviews'),$_smarty_tpl);?>
" class="av-button-calltoaction" target="_blank"><?php echo smartyTranslate(array('s'=>'Start now','mod'=>'netreviews'),$_smarty_tpl);?>
</a></th>
			  </tr>
			</table>
		</div>
		<hr class="orange"/>
		<div id="av-middle">
			<table class="tg">
			  <tr>
			    <th class="tg-031e"><p><?php echo smartyTranslate(array('s'=>'Verified Reviews is an innovative and independent solution that enables you to collect, moderate and publish your customer reviews. You will increase your credibility and visibility on the web towards new customers!','mod'=>'netreviews'),$_smarty_tpl);?>
</p>
					<p><?php echo smartyTranslate(array('s'=>'We provide you with a solution that enables you to collect customer reviews about your website and products which will show on your website and on a attestation which will increase the credibility of published reviews.','mod'=>'netreviews'),$_smarty_tpl);?>
</p>
					<br>
					<p><center><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['av_path']->value,'htmlall','UTF-8');?>
views/img/widget-screen-uk.png" ></center></p>
					<p><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['av_path']->value,'htmlall','UTF-8');?>
views/img/NFS_Avis-en-ligne.png" width="50"> <?php echo smartyTranslate(array('s'=>'Our services are approved by AFNOR certification (France)','mod'=>'netreviews'),$_smarty_tpl);?>
*</p>
				</th>
			    <th class="tg-031e valigntop">
			       	<ul class="av-list-star">
			    		<li><?php echo smartyTranslate(array('s'=>'Give your clients a voice','mod'=>'netreviews'),$_smarty_tpl);?>
</li>
			    		<li><?php echo smartyTranslate(array('s'=>'Increase your sales up to 25%','mod'=>'netreviews'),$_smarty_tpl);?>
</li>
			    		<li><?php echo smartyTranslate(array('s'=>'Improve your SEO with Rich Snippets','mod'=>'netreviews'),$_smarty_tpl);?>
</li>
			    		<li><?php echo smartyTranslate(array('s'=>'Boost your Adwords campaign by gaining star ratings from our partner','mod'=>'netreviews'),$_smarty_tpl);?>
* <img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['av_path']->value,'htmlall','UTF-8');?>
views/img/google-adwords.png" width="100"></li>
			    		<li><?php echo smartyTranslate(array('s'=>'Control your e-reputation','mod'=>'netreviews'),$_smarty_tpl);?>
</li>
			    		<li><?php echo smartyTranslate(array('s'=>'Enjoy our multiple tools','mod'=>'netreviews'),$_smarty_tpl);?>
</li>
			    	</ul>
			    	<br>
			    	<center><a href="<?php echo smartyTranslate(array('s'=>'url_avisverifies_track','mod'=>'netreviews'),$_smarty_tpl);?>
" class="av-button-calltoaction"  target="_blank"><?php echo smartyTranslate(array('s'=>'Start now','mod'=>'netreviews'),$_smarty_tpl);?>
</a> <br><i><?php echo smartyTranslate(array('s'=>'No commitment, free trial for 15 days','mod'=>'netreviews'),$_smarty_tpl);?>
</i></center>
			    </th>
			  </tr>
			</table>
			<p><center><img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['av_path']->value,'htmlall','UTF-8');?>
views/img/prestashop_partner_logo_shadow.png" width="250"></center></p>
			<span class="asterisc">*<?php echo smartyTranslate(array('s'=>'Only available for some specific countries, please get in touch','mod'=>'netreviews'),$_smarty_tpl);?>
</span>
		</div>
	</div>
	<br>
	<fieldset class="fieldsetav">
		<legend><?php echo smartyTranslate(array('s'=>'Informations','mod'=>'netreviews'),$_smarty_tpl);?>
</legend>
		<div class='informations'>
			<p><?php echo smartyTranslate(array('s'=>'The Module Verified Reviews allows you to show verified product reviews on your product urls, to show the Widget Verified Reviews and to collect automatically verified customer reviews via Email after each single order.','mod'=>'netreviews'),$_smarty_tpl);?>
</p>
			<p><?php echo smartyTranslate(array('s'=>'Attention : It is obligatory to register first on','mod'=>'netreviews'),$_smarty_tpl);?>
 <a href="<?php echo smartyTranslate(array('s'=>'url_avisverifies_track','mod'=>'netreviews'),$_smarty_tpl);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'www.verified-reviews.com','mod'=>'netreviews'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'to start your free trial period','mod'=>'netreviews'),$_smarty_tpl);?>
</p>
		</div>
	</fieldset>
	<br>
	<fieldset class="fieldsetav">
		<legend><?php echo smartyTranslate(array('s'=>'Export my orders','mod'=>'netreviews'),$_smarty_tpl);?>
</legend>
		<div class='export'>
			<p><?php echo smartyTranslate(array('s'=>'Export your recently received orders to collect immediately your first customer reviews and to show your attestation Verified Reviews.','mod'=>'netreviews'),$_smarty_tpl);?>
</p>
			<ul>
				<li><?php echo smartyTranslate(array('s'=>'Without Product Reviews : Your customers will only be asked for their reviews regarding the order (obligatory)','mod'=>'netreviews'),$_smarty_tpl);?>
</li>
				<li><?php echo smartyTranslate(array('s'=>'With Product Reviews : Your customers will be asked for their review regarding the order (obligatory) AND regarding the purchased products as well','mod'=>'netreviews'),$_smarty_tpl);?>
</li>
			</ul>
			<br>
			<form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_back']->value,'htmlall','UTF-8');?>
" enctype="multipart/form-data">
				<label class="floatleft"><?php echo smartyTranslate(array('s'=>'Since','mod'=>'netreviews'),$_smarty_tpl);?>
</label>
				<select id="duree" name="duree" class="floatleft">
					<option value="1w"><?php echo smartyTranslate(array('s'=>'1 week','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="2w"><?php echo smartyTranslate(array('s'=>'2 weeks','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="1m"><?php echo smartyTranslate(array('s'=>'1 month','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="2m"><?php echo smartyTranslate(array('s'=>'2 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="3m"><?php echo smartyTranslate(array('s'=>'3 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="4m"><?php echo smartyTranslate(array('s'=>'4 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="5m"><?php echo smartyTranslate(array('s'=>'5 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="6m"><?php echo smartyTranslate(array('s'=>'6 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="7m"><?php echo smartyTranslate(array('s'=>'7 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="8m"><?php echo smartyTranslate(array('s'=>'8 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="9m"><?php echo smartyTranslate(array('s'=>'9 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="10m"><?php echo smartyTranslate(array('s'=>'10 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="11m"><?php echo smartyTranslate(array('s'=>'11 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="12m"><?php echo smartyTranslate(array('s'=>'12 months','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
				</select>
				<br />
				<br />
				<div class="clear"></div>
				<label class=""><?php echo smartyTranslate(array('s'=>'Collect Product Reviews','mod'=>'netreviews'),$_smarty_tpl);?>
</label>
				<select id="productreviews" name="productreviews" class="floatleft">
					<option value="1"><?php echo smartyTranslate(array('s'=>'Yes','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
					<option value="0"><?php echo smartyTranslate(array('s'=>'No','mod'=>'netreviews'),$_smarty_tpl);?>
</option>
				</select>
				<br />
				<br />
				<div class="clear"></div>
				<label class=""><?php echo smartyTranslate(array('s'=>'Export orders with status','mod'=>'netreviews'),$_smarty_tpl);?>
</label>
				<div class="floatleft">
					<div >
						<a class="text_decoration_none italic" href="javascript:cocheToute();"><?php echo smartyTranslate(array('s'=>'Check all','mod'=>'netreviews'),$_smarty_tpl);?>
</a>&nbsp;/&nbsp;<a class="text_decoration_none italic" href="javascript:decocheToute();"><?php echo smartyTranslate(array('s'=>'Uncheck all','mod'=>'netreviews'),$_smarty_tpl);?>
</a>
					</div>
					<br />
					<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_statut_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
						<input class="cbOrderstates" type="checkbox" name="orderstates[]" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['state']->value['id_order_state'],'htmlall','UTF-8');?>
"/> <span id="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['state']->value['id_order_state'],'htmlall','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['state']->value['name'],'htmlall','UTF-8');?>
</span><br>
					<?php } ?>
				</div>
				<br />
				<br />
				<div class="clear"></div>
				<hr class="orange" >
				<center><input type="submit"  name="submit_export" id="submit_export" value="<?php echo smartyTranslate(array('s'=>'Export','mod'=>'netreviews'),$_smarty_tpl);?>
" class="button pointer"></center>
				<i id="VersionModule">Module Version <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['version']->value,'htmlall','UTF-8');?>
</i>
			</form>
		</div>
	</fieldset>
	<br>
	<fieldset class="fieldsetav">
		<legend><?php echo smartyTranslate(array('s'=>'Configuration','mod'=>'netreviews'),$_smarty_tpl);?>
</legend>
		<div class='config'>
			<p><?php echo smartyTranslate(array('s'=>'Please check your','mod'=>'netreviews'),$_smarty_tpl);?>
 <a href="<?php echo smartyTranslate(array('s'=>'url_avisverifies_track','mod'=>'netreviews'),$_smarty_tpl);?>
" target="_blank"><?php echo smartyTranslate(array('s'=>'customer area on verified-reviews.com','mod'=>'netreviews'),$_smarty_tpl);?>
</a> <?php echo smartyTranslate(array('s'=>'to see your login data','mod'=>'netreviews'),$_smarty_tpl);?>
</p>
			<br />
			<br />
			<form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_back']->value,'htmlall','UTF-8');?>
" enctype="multipart/form-data">
				<div id="blockConfiguration">
					<?php if ($_smarty_tpl->tpl_vars['current_multilingue_checked']->value!='checked') {?>
						<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
							<input type="hidden" name="avisverifies_clesecrete_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['lang']->value['iso_code'],'htmlall','UTF-8');?>
" id="avisverifies_clesecrete" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_avisverifies_clesecrete']->value[$_smarty_tpl->tpl_vars['lang']->value['iso_code']],'htmlall','UTF-8');?>
"/>
							<input type="hidden" name="avisverifies_idwebsite_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['lang']->value['iso_code'],'htmlall','UTF-8');?>
" id="avisverifies_idwebsite" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_avisverifies_idwebsite']->value[$_smarty_tpl->tpl_vars['lang']->value['iso_code']],'htmlall','UTF-8');?>
"/>
						<?php } ?>
						<div>
							<label class="titlepart"><?php echo smartyTranslate(array('s'=>'General configuration','mod'=>'netreviews'),$_smarty_tpl);?>
</label>
							<div class="clear"></div>
							<label><?php echo smartyTranslate(array('s'=>'Secret Key','mod'=>'netreviews'),$_smarty_tpl);?>
</label>
							<input type="text" name="avisverifies_clesecrete" id="avisverifies_clesecrete" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_avisverifies_clesecrete']->value['root'],'htmlall','UTF-8');?>
"/>
							<div class="clear"></div>
							<label><?php echo smartyTranslate(array('s'=>'ID Website','mod'=>'netreviews'),$_smarty_tpl);?>
</label>
							<input type="text" name="avisverifies_idwebsite" id="avisverifies_idwebsite" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_avisverifies_idwebsite']->value['root'],'htmlall','UTF-8');?>
"/>
							<div class="clear"></div>
						</div>
					<?php } else { ?>
						<input type="hidden" name="avisverifies_clesecrete" id="avisverifies_clesecrete" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_avisverifies_clesecrete']->value[$_smarty_tpl->getVariable('smarty')->value['section']['root']['index']],'htmlall','UTF-8');?>
"/>
						<input type="hidden" name="avisverifies_idwebsite" id="avisverifies_idwebsite" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_avisverifies_idwebsite']->value[$_smarty_tpl->getVariable('smarty')->value['section']['root']['index']],'htmlall','UTF-8');?>
"/>
						<div >
							<label class="titlepart"><?php echo smartyTranslate(array('s'=>'Multilingual configuration','mod'=>'netreviews'),$_smarty_tpl);?>
</label>
							<div class="clear"></div>
							<?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
								<div class="languages">
									<span >
									<img height="11" src="/img/l/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8');?>
.jpg" width="16" /><label class="namelanguage"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['lang']->value['name'],'htmlall','UTF-8');?>
</label></span><br />
									<div class="clear"></div>
									<label><?php echo smartyTranslate(array('s'=>'Secret Key','mod'=>'netreviews'),$_smarty_tpl);?>
</label><input type="text" name="avisverifies_clesecrete_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['lang']->value['iso_code'],'htmlall','UTF-8');?>
" id="avisverifies_clesecrete" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_avisverifies_clesecrete']->value[$_smarty_tpl->tpl_vars['lang']->value['iso_code']],'htmlall','UTF-8');?>
"/>
									<div class="clear"></div>
									<label><?php echo smartyTranslate(array('s'=>'ID Website','mod'=>'netreviews'),$_smarty_tpl);?>
</label><input type="text" name="avisverifies_idwebsite_<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['lang']->value['iso_code'],'htmlall','UTF-8');?>
" id="avisverifies_idwebsite" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_avisverifies_idwebsite']->value[$_smarty_tpl->tpl_vars['lang']->value['iso_code']],'htmlall','UTF-8');?>
"/>
									<div class="clear"></div>
								</div>
							<?php } ?>
						</div>
					<?php }?>
				</div>
				<hr class="orange">
				<center><input type="submit"  name="submit_configuration" id="submit_configuration" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'netreviews'),$_smarty_tpl);?>
" class="button pointer"></center>
			</form>
		</div>
	</fieldset>
	<br />
<fieldset class="fieldsetav">
		<legend><?php echo smartyTranslate(array('s'=>'Advanced configuration','mod'=>'netreviews'),$_smarty_tpl);?>
</legend>
		<div class='config'>
			<form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_back']->value,'htmlall','UTF-8');?>
" enctype="multipart/form-data">
				<label><?php echo smartyTranslate(array('s'=>'Use the light product widget','mod'=>'netreviews'),$_smarty_tpl);?>
</label><input type="checkbox" name="avisverifies_lightwidget" id="avisverifies_lightwidget" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_lightwidget_checked']->value,'htmlall','UTF-8');?>
 value="checked"/>
				<div class="clear"></div>
				<br />
				<br />
				<label><?php echo smartyTranslate(array('s'=>'Use the multilingual configuration (please contact us to know how to use this feature)','mod'=>'netreviews'),$_smarty_tpl);?>
</label><input type="checkbox" name="avisverifies_multilingue" id="avisverifies_multilingue" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_multilingue_checked']->value,'htmlall','UTF-8');?>
 value="checked"/>
				<div class="clear"></div>
				<br />
				<br />
				<label><?php echo smartyTranslate(array('s'=>'Show the stars on your product list page','mod'=>'netreviews'),$_smarty_tpl);?>
</label><input type="checkbox" name="avisverifies_star_productlist" id="avisverifies_star_productlist" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current_starproductlist_checked']->value,'htmlall','UTF-8');?>
 value="checked" />
				<div class="clear"></div>
				<br />
				<br />
				<label><?php echo smartyTranslate(array('s'=>'Set the number of reviews product displayed','mod'=>'netreviews'),$_smarty_tpl);?>
</label><input type="text" name="avisverifies_nb_reviews" id="avisverifies_nb_reviews" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['avisverifies_nb_reviews']->value,'htmlall','UTF-8');?>
" />
				<div class="clear"></div>
				<br />
				<br />
				<label class="floatleft"><?php echo smartyTranslate(array('s'=>'Activate the google rich snippets','mod'=>'netreviews'),$_smarty_tpl);?>
</label>
				<p><?php echo smartyTranslate(array('s'=>'Warning: after activation of rich snippets, you should verify that the integration is correct with an integration test tool','mod'=>'netreviews'),$_smarty_tpl);?>
</p>
				<div class="clear"></div>
				<br />
				<table>
					<tr>
						<th >Page produit</th>
						<th >Site</th>
						<th >Page liste produit</th>
					</tr>
					<tr>
						<td>
							<input type="radio" id="snippets_produit_0" name="netreviews_snippets_produit" value="0" <?php if (($_smarty_tpl->tpl_vars['current_snippets_produit_checked']->value=="0")||(!$_smarty_tpl->tpl_vars['current_snippets_produit_checked']->value)) {?> checked="checked" <?php }?> ><label for="snippets_produit_0">non</label>
						</td>
						<td>
							<input type="radio" id="snippets_site_0" name="netreviews_snippets_site" value="0" <?php if (($_smarty_tpl->tpl_vars['current_snippets_site_checked']->value=="0")||(!$_smarty_tpl->tpl_vars['current_snippets_site_checked']->value)) {?> checked="checked" <?php }?> ><label for="snippets_site_0">non</label>
						</td>
						<td>
							<input type="radio" id="snippets_liste_produit_0" name="netreviews_snippets_liste_produit" value="0" <?php if (($_smarty_tpl->tpl_vars['current_snippets_liste_produit_checked']->value=="0")||(!$_smarty_tpl->tpl_vars['current_snippets_liste_produit_checked']->value)) {?> checked="checked" <?php }?> ><label for="snippets_liste_produit_0">non</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="radio" id="snippets_produit_1" name="netreviews_snippets_produit" value="1" <?php if (($_smarty_tpl->tpl_vars['current_snippets_produit_checked']->value=="1")) {?> checked="checked" <?php }?>><label for="snippets_produit_1">Footer</label>
						</td>
						<td>
							<input type="radio" id="snippets_site_1" name="netreviews_snippets_site" value="1" <?php if (($_smarty_tpl->tpl_vars['current_snippets_site_checked']->value=="1")) {?> checked="checked" <?php }?>><label for="snippets_site_1">Footer</label>
						</td>
						<td>
							<input type="radio" id="snippets_liste_produit_1" name="netreviews_snippets_liste_produit" value="1" <?php if (($_smarty_tpl->tpl_vars['current_snippets_liste_produit_checked']->value=="1")) {?> checked="checked" <?php }?> ><label for="snippets_liste_produit1">Footer</label>
						</td>
					</tr>
					<tr>
						<td>
							<input type="radio" id="snippets_produit_2" name="netreviews_snippets_produit" value="2" <?php if (($_smarty_tpl->tpl_vars['current_snippets_produit_checked']->value=="2")) {?> checked="checked" <?php }?>><label for="snippets_produit_2">Widget produit</label>
						</td>
						<!-- <td>
							<input type="radio" id="snippets_site_2" name="netreviews_snippets_site" value="2" <?php if (($_smarty_tpl->tpl_vars['current_snippets_site_checked']->value=="2")) {?> checked="checked" <?php }?>><label for="snippets_site_2">Header</label>
						</td> -->
						<td></td>
					</tr>
				</table>
				<div class="clear"></div>

				<hr class="orange" >
				<center><input type="submit"  name="submit_advanced" id="submit_advanced" value="<?php echo smartyTranslate(array('s'=>'Save','mod'=>'netreviews'),$_smarty_tpl);?>
" class="button pointer"></center>
			</form>
		</div>
	</fieldset>
	<br />
	<fieldset class="fieldsetav">
		<legend><?php echo smartyTranslate(array('s'=>'Advanced actions','mod'=>'netreviews'),$_smarty_tpl);?>
</legend>
		<div class='config'>
			<form method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_back']->value,'htmlall','UTF-8');?>
" enctype="multipart/form-data">
				<label><?php echo smartyTranslate(array('s'=>'Purge all orders for this shop','mod'=>'netreviews'),$_smarty_tpl);?>
&nbsp;(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['shop_name']->value,'htmlall','UTF-8');?>
)</label>&nbsp;<input type="submit"  name="submit_purge" id="submit_purge" value="<?php echo smartyTranslate(array('s'=>'Purged','mod'=>'netreviews'),$_smarty_tpl);?>
" class="button pointer"></center>
				<div class="clear"></div>
			</form>
		</div>
	</fieldset>
	<br />

	<br />
	<fieldset class="fieldsetav">
		<legend><?php echo smartyTranslate(array('s'=>'Debug','mod'=>'netreviews'),$_smarty_tpl);?>
</legend>
		<div class='config'>
			<div id="debug-part">
				<div id='hidden-part'>
					<ul>
						<li>Reviews : <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['debug_nb_reviews']->value,'htmlall','UTF-8');?>
</li>
						<li>Average reviews : <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['debug_nb_reviews_average']->value,'htmlall','UTF-8');?>
</li>
						<li>Orders pending : <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['debug_nb_orders_not_flagged']->value,'htmlall','UTF-8');?>
</li>
						<li>Orders getted : <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['debug_nb_orders_flagged']->value,'htmlall','UTF-8');?>
</li>
						<li>Orders all : <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['debug_nb_orders_all']->value,'htmlall','UTF-8');?>
</li>
					</ul>
				</div>
			</div>
		</div>
	</fieldset>
</div>
<?php }} ?>
