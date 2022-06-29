<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:14:20
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_types.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186596946662b5b8acd29ee8-91837973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06b40293754e168c6aff101b420f04fd22623967' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/hooks/profile_fields/field_types.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '186596946662b5b8acd29ee8-91837973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profile_type' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b8acd93c15_43182159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b8acd93c15_43182159')) {function content_62b5b8acd93c15_43182159($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan'));
?>
<?php if ($_smarty_tpl->tpl_vars['profile_type']->value==smarty_modifier_enum("ProfileTypes::CODE_SELLER")) {?>
    <option value="<?php echo htmlspecialchars((defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==(defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("vendor_plan");?>
</option>
<?php }?>
<?php }} ?>
