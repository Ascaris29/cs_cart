<?php /* Smarty version Smarty-3.1.21, created on 2022-06-27 18:15:57
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177869111062b9c9ade953c1-22536649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62afe31a5f2fa37456914555f8d4831cd2afa050' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '177869111062b9c9ade953c1-22536649',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b9c9adf294e1_64886161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b9c9adf294e1_64886161')) {function content_62b9c9adf294e1_64886161($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>


<?php echo $_smarty_tpl->getSubTemplate ("common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0);?>
<?php }} ?>
