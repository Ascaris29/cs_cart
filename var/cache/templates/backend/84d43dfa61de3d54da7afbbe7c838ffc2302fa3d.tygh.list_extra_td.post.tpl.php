<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:04:20
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167463388162b464d43f7059-57946286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84d43dfa61de3d54da7afbbe7c838ffc2302fa3d' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_rating/hooks/companies/list_extra_td.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '167463388162b464d43f7059-57946286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b464d43fd988_67853878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b464d43fd988_67853878')) {function content_62b464d43fd988_67853878($_smarty_tpl) {?><td width="19%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['absolute_vendor_rating'], ENT_QUOTES, 'UTF-8');?>
</td>
<?php }} ?>
