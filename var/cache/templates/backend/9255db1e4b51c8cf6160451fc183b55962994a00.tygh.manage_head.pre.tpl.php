<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:29
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_panel_configurator/hooks/products/manage_head.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194594181962b461d1f12083-03264293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9255db1e4b51c8cf6160451fc183b55962994a00' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_panel_configurator/hooks/products/manage_head.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '194594181962b461d1f12083-03264293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
    'show_list_price_column' => 0,
    'image_width' => 0,
    'image_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461d1f275e2_33124264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461d1f275e2_33124264')) {function content_62b461d1f275e2_33124264($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php if (fn_allowed_for("MULTIVENDOR")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['auth']->value['user_type']==smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['show_list_price_column'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_list_price_column']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_list_price_column'] = clone $_smarty_tpl->tpl_vars['show_list_price_column'];?>
    <?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_width']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_width'] = clone $_smarty_tpl->tpl_vars['image_width'];?>
    <?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_height']->value, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_height'] = clone $_smarty_tpl->tpl_vars['image_height'];?>
<?php }?>
<?php }} ?>
