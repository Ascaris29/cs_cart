<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:53:18
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/theme_editor/components/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112941080162b4623e73be30-63278354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b02c3d8cc9756f0f6d6be981638926e4001ae771' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/theme_editor/components/colorpicker.tpl',
      1 => 1652778226,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '112941080162b4623e73be30-63278354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cp_id' => 0,
    'cp_name' => 0,
    'cp_value' => 0,
    'cp_storage' => 0,
    'cp_class' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4623e7a0347_83974241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4623e7a0347_83974241')) {function content_62b4623e7a0347_83974241($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="input-prepend">
    <?php $_smarty_tpl->tpl_vars['cp_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['cp_id']->value)===null||$tmp==='' ? "cp_".((string)$_smarty_tpl->tpl_vars['cp_name']->value) : $tmp), null, 0);?>
    <input type="text" maxlength="7" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp_storage']->value) {?>data-ca-storage="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_storage']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_class']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_class']->value, ENT_QUOTES, 'UTF-8');
}?>" />
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/theme_editor/components/colorpicker.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/theme_editor/components/colorpicker.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="input-prepend">
    <?php $_smarty_tpl->tpl_vars['cp_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['cp_id']->value)===null||$tmp==='' ? "cp_".((string)$_smarty_tpl->tpl_vars['cp_name']->value) : $tmp), null, 0);?>
    <input type="text" maxlength="7" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp_storage']->value) {?>data-ca-storage="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_storage']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_class']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_class']->value, ENT_QUOTES, 'UTF-8');
}?>" />
</div><?php }?><?php }} ?>
