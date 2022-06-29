<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 21:39:33
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/wishlist/hooks/gift_certificates/buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169864050262b8a7e5713730-91622666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea73df52d392e610f9d57e9da208e0d224c1730b' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/wishlist/hooks/gift_certificates/buttons.post.tpl',
      1 => 1655987802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '169864050262b8a7e5713730-91622666',
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
  'unifunc' => 'content_62b8a7e573ed26_55208942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8a7e573ed26_55208942')) {function content_62b8a7e573ed26_55208942($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wishlist_but_name'=>"dispatch[gift_certificates.wishlist_add]"), 0);?>

<input type="hidden" name="result_ids" value="cart_status*,wish_list*,account_info*,gift_certificate*" />
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/gift_certificates/buttons.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/gift_certificates/buttons.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('wishlist_but_name'=>"dispatch[gift_certificates.wishlist_add]"), 0);?>

<input type="hidden" name="result_ids" value="cart_status*,wish_list*,account_info*,gift_certificate*" />
<?php }?><?php }} ?>
