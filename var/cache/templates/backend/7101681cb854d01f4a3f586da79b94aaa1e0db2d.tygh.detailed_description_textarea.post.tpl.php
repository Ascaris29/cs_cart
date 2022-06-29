<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 21:33:34
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152098487262b8a67e48a323-04195247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7101681cb854d01f4a3f586da79b94aaa1e0db2d' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/blog/hooks/pages/detailed_description_textarea.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '152098487262b8a67e48a323-04195247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8a67e4fda21_92343602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8a67e4fda21_92343602')) {function content_62b8a67e4fda21_92343602($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ttc_post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <p class="muted description"><?php echo $_smarty_tpl->__("ttc_post_description");?>
</p>
<?php }?><?php }} ?>
