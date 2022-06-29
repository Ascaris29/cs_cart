<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:40
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions_wrapper.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97178500362b461a077f093-61978231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de445f8e43f8ca39d8a214dce72a9f21227cfda4' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions_wrapper.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '97178500362b461a077f093-61978231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'enable_sticky_scroll' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461a07c3c32_06214790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461a07c3c32_06214790')) {function content_62b461a07c3c32_06214790($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['enable_sticky_scroll'] = new Smarty_variable($_smarty_tpl->tpl_vars['enable_sticky_scroll']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['enable_sticky_scroll'] = clone $_smarty_tpl->tpl_vars['enable_sticky_scroll'];?>
<?php }?>
<?php }} ?>
