<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 21:33:34
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/discussion/hooks/pages/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58138094562b8a67ebcd840-44809444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be658436c7a9633d0e42450ef1be454575546688' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/discussion/hooks/pages/tabs_extra.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '58138094562b8a67ebcd840-44809444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8a67ec1f3f5_18807896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8a67ec1f3f5_18807896')) {function content_62b8a67ec1f3f5_18807896($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_type']->value!=(defined('PAGE_TYPE_LINK') ? constant('PAGE_TYPE_LINK') : null)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
