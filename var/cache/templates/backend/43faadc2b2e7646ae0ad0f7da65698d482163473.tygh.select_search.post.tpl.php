<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:44
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151745402862b461e01da0e5-27116022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43faadc2b2e7646ae0ad0f7da65698d482163473' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/bestsellers/hooks/products/select_search.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '151745402862b461e01da0e5-27116022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461e01ed059_61821756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461e01ed059_61821756')) {function content_62b461e01ed059_61821756($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bestsellers'));
?>
<option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="bestsellers") {?>selected="selected"<?php }?> value="bestsellers"><?php echo $_smarty_tpl->__("bestsellers");?>
</option><?php }} ?>
