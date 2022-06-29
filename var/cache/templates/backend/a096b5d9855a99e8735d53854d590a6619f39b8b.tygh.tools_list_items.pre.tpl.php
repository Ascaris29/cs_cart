<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:43
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186413638162b461df6321b7-42217672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a096b5d9855a99e8735d53854d590a6619f39b8b' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '186413638162b461df6321b7-42217672',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461df64dd68_78971590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461df64dd68_78971590')) {function content_62b461df64dd68_78971590($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['import_product_href'] = new Smarty_variable("import_presets.manage&object_type=products", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['import_product_href'] = clone $_smarty_tpl->tpl_vars['import_product_href'];?>
    <?php $_smarty_tpl->tpl_vars['has_permission_an_import'] = new Smarty_variable(fn_check_permissions("import_presets","update","admin","POST"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['has_permission_an_import'] = clone $_smarty_tpl->tpl_vars['has_permission_an_import'];?>
<?php }?>
<?php }} ?>
