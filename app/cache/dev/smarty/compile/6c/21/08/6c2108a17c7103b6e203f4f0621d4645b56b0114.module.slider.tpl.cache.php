<<<<<<< HEAD:app/cache/dev/smarty/compile/6c/21/08/6c2108a17c7103b6e203f4f0621d4645b56b0114.module.slider.tpl.cache.php
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 22:09:36
         compiled from "module:ps_imageslider/views/templates/hook/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206342745258fb72308885f8-34768553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2017-04-22 12:44:20
         compiled from "module:ps_imageslider/views/templates/hook/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125988206058faedb45970e7-03992608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> dev:app/cache/dev/smarty/compile/6c/21/08/6c2108a17c7103b6e203f4f0621d4645b56b0114.module.slider.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1492474529,
      2 => 'module',
    ),
  ),
<<<<<<< HEAD:app/cache/dev/smarty/compile/6c/21/08/6c2108a17c7103b6e203f4f0621d4645b56b0114.module.slider.tpl.cache.php
  'nocache_hash' => '206342745258fb72308885f8-34768553',
=======
  'nocache_hash' => '125988206058faedb45970e7-03992608',
>>>>>>> dev:app/cache/dev/smarty/compile/6c/21/08/6c2108a17c7103b6e203f4f0621d4645b56b0114.module.slider.tpl.php
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
<<<<<<< HEAD:app/cache/dev/smarty/compile/6c/21/08/6c2108a17c7103b6e203f4f0621d4645b56b0114.module.slider.tpl.cache.php
  'unifunc' => 'content_58fb72308d7e38_73171684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb72308d7e38_73171684')) {function content_58fb72308d7e38_73171684($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl -->
=======
  'unifunc' => 'content_58faedb45e1d68_34193764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58faedb45e1d68_34193764')) {function content_58faedb45e1d68_34193764($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl -->
>>>>>>> dev:app/cache/dev/smarty/compile/6c/21/08/6c2108a17c7103b6e203f4f0621d4645b56b0114.module.slider.tpl.php

<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
  <div id="carousel" data-ride="carousel" class="carousel slide hidden-sm-down" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-wrap="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['homeslider']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
    <ul class="carousel-inner" role="listbox">
      <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider']->value['slides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slide']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['slide']->index++;
 $_smarty_tpl->tpl_vars['slide']->first = $_smarty_tpl->tpl_vars['slide']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['homeslider']['first'] = $_smarty_tpl->tpl_vars['slide']->first;
?>
        <li class="carousel-item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['homeslider']['first']) {?>active<?php }?>">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <figure>
              <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['slide']->value['legend']), ENT_QUOTES, 'UTF-8');?>
">
              <?php if ($_smarty_tpl->tpl_vars['slide']->value['title']||$_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                <figcaption class="caption">
                  <h2 class="display-1 text-uppercase"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2>
                  <div class="caption-description"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</div>
                </figcaption>
              <?php }?>
            </figure>
          </a>
        </li>
      <?php } ?>
    </ul>
    <div class="direction">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Previous','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
      </a>
    </div>
  </div>
<?php }?>
<!-- end /home/steven/GitRepository/taorai/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl --><?php }} ?>
