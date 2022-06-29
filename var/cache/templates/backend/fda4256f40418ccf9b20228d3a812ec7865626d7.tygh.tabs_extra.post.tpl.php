<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:04:30
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/discussion/hooks/companies/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197186379062b464dee88732-22469709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda4256f40418ccf9b20228d3a812ec7865626d7' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/discussion/hooks/companies/tabs_extra.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '197186379062b464dee88732-22469709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b464dee944e1_64722654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b464dee944e1_64722654')) {function content_62b464dee944e1_64722654($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
