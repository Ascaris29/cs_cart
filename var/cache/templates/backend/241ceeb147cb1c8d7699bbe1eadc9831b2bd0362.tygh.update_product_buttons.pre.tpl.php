<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:56
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81486038062b461ec8cf6a9-56624536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241ceeb147cb1c8d7699bbe1eadc9831b2bd0362' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '81486038062b461ec8cf6a9-56624536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ec8d9f50_64996445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ec8d9f50_64996445')) {function content_62b461ec8d9f50_64996445($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Type\Type::PRODUCT_TYPE_VARIATION")) {?>
    <?php $_smarty_tpl->tpl_vars['allow_clone'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['allow_clone'] = clone $_smarty_tpl->tpl_vars['allow_clone'];?>
<?php }?>
<?php }} ?>
