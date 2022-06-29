<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:57
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_bundles/hooks/product_picker/table_header.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84745512962b461ed6b8800-13347509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '962ee6301396cd7a5d5ee16b1565409a96dab9fb' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_bundles/hooks/product_picker/table_header.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '84745512962b461ed6b8800-13347509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'extra_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ed6ce5f6_15031805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ed6ce5f6_15031805')) {function content_62b461ed6ce5f6_15031805($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('price','discount','value','discounted_price','product_bundles.show_on_product_page'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']==="product_bundles"||$_smarty_tpl->tpl_vars['extra_mode']->value==="product_bundles") {?>
    <th><?php echo $_smarty_tpl->__("price");?>
</th>
    <th><?php echo $_smarty_tpl->__("discount");?>
</th>
    <th><?php echo $_smarty_tpl->__("value");?>
</th>
    <th><?php echo $_smarty_tpl->__("discounted_price");?>
</th>
    <th><?php echo $_smarty_tpl->__("product_bundles.show_on_product_page");?>
</th>
<?php }?><?php }} ?>
