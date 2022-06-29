<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:44
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_mainbox_title.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5669711962b461e0a546d9-72910474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a87ca10c360e9fc5ca93f6190f49cf46275a6b4' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_mainbox_title.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5669711962b461e0a546d9-72910474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461e0a74781_74736139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461e0a74781_74736139')) {function content_62b461e0a74781_74736139($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'][$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section']]['title'], ENT_QUOTES, 'UTF-8');?>

<?php }?>
<?php }} ?>
