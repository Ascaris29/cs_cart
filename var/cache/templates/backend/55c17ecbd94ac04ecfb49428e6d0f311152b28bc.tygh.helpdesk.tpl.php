<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:59:17
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/buttons/helpdesk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127395691362b463a54e3f98-23364120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55c17ecbd94ac04ecfb49428e6d0f311152b28bc' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/buttons/helpdesk.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '127395691362b463a54e3f98-23364120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btn_text' => 0,
    'btn_href' => 0,
    'app' => 0,
    'btn_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b463a5503526_44900436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b463a5503526_44900436')) {function content_62b463a5503526_44900436($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('helpdesk_account.sign_in'));
?>
<?php $_smarty_tpl->tpl_vars['btn_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['btn_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("helpdesk_account.sign_in") : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['btn_href'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['btn_href']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["helpdesk.connect_url"] : $tmp), null, 0);?>
<a class="btn btn-primary <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_class']->value, ENT_QUOTES, 'UTF-8');?>
"
   href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['btn_href']->value), ENT_QUOTES, 'UTF-8');?>
"
>
    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 30 30"><g fill="#fff"><path d="M0 0h9.091v9.091H0zM10 10h9.091v9.091H10zM20.909 10H30v9.091h-9.091zM10 20.909h9.091V30H10zM20.909 20.909H30V30h-9.091z"/></g></svg>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_text']->value, ENT_QUOTES, 'UTF-8');?>

</a>
<?php }} ?>
