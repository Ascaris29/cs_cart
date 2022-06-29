<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:04:30
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150631971362b464de8c4bc5-94016552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03294878d3cf74fca53f488927f2169412367f4b' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/hooks/profiles/profile_fields.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '150631971362b464de8c4bc5-94016552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b464de8cd830_27832817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b464de8cd830_27832817')) {function content_62b464de8cd830_27832817($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['field']->value['field_type']==(defined('PROFILE_FIELD_TYPE_VENDOR_PLAN') ? constant('PROFILE_FIELD_TYPE_VENDOR_PLAN') : null)) {?>
    <!--hide vendor plan field in admin area-->
<?php }?>
<?php }} ?>
