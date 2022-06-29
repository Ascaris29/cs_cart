<?php /* Smarty version Smarty-3.1.21, created on 2022-06-27 00:02:02
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/product_subject_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108311394662b8c94a1c7735-43687951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de1e09092e2a63009ed8f24846495434c7e64653' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/product_subject_image.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108311394662b8c94a1c7735-43687951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8c94a202056_17838962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8c94a202056_17838962')) {function content_62b8c94a202056_17838962($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'],'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']))), 0);?>
<?php }} ?>
