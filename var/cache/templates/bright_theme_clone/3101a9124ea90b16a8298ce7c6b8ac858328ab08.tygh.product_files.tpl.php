<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:52:15
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/views/products/components/product_files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73078507362b461ffbf6f22-48850515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3101a9124ea90b16a8298ce7c6b8ac858328ab08' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/views/products/components/product_files.tpl',
      1 => 1655987781,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '73078507362b461ffbf6f22-48850515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'files' => 0,
    'file' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ffc74e83_12065907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ffc74e83_12065907')) {function content_62b461ffc74e83_12065907($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_formatfilesize')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.formatfilesize.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('filename','filesize','licence_agreement','readme','filename','filesize','licence_agreement','readme'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['files']->value) {?>
<table class="ty-table">
<tr>
    <th><?php echo $_smarty_tpl->__("filename");?>
</th>
    <th><?php echo $_smarty_tpl->__("filesize");?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
<tr>
    <td style="width: 80%">
        <a class="cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("orders.get_file?file_id=".((string)$_smarty_tpl->tpl_vars['file']->value['file_id'])."&preview=Y"), ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</strong></a>
        <?php if ($_smarty_tpl->tpl_vars['file']->value['readme']||$_smarty_tpl->tpl_vars['file']->value['license']) {?>
        <ul>
        <?php if ($_smarty_tpl->tpl_vars['file']->value['license']) {?>
            <li><a onclick="Tygh.$('#license_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'UTF-8');?>
').toggle(); return false;"><?php echo $_smarty_tpl->__("licence_agreement");?>
</a></li>
            <div class="hidden" id="license_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['license'];?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['file']->value['readme']) {?>
            <li><a onclick="Tygh.$('#readme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'UTF-8');?>
').toggle(); return false;"><?php echo $_smarty_tpl->__("readme");?>
</a></li>
            <div class="hidden" id="readme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['readme'];?>
</div>
        <?php }?>
        </ul>
        <?php }?>
    </td>
    <td class="ty-valign-top">
         <strong><?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['file']->value['file_size']);?>
</strong>
    </td>
</tr>
<?php } ?>
</table>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_files.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_files.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['files']->value) {?>
<table class="ty-table">
<tr>
    <th><?php echo $_smarty_tpl->__("filename");?>
</th>
    <th><?php echo $_smarty_tpl->__("filesize");?>
</th>
</tr>
<?php  $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["file"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["file"]->key => $_smarty_tpl->tpl_vars["file"]->value) {
$_smarty_tpl->tpl_vars["file"]->_loop = true;
?>
<tr>
    <td style="width: 80%">
        <a class="cm-no-ajax" href="<?php echo htmlspecialchars(fn_url("orders.get_file?file_id=".((string)$_smarty_tpl->tpl_vars['file']->value['file_id'])."&preview=Y"), ENT_QUOTES, 'UTF-8');?>
"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_name'], ENT_QUOTES, 'UTF-8');?>
</strong></a>
        <?php if ($_smarty_tpl->tpl_vars['file']->value['readme']||$_smarty_tpl->tpl_vars['file']->value['license']) {?>
        <ul>
        <?php if ($_smarty_tpl->tpl_vars['file']->value['license']) {?>
            <li><a onclick="Tygh.$('#license_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'UTF-8');?>
').toggle(); return false;"><?php echo $_smarty_tpl->__("licence_agreement");?>
</a></li>
            <div class="hidden" id="license_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['license'];?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['file']->value['readme']) {?>
            <li><a onclick="Tygh.$('#readme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'UTF-8');?>
').toggle(); return false;"><?php echo $_smarty_tpl->__("readme");?>
</a></li>
            <div class="hidden" id="readme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['readme'];?>
</div>
        <?php }?>
        </ul>
        <?php }?>
    </td>
    <td class="ty-valign-top">
         <strong><?php echo smarty_modifier_formatfilesize($_smarty_tpl->tpl_vars['file']->value['file_size']);?>
</strong>
    </td>
</tr>
<?php } ?>
</table>
<?php }
}?><?php }} ?>
