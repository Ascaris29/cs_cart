<?php /* Smarty version Smarty-3.1.21, created on 2022-06-27 00:02:02
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/product_subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7127220362b8c94a2ef6b0-73848197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c327f17e31b3e1729aa85ca12b11e7bad00738e' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/product_subject.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7127220362b8c94a2ef6b0-73848197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8c94a359ea6_72303752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8c94a359ea6_72303752')) {function content_62b8c94a359ea6_72303752($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.truncate.php';
?>

<a href="<?php echo htmlspecialchars(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
">
    <small>
        <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],50,"...",true), ENT_QUOTES, 'UTF-8');?>

    </small>
</a>
<?php }} ?>
