<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:53:18
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/theme_editor/components/fileuploader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52512496262b4623e469927-21080460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '546bc028ce0d85bc3aeadc5de3c7e7f715449b9a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/theme_editor/components/fileuploader.tpl',
      1 => 1652778226,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '52512496262b4623e469927-21080460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'prefix' => 0,
    'var_name' => 0,
    'id_var_name' => 0,
    'disabled' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4623e5652d6_27413190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4623e5652d6_27413190')) {function content_62b4623e5652d6_27413190($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove_this_item','theme_editor.browse','theme_editor.browse','remove_this_item','theme_editor.browse','theme_editor.browse'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["id_var_name"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).$_tmp1, null, 0);?>

<input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="te-fileuploader clearfix"><div class="upload-file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title=""><p class="cm-fu-file " style="display: none;"><span class="upload-filename filename-link"></span><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-cancel",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); Tygh.fileuploader.toggle_links(this.id, 'show');"),'icon_text'=>"&nbsp;"),$_smarty_tpl);?>
</p></div><div id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?><span class="te-btn ty-left fileinput-btn cm-tooltip disabled" title="<?php echo $_smarty_tpl->__('theme_editor.create_style_first');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-upload"),$_smarty_tpl);
echo $_smarty_tpl->__("theme_editor.browse");?>
</span><?php } else { ?><span class="te-btn ty-left fileinput-btn"><input type="file" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); Tygh.fileuploader.toggle_links(this.id, 'hide');" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-upload"),$_smarty_tpl);
echo $_smarty_tpl->__("theme_editor.browse");?>
</span><?php }?></div></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/theme_editor/components/fileuploader.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/theme_editor/components/fileuploader.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars(md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["id_var_name"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['prefix']->value).$_tmp2, null, 0);?>

<input type="hidden" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" id="type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">

<div class="te-fileuploader clearfix"><div class="upload-file-section" id="message_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title=""><p class="cm-fu-file " style="display: none;"><span class="upload-filename filename-link"></span><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-cancel",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); Tygh.fileuploader.toggle_links(this.id, 'show');"),'icon_text'=>"&nbsp;"),$_smarty_tpl);?>
</p></div><div id="link_container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['disabled']->value) {?><span class="te-btn ty-left fileinput-btn cm-tooltip disabled" title="<?php echo $_smarty_tpl->__('theme_editor.create_style_first');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-upload"),$_smarty_tpl);
echo $_smarty_tpl->__("theme_editor.browse");?>
</span><?php } else { ?><span class="te-btn ty-left fileinput-btn"><input type="file" name="file_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); Tygh.fileuploader.toggle_links(this.id, 'hide');" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-upload"),$_smarty_tpl);
echo $_smarty_tpl->__("theme_editor.browse");?>
</span><?php }?></div></div>

<?php }?><?php }} ?>