<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:39
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29124171462b4619fbb5203-77483615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f53ea64d7fd5df7c803837d6d0918ec6536e9aac' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/previewer.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '29124171462b4619fbb5203-77483615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4619fbbe5b0_41165322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4619fbbe5b0_41165322')) {function content_62b4619fbbe5b0_41165322($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
