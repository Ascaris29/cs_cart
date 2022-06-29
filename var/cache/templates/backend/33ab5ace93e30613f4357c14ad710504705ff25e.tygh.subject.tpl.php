<?php /* Smarty version Smarty-3.1.21, created on 2022-06-27 00:02:02
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210520231662b8c94a223bf0-63513430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33ab5ace93e30613f4357c14ad710504705ff25e' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/subject.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '210520231662b8c94a223bf0-63513430',
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
  'unifunc' => 'content_62b8c94a2e1de0_25909471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8c94a2e1de0_25909471')) {function content_62b8c94a2e1de0_25909471($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.truncate.php';
?>

<?php $_smarty_tpl->tpl_vars['object_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['thread']->value['object_type'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['object'] = new Smarty_variable($_smarty_tpl->tpl_vars['thread']->value['object'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['thread']->value['subject']) {?>
    <small class="muted" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['thread']->value['subject'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['subject'],30,"...",true), ENT_QUOTES, 'UTF-8');?>

        <?php if ($_smarty_tpl->tpl_vars['object_type']->value) {?>
            —
        <?php }?>
    </small>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['object_type']->value===(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/product_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value===(defined('VC_OBJECT_TYPE_ORDER') ? constant('VC_OBJECT_TYPE_ORDER') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/order_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('order'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['object_type']->value===(defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/company_subject.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('company'=>$_smarty_tpl->tpl_vars['object']->value), 0);?>

<?php }?>
<?php }} ?>
