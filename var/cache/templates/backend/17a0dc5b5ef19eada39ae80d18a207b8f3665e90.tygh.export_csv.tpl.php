<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:23:29
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/exim/components/export_csv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97805708762b46951a81c11-53871444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a0dc5b5ef19eada39ae80d18a207b8f3665e90' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/exim/components/export_csv.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '97805708762b46951a81c11-53871444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'delimiter' => 0,
    'eol' => 0,
    'export_data' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46951b7ca66_83983813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46951b7ca66_83983813')) {function content_62b46951b7ca66_83983813($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['fields']->value) {
echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['fields']->value);
echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['export_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
echo implode($_smarty_tpl->tpl_vars['delimiter']->value,$_smarty_tpl->tpl_vars['data']->value);
echo htmlspecialchars($_smarty_tpl->tpl_vars['eol']->value, ENT_QUOTES, 'UTF-8');
} ?><?php }} ?>
