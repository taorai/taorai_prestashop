<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-08 22:23:45
         compiled from "/home/steven/GitRepository/taorai/modules/welcome/views/contents/end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13658473759108d81dd8683-01587528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-05-08 21:45:54
         compiled from "/home/steven/GitRepository/taorai/modules/welcome/views/contents/end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:279422172591084a2689286-18005867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> variant-bug-fix
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c25bfe0ed93bca83ac86b5787aafe6f90d333f5' => 
    array (
      0 => '/home/steven/GitRepository/taorai/modules/welcome/views/contents/end.tpl',
      1 => 1492474529,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '13658473759108d81dd8683-01587528',
=======
  'nocache_hash' => '279422172591084a2689286-18005867',
>>>>>>> variant-bug-fix
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD
  'unifunc' => 'content_59108d81de6b36_99244452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59108d81de6b36_99244452')) {function content_59108d81de6b36_99244452($_smarty_tpl) {?>
=======
  'unifunc' => 'content_591084a26978d6_89974794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591084a26978d6_89974794')) {function content_591084a26978d6_89974794($_smarty_tpl) {?>
>>>>>>> variant-bug-fix

<div id="onboarding-welcome" class="modal-header">
  <button class="onboarding-button-next pull-right close" type="button">&times;</button>
  <h2 class="text-center text-md-center"><?php echo smartyTranslate(array('s'=>'Over to you!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</h2>
  <p class="text-center text-md-center">
    <?php echo smartyTranslate(array('s'=>'You\'ve seen the essential, but there\'s a lot more to explore.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
<br />
    <?php echo smartyTranslate(array('s'=>'Some ressources can help you go further:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

  </p>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 text-center text-md-center link-container">
        <a class="final-link" href="http://doc.prestashop.com/display/PS16/Getting+Started" target="_blank">
          <div class="starter-guide"></div>
          <span class="link"><?php echo smartyTranslate(array('s'=>'Starter Guide','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
        </a>
      </div>
      <div class="col-md-6 text-center text-md-center link-container">
        <a class="final-link" href="https://www.prestashop.com/forums/" target="_blank">
          <div class="forum"></div>
          <span class="link"><?php echo smartyTranslate(array('s'=>'Forum','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 text-center text-md-center link-container">
        <a class="final-link" href="https://www.prestashop.com/en/training-prestashop" target="_blank">
          <div class="training"></div>
          <span class="link"><?php echo smartyTranslate(array('s'=>'Training','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
        </a>
      </div>
      <div class="col-md-6 text-center text-md-center link-container">
        <a class="final-link" href="https://www.youtube.com/user/prestashop" target="_blank">
          <div class="video-tutorial"></div>
          <span class="link"><?php echo smartyTranslate(array('s'=>'Video tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
        </a>
      </div>
    </div>
  </div>
  <br />
  <div class="text-center text-md-center">
      <button class="btn btn-primary onboarding-button-next"><?php echo smartyTranslate(array('s'=>'I\'m ready','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
</div>
<?php }} ?>
