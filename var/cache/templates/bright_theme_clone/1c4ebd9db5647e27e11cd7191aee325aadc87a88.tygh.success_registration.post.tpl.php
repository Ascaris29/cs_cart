<?php /* Smarty version Smarty-3.1.21, created on 2022-06-27 17:56:18
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/wishlist/hooks/profiles/success_registration.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102086884362b9c5126e2b22-19581034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c4ebd9db5647e27e11cd7191aee325aadc87a88' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/wishlist/hooks/profiles/success_registration.post.tpl',
      1 => 1655987802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '102086884362b9c5126e2b22-19581034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b9c51271a230_00987384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b9c51271a230_00987384')) {function content_62b9c51271a230_00987384($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('wishlist','wishlist_note','wishlist','wishlist_note'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><li class="ty-success-registration__item">
    <a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("wishlist");?>
</a>
    <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("wishlist_note");?>
</span>
</li><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/profiles/success_registration.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/profiles/success_registration.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><li class="ty-success-registration__item">
    <a href="<?php echo htmlspecialchars(fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" class="success-registration__a"><?php echo $_smarty_tpl->__("wishlist");?>
</a>
    <span class="ty-success-registration__info"><?php echo $_smarty_tpl->__("wishlist_note");?>
</span>
</li><?php }?><?php }} ?>
