<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 21:39:33
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/pickers/products/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24018341562b8a7e56051c3-58564862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cd822b8bf2b8d008068bfc74ed1a328cb457e66' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/pickers/products/js.tpl',
      1 => 1655987780,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '24018341562b8a7e56051c3-58564862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'clone' => 0,
    'root_id' => 0,
    'delete_id' => 0,
    'product' => 0,
    'view_only' => 0,
    'options' => 0,
    'options_array' => 0,
    'input_name' => 0,
    'option_id' => 0,
    'option' => 0,
    'product_id' => 0,
    'amount_input' => 0,
    'amount' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8a7e56bd7e7_38466174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8a7e56bd7e7_38466174')) {function content_62b8a7e56bd7e7_38466174($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
<td>
    <ul>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value, ENT_QUOTES, 'UTF-8');?>

            <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
                <a href="javascript: Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'p');" class="ty-delete-big" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-delete-big__icon"),$_smarty_tpl);?>
</a>
            <?php }?>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['options']->value) {?>
        <li><?php echo $_smarty_tpl->tpl_vars['options']->value;?>
</li>
        <?php }?>
    </ul>
    <?php if (is_array($_smarty_tpl->tpl_vars['options_array']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_smarty_tpl->tpl_vars["option_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
 $_smarty_tpl->tpl_vars["option_id"]->value = $_smarty_tpl->tpl_vars["option"]->key;
?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
        <?php } ?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product_id']->value) {?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['amount_input']->value=="hidden") {?>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['amount_input']->value=="text") {?>
<td class="ty-center">
    <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
" size="3" class="short"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
</td>
    <?php }?>
</tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="pickers/products/js.tpl" id="<?php echo smarty_function_set_id(array('name'=>"pickers/products/js.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
<td>
    <ul>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value, ENT_QUOTES, 'UTF-8');?>

            <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
                <a href="javascript: Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['root_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'p');" class="ty-delete-big" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-delete-big__icon"),$_smarty_tpl);?>
</a>
            <?php }?>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['options']->value) {?>
        <li><?php echo $_smarty_tpl->tpl_vars['options']->value;?>
</li>
        <?php }?>
    </ul>
    <?php if (is_array($_smarty_tpl->tpl_vars['options_array']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_smarty_tpl->tpl_vars["option_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value) {
$_smarty_tpl->tpl_vars["option"]->_loop = true;
 $_smarty_tpl->tpl_vars["option_id"]->value = $_smarty_tpl->tpl_vars["option"]->key;
?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
        <?php } ?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product_id']->value) {?>
        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['amount_input']->value=="hidden") {?>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['amount_input']->value=="text") {?>
<td class="ty-center">
    <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
" size="3" class="short"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
</td>
    <?php }?>
</tr>
<?php }?><?php }} ?>
