<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:56
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35115397162b461ecba8ab5-32184017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1107e7505c411e0c056ba9b2b49a00c92585598' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_variations/hooks/products/update_product_buttons.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '35115397162b461ecba8ab5-32184017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'is_form_readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ecbc6d79_90102679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ecbc6d79_90102679')) {function content_62b461ecbc6d79_90102679($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save','save'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['variation_group_id']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-link",'but_target_form'=>"manage_variation_products_form"), 0);?>

<?php } elseif (!$_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>}
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[product_variations.add_product]",'but_role'=>"submit-link",'but_target_form'=>"manage_variation_products_form"), 0);?>

<?php }?>

<?php }} ?>
