<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 21:33:34
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8425442762b8a67e632e79-06026637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b0bf22b8af1c0137ba8b8b29bb3e7ef910bdcd' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8425442762b8a67e632e79-06026637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8a67e64fa03_87648322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8a67e64fa03_87648322')) {function content_62b8a67e64fa03_87648322($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=(defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

    <?php }?>
<?php }?>
<?php }} ?>
