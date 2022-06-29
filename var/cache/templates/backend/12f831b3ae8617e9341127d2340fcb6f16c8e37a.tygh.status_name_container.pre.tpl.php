<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:30
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_name_container.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156943539462b461d27438a0-67886590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12f831b3ae8617e9341127d2340fcb6f16c8e37a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/products/status_name_container.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '156943539462b461d27438a0-67886590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'runtime' => 0,
    'approved_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461d2765d65_84091366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461d2765d65_84091366')) {function content_62b461d2765d65_84091366($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php $_smarty_tpl->tpl_vars['approved_status'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']!==smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED")&&$_smarty_tpl->tpl_vars['product']->value['status']!==smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"), null, 0);
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&!$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->tpl_vars['non_editable'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['non_editable'] = clone $_smarty_tpl->tpl_vars['non_editable'];?>
<?php }
if ($_smarty_tpl->tpl_vars['product']->value['premoderation_reason']&&!$_smarty_tpl->tpl_vars['approved_status']->value) {?>
    <?php $_smarty_tpl->tpl_vars['popup_additional_class'] = new Smarty_variable("dropdown--inline", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['popup_additional_class'] = clone $_smarty_tpl->tpl_vars['popup_additional_class'];?>

    <?php ob_start();
echo nl2br($_smarty_tpl->tpl_vars['product']->value['premoderation_reason']);
$_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_tmp10), 0);?>

<?php }?><?php }} ?>
