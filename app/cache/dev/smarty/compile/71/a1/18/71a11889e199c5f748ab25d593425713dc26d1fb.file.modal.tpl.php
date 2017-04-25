<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-25 22:10:00
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99766343158ff66c820d039-10243882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-24 22:25:07
         compiled from "/home/steven/GitRepository/taorai/admin_portal/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150475745358fe18d3a78d88-14803372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> dev
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71a11889e199c5f748ab25d593425713dc26d1fb' => 
    array (
      0 => '/home/steven/GitRepository/taorai/admin_portal/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '99766343158ff66c820d039-10243882',
=======
  'nocache_hash' => '150475745358fe18d3a78d88-14803372',
>>>>>>> dev
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_58ff66c82113c9_98584217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ff66c82113c9_98584217')) {function content_58ff66c82113c9_98584217($_smarty_tpl) {?>
=======
  'unifunc' => 'content_58fe18d3a812a9_46864353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fe18d3a812a9_46864353')) {function content_58fe18d3a812a9_46864353($_smarty_tpl) {?>
>>>>>>> dev
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>
