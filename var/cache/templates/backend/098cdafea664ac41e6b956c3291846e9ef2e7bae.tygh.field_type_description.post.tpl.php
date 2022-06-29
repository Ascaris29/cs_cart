<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:13:24
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_type_description.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77781149162b5b8744a4983-78833378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '098cdafea664ac41e6b956c3291846e9ef2e7bae' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_type_description.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '77781149162b5b8744a4983-78833378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b8744bcf68_63594037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b8744bcf68_63594037')) {function content_62b5b8744bcf68_63594037($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==(defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <?php echo $_smarty_tpl->__("vendor_plan");?>

<?php }?>
<?php }} ?>
