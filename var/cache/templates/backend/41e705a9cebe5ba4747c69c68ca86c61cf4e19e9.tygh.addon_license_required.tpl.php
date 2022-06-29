<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 17:53:49
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/addons/addon_license_required.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73529467662b5cffd40abe5-91329495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41e705a9cebe5ba4747c69c68ca86c61cf4e19e9' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/addons/addon_license_required.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '73529467662b5cffd40abe5-91329495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5cffd48e616_26459309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5cffd48e616_26459309')) {function content_62b5cffd48e616_26459309($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('mve_ultimate_or_plus_license_required','mve_ultimate_license_required','ultimate_license_required'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&fn_check_addon_snapshot($_smarty_tpl->tpl_vars['key']->value,"plus")) {?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_or_plus_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_or_plus_license_required"),'target_id'=>"content_mve_ultimate_or_plus_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php } elseif (fn_allowed_for("MULTIVENDOR")) {?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("mve_ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.mve_ultimate_license_required"),'target_id'=>"content_mve_ultimate_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['license_required'] = new Smarty_variable(array('promo_popup_title'=>$_smarty_tpl->__("ultimate_license_required",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'href'=>fn_url("functionality_restrictions.ultimate_license_required"),'target_id'=>"content_ultimate_license_required"), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['license_required'] = clone $_smarty_tpl->tpl_vars['license_required'];?>
<?php }?>
<?php }} ?>
