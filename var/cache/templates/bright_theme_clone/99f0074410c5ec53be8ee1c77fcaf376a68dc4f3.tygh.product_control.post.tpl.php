<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:52:15
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/product_bundles/addons/product_variations/hooks/product_bundles/product_control.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:412228162b461ff723636-46279057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99f0074410c5ec53be8ee1c77fcaf376a68dc4f3' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/product_bundles/addons/product_variations/hooks/product_bundles/product_control.post.tpl',
      1 => 1655987798,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '412228162b461ff723636-46279057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'bundle_product' => 0,
    'bundle' => 0,
    'bundle_product_key' => 0,
    'config' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ff773989_52890988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ff773989_52890988')) {function content_62b461ff773989_52890988($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.specify_features','product_bundles.specify_features','product_bundles.specify_features','product_bundles.specify_features'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['any_variation']&&($_smarty_tpl->tpl_vars['bundle_product']->value['parent_variation_product']||($_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features_variants']&&$_smarty_tpl->tpl_vars['bundle']->value['parent_bundle_id']))) {?>
    <a id="opener_product_bundle_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="cm-dialog-opener cm-dialog-auto-size ty-product-bundles-product-item__control-link"
        href="<?php echo htmlspecialchars(fn_url("product_bundles.get_feature_variants?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])."&bundle_product_key=".((string)$_smarty_tpl->tpl_vars['bundle_product_key']->value)."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-id="content_product_bundle_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dialog-title="<?php echo $_smarty_tpl->__("product_bundles.specify_features");?>
"
        rel="nofollow"
    >
        <?php echo $_smarty_tpl->__("product_bundles.specify_features");?>

    </a>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_bundles/addons/product_variations/hooks/product_bundles/product_control.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_bundles/addons/product_variations/hooks/product_bundles/product_control.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['bundle_product']->value['any_variation']&&($_smarty_tpl->tpl_vars['bundle_product']->value['parent_variation_product']||($_smarty_tpl->tpl_vars['bundle_product']->value['product_data']['variation_features_variants']&&$_smarty_tpl->tpl_vars['bundle']->value['parent_bundle_id']))) {?>
    <a id="opener_product_bundle_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="cm-dialog-opener cm-dialog-auto-size ty-product-bundles-product-item__control-link"
        href="<?php echo htmlspecialchars(fn_url("product_bundles.get_feature_variants?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&product_id=".((string)$_smarty_tpl->tpl_vars['bundle_product']->value['product_id'])."&bundle_product_key=".((string)$_smarty_tpl->tpl_vars['bundle_product_key']->value)."&return_url=".((string)rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']))), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-target-id="content_product_bundle_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle']->value['bundle_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bundle_product_key']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dialog-title="<?php echo $_smarty_tpl->__("product_bundles.specify_features");?>
"
        rel="nofollow"
    >
        <?php echo $_smarty_tpl->__("product_bundles.specify_features");?>

    </a>
<?php }?>
<?php }?><?php }} ?>
