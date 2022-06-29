<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:04:20
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54686939062b464d4408a01-78996420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79ea2d68ab5848be1a72910384e6f1b76da9ebbf' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/hooks/companies/list_extra_td.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '54686939062b464d4408a01-78996420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b464d44a1fc5_54562039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b464d44a1fc5_54562039')) {function content_62b464d44a1fc5_54562039($_smarty_tpl) {?><td width="10%" class="row-status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</td><?php }} ?>
