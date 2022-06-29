<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:30
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_select_item.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34939854962b461d27b6f88-26671630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a6b19e06814d023a10d679d14a2caf7682b214b' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_select_item.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '34939854962b461d27b6f88-26671630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status_id' => 0,
    'runtime' => 0,
    'product' => 0,
    'status_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461d27d96a9_48289363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461d27d96a9_48289363')) {function content_62b461d27d96a9_48289363($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['status_id']->value===smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED")&&!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <a data-ca-target-id="disapproval_reason_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
       href="#"
       class="cm-dialog-opener cm-dialog-auto-height status-link-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['status_id']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['status']===$_smarty_tpl->tpl_vars['status_id']->value) {?>active<?php }?>"
       onclick="if (Tygh.$(this).parent().hasClass('disabled')) { Tygh.$(this).removeClass('cm-dialog-opener'); return false} else { Tygh.$(this).addClass('cm-dialog-opener'); }"
    >
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['status_name']->value, ENT_QUOTES, 'UTF-8');?>

    </a>
<?php }?>
<?php }} ?>
