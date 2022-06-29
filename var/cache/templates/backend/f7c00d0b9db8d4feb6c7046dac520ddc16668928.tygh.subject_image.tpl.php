<?php /* Smarty version Smarty-3.1.21, created on 2022-06-27 00:02:02
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/subject_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146977072762b8c94a139d26-73208333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7c00d0b9db8d4feb6c7046dac520ddc16668928' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/subject_image.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '146977072762b8c94a139d26-73208333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'thread' => 0,
    'object_type' => 0,
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8c94a1b6590_18173137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8c94a1b6590_18173137')) {function content_62b8c94a1b6590_18173137($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['object_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['thread']->value['object_type'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['object'] = new Smarty_variable($_smarty_tpl->tpl_vars['thread']->value['object'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['object_type']->value===(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/product_subject_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value===(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/company_subject_image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php }?>
<?php }} ?>
