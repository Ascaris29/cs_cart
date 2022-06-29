<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:12:14
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/exim/components/csv_output.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109515297862b466ae310af7-56456820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e1344a7543ce724268c4f8fecbf747939637ad5' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/exim/components/csv_output.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '109515297862b466ae310af7-56456820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b466ae393dd3_53317941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b466ae393dd3_53317941')) {function content_62b466ae393dd3_53317941($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('direct_download','screen','server'));
?>
<select name="export_options[output]" id="output">
    <option value="D" <?php if ($_smarty_tpl->tpl_vars['value']->value=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("direct_download");?>
</option>
    <option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("screen");?>
</option>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||!empty($_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'])) {?>
        <option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("server");?>
</option>
    <?php }?>
</select><?php }} ?>
