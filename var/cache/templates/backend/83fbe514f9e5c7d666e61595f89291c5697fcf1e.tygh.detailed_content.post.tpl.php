<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:56
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3934626862b461ec3f09c8-70928566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83fbe514f9e5c7d666e61595f89291c5697fcf1e' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/social_buttons/hooks/products/detailed_content.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3934626862b461ec3f09c8-70928566',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ec3fde64_10814456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ec3fde64_10814456')) {function content_62b461ec3fde64_10814456($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"product_data",'object_data'=>$_smarty_tpl->tpl_vars['product_data']->value), 0);?>

<?php }?>
<?php }} ?>
