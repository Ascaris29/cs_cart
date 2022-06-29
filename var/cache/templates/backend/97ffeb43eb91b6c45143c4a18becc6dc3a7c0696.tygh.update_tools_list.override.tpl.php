<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:56
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_debt_payout/hooks/products/update_tools_list.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123130788462b461ec950aa3-40788415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97ffeb43eb91b6c45143c4a18becc6dc3a7c0696' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_debt_payout/hooks/products/update_tools_list.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '123130788462b461ec950aa3-40788415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461eca40423_71670976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461eca40423_71670976')) {function content_62b461eca40423_71670976($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']==smarty_modifier_enum("Addons\\VendorDebtPayout\\ProductTypes::DEBT_PAYOUT")) {?>
    <!-- empty -->
<?php }?>
<?php }} ?>
