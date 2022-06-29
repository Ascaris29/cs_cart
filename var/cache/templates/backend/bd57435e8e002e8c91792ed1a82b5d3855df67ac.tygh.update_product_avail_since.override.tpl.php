<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:55
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_variations/hooks/products/update_product_avail_since.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190022805462b461eb61ee73-45455177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd57435e8e002e8c91792ed1a82b5d3855df67ac' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_variations/hooks/products/update_product_avail_since.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '190022805462b461eb61ee73-45455177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461eb62a6f8_49165692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461eb62a6f8_49165692')) {function content_62b461eb62a6f8_49165692($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("avail_since")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }?>
<?php }} ?>
