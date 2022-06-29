<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:44
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198253794662b461e09edfd0-27178232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64443bc059d67c184f25c2c83b07129b842e1b26' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/buttons/search.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '198253794662b461e09edfd0-27178232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
    'but_meta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461e09fde64_52049206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461e09fde64_52049206')) {function content_62b461e09fde64_52049206($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_button'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("admin_search_button"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value), 0);?>
<?php }} ?>
