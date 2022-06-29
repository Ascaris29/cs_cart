<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:04:20
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160845325262b464d43b4ee6-51285535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4684f2e9db62a65acb5318a6041698f4f9f1915' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_th.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '160845325262b464d43b4ee6-51285535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c_url' => 0,
    'search' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b464d43c5771_04988049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b464d43c5771_04988049')) {function content_62b464d43c5771_04988049($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.plan_short'));
?>
<th width="10%"><a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=plan&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor_plans.plan_short");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="plan") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
<?php }} ?>
