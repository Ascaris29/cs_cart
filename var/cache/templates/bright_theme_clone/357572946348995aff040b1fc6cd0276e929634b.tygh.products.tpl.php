<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 23:23:04
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/blocks/products/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189274076062b8c028acfb14-16902424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '357572946348995aff040b1fc6cd0276e929634b' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/blocks/products/products.tpl',
      1 => 1655987763,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '189274076062b8c028acfb14-16902424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    '_show_product_options' => 0,
    '_show_add_to_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8c028bad981_30341012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8c028bad981_30341012')) {function content_62b8c028bad981_30341012($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_options']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["_show_product_options"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_show_product_options"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'no_sorting'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'no_pagination'=>true,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_product_labels'=>true,'product_labels_mini'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_product_options'=>$_smarty_tpl->tpl_vars['_show_product_options']->value,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number']), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_options']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["_show_product_options"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_show_product_options"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'no_sorting'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'no_pagination'=>true,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_product_labels'=>true,'product_labels_mini'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_product_options'=>$_smarty_tpl->tpl_vars['_show_product_options']->value,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number']), 0);
}?><?php }} ?>
