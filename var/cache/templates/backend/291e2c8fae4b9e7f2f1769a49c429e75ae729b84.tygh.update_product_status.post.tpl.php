<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:54
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157297041062b461eabd63c3-37361161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '291e2c8fae4b9e7f2f1769a49c429e75ae729b84' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/products/update_product_status.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '157297041062b461eabd63c3-37361161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461eabf1576_50857180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461eabf1576_50857180')) {function content_62b461eabf1576_50857180($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.disapproval_reason'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason']&&($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['product_data']->value['status']===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL")||$_smarty_tpl->tpl_vars['product_data']->value['status']===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"))) {?>
    <div class="control-group">
        <label for="elm_disapproval_reason" class="control-label">
            <?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproval_reason");?>
:
        </label>
        <div class="controls">
            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['premoderation_reason'], ENT_QUOTES, 'UTF-8');?>
</p>
        </div>
    </div>
<?php }?><?php }} ?>
