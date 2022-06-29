<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 23:51:06
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/gift_certificates/hooks/statuses/button.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45469229962b8c6ba5a3710-88260073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56c4a747a9f94db36732a92da2e84a3564616a04' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/gift_certificates/hooks/statuses/button.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '45469229962b8c6ba5a3710-88260073',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8c6ba5b51c5_40781946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8c6ba5b51c5_40781946')) {function content_62b8c6ba5b51c5_40781946($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_gift_certificate'));
?>
<?php if ($_REQUEST['type']=='G') {?>
	<li><a href="<?php echo htmlspecialchars(fn_url("gift_certificates.add"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_gift_certificate");?>
</a></li>
<?php }?><?php }} ?>
