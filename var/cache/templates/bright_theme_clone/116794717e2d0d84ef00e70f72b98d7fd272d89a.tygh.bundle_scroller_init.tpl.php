<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:52:15
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/product_bundles/components/common/bundle_scroller_init.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134953362362b461ff20c516-74413397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '116794717e2d0d84ef00e70f72b98d7fd272d89a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/product_bundles/components/common/bundle_scroller_init.tpl',
      1 => 1655987798,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '134953362362b461ff20c516-74413397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'bundle' => 0,
    'bundle_count' => 0,
    'item_quantity' => 0,
    'item_quantity_responsive' => 0,
    'scroller_item_attrs' => 0,
    'bundle_block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ff2cad13_12637502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ff2cad13_12637502')) {function content_62b461ff2cad13_12637502($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['bundle_count'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['bundle']->value['products']), null, 0);
if ($_smarty_tpl->tpl_vars['bundle_count']->value<=4) {
$_smarty_tpl->tpl_vars['item_quantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['bundle_count']->value, null, 0);
}
$_smarty_tpl->tpl_vars['item_quantity'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item_quantity']->value)===null||$tmp==='' ? 4 : $tmp), null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive'] = new Smarty_variable(array("desktop"=>$_smarty_tpl->tpl_vars['item_quantity']->value,"desktop_small"=>$_smarty_tpl->tpl_vars['item_quantity']->value-1,"tablet"=>$_smarty_tpl->tpl_vars['item_quantity']->value-1,"mobile"=>1), null, 0);
if ($_smarty_tpl->tpl_vars['item_quantity']->value>3) {
$_smarty_tpl->createLocalArrayVariable('item_quantity_responsive', null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop_small"] = $_smarty_tpl->tpl_vars['item_quantity']->value-1;
$_smarty_tpl->createLocalArrayVariable('item_quantity_responsive', null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["tablet"] = $_smarty_tpl->tpl_vars['item_quantity']->value-2;
} elseif ($_smarty_tpl->tpl_vars['item_quantity']->value===1) {
$_smarty_tpl->createLocalArrayVariable('item_quantity_responsive', null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop_small"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
$_smarty_tpl->createLocalArrayVariable('item_quantity_responsive', null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["tablet"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
$_smarty_tpl->createLocalArrayVariable('item_quantity_responsive', null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["mobile"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
}
$_smarty_tpl->tpl_vars['scroller_item_attrs'] = new Smarty_variable(array("data-ca-scroller-item"=>$_smarty_tpl->tpl_vars['item_quantity']->value,"data-ca-scroller-item-desktop"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop"],"data-ca-scroller-item-desktop-small"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop_small"],"data-ca-scroller-item-tablet"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["tablet"],"data-ca-scroller-item-mobile"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["mobile"]), null, 0);
$_smarty_tpl->tpl_vars['bundle_block'] = new Smarty_variable(array('block_id'=>"product_bundle_".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id']),'properties'=>array('item_quantity'=>$_smarty_tpl->tpl_vars['item_quantity']->value,'not_scroll_automatically'=>smarty_modifier_enum("YesNo::YES"),'outside_navigation'=>true)), null, 0);
$_smarty_tpl->tpl_vars['item_quantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['item_quantity'] = clone $_smarty_tpl->tpl_vars['item_quantity'];
$_smarty_tpl->tpl_vars['item_quantity_responsive'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity_responsive']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['item_quantity_responsive'] = clone $_smarty_tpl->tpl_vars['item_quantity_responsive'];
$_smarty_tpl->tpl_vars['scroller_item_attrs'] = new Smarty_variable($_smarty_tpl->tpl_vars['scroller_item_attrs']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['scroller_item_attrs'] = clone $_smarty_tpl->tpl_vars['scroller_item_attrs'];
$_smarty_tpl->tpl_vars['bundle_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['bundle_block']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['bundle_block'] = clone $_smarty_tpl->tpl_vars['bundle_block'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/components/common/bundle_scroller_init.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/components/common/bundle_scroller_init.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['bundle_count'] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['bundle']->value['products']), null, 0);
if ($_smarty_tpl->tpl_vars['bundle_count']->value<=4) {
$_smarty_tpl->tpl_vars['item_quantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['bundle_count']->value, null, 0);
}
$_smarty_tpl->tpl_vars['item_quantity'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item_quantity']->value)===null||$tmp==='' ? 4 : $tmp), null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive'] = new Smarty_variable(array("desktop"=>$_smarty_tpl->tpl_vars['item_quantity']->value,"desktop_small"=>$_smarty_tpl->tpl_vars['item_quantity']->value-1,"tablet"=>$_smarty_tpl->tpl_vars['item_quantity']->value-1,"mobile"=>1), null, 0);
if ($_smarty_tpl->tpl_vars['item_quantity']->value>3) {
$_smarty_tpl->createLocalArrayVariable('item_quantity_responsive', null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop_small"] = $_smarty_tpl->tpl_vars['item_quantity']->value-1;
$_smarty_tpl->createLocalArrayVariable('item_quantity_responsive', null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["tablet"] = $_smarty_tpl->tpl_vars['item_quantity']->value-2;
} elseif ($_smarty_tpl->tpl_vars['item_quantity']->value===1) {
$_smarty_tpl->createLocalArrayVariable('item_quantity_responsive', null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop_small"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
$_smarty_tpl->createLocalArrayVariable('item_quantity_responsive', null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["tablet"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
$_smarty_tpl->createLocalArrayVariable('item_quantity_responsive', null, 0);
$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["mobile"] = $_smarty_tpl->tpl_vars['item_quantity']->value;
}
$_smarty_tpl->tpl_vars['scroller_item_attrs'] = new Smarty_variable(array("data-ca-scroller-item"=>$_smarty_tpl->tpl_vars['item_quantity']->value,"data-ca-scroller-item-desktop"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop"],"data-ca-scroller-item-desktop-small"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["desktop_small"],"data-ca-scroller-item-tablet"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["tablet"],"data-ca-scroller-item-mobile"=>$_smarty_tpl->tpl_vars['item_quantity_responsive']->value["mobile"]), null, 0);
$_smarty_tpl->tpl_vars['bundle_block'] = new Smarty_variable(array('block_id'=>"product_bundle_".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id']),'properties'=>array('item_quantity'=>$_smarty_tpl->tpl_vars['item_quantity']->value,'not_scroll_automatically'=>smarty_modifier_enum("YesNo::YES"),'outside_navigation'=>true)), null, 0);
$_smarty_tpl->tpl_vars['item_quantity'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['item_quantity'] = clone $_smarty_tpl->tpl_vars['item_quantity'];
$_smarty_tpl->tpl_vars['item_quantity_responsive'] = new Smarty_variable($_smarty_tpl->tpl_vars['item_quantity_responsive']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['item_quantity_responsive'] = clone $_smarty_tpl->tpl_vars['item_quantity_responsive'];
$_smarty_tpl->tpl_vars['scroller_item_attrs'] = new Smarty_variable($_smarty_tpl->tpl_vars['scroller_item_attrs']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['scroller_item_attrs'] = clone $_smarty_tpl->tpl_vars['scroller_item_attrs'];
$_smarty_tpl->tpl_vars['bundle_block'] = new Smarty_variable($_smarty_tpl->tpl_vars['bundle_block']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['bundle_block'] = clone $_smarty_tpl->tpl_vars['bundle_block'];
}?><?php }} ?>
