<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:55
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185625248362b461eb863883-67874381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15cb0977e841172209f674f3817ea5826db63927' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_variations/hooks/products/update_product_popularity.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '185625248362b461eb863883-67874381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461eb86c9d2_71797981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461eb86c9d2_71797981')) {function content_62b461eb86c9d2_71797981($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("popularity")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
