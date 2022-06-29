<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:41
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/profile_menu_extra_item.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82399500162b461a159c6a3-06680861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea48a938ff8f9c5bb81c7b5774741f55750c10d' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/profile_menu_extra_item.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '82399500162b461a159c6a3-06680861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461a15bd267_98914086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461a15bd267_98914086')) {function content_62b461a15bd267_98914086($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_panel_configurator.seller_info'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php if (fn_check_view_permissions("companies.update","GET")) {?>  
        <li><a href="<?php echo htmlspecialchars(fn_url("companies.update&company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor_panel_configurator.seller_info");?>
</a></li>
    <?php }?>
<?php }?><?php }} ?>
