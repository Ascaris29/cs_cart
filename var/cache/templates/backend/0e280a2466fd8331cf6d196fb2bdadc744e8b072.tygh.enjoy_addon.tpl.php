<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 17:54:48
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/detailed_page/sidebar/enjoy_addon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15729258962b5d0384f5f52-32309701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e280a2466fd8331cf6d196fb2bdadc744e8b072' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/detailed_page/sidebar/enjoy_addon.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15729258962b5d0384f5f52-32309701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
    'personal_review' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5d0385a7df6_68676722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5d0385a7df6_68676722')) {function content_62b5d0385a7df6_68676722($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['addon']->value['is_core_addon']&&$_smarty_tpl->tpl_vars['addon']->value['identified']&&!$_smarty_tpl->tpl_vars['personal_review']->value) {?>
    <div class="sidebar-row marketplace">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/enjoying_addon_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"addons_write_review_sidebar"), 0);?>

    </div>
<?php }?>
<?php }} ?>
