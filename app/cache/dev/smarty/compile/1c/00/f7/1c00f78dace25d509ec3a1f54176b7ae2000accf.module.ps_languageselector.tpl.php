<?php /* Smarty version Smarty-3.1.19, created on 2017-04-25 22:11:52
         compiled from "module:ps_languageselector/ps_languageselector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54148216458ff6738e4be94-11341800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c00f78dace25d509ec3a1f54176b7ae2000accf' => 
    array (
      0 => 'module:ps_languageselector/ps_languageselector.tpl',
      1 => 1493121521,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '54148216458ff6738e4be94-11341800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_language' => 0,
    'languages' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58ff6738e67a24_66982606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ff6738e67a24_66982606')) {function content_58ff6738e67a24_66982606($_smarty_tpl) {?><!-- begin /home/steven/GitRepository/taorai/themes/classic/modules/ps_languageselector/ps_languageselector.tpl -->
<div id="_desktop_language_selector">
  <div class="language-selector-wrapper">
    <span class="hidden-md-up"><?php echo smartyTranslate(array('s'=>'Language:','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
    <div class="language-selector dropdown js-dropdown">
      <span class="expand-more hidden-sm-down" data-toggle="dropdown"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</span>
      <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="hidden-sm-down">
        <i class="material-icons expand-more">&#xE5C5;</i>
      </a>
      <ul class="dropdown-menu hidden-sm-down">
        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
          <li <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> class="current" <?php }?>>
            <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl);?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</a>
          </li>
        <?php } ?>
      </ul>
      <select class="link hidden-md-up" style="background: #ebebeb url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAAPklEQ…Q8IEmSMOsiuEfg3gL3oXC7wK0bd1G4o8X9F4yIkyQfSrIByQBjp7QuND8AAAAASUVORK5CYII=) no-repeat scroll right .5rem center/1.25rem 1.25rem;padding: .5rem 1rem;border-radius: 20px;">
        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
          <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'language','id'=>$_smarty_tpl->tpl_vars['language']->value['id_lang']),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']==$_smarty_tpl->tpl_vars['current_language']->value['id_lang']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name_simple'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
      </select>
    </div>
  </div>
</div>
<!-- end /home/steven/GitRepository/taorai/themes/classic/modules/ps_languageselector/ps_languageselector.tpl --><?php }} ?>
