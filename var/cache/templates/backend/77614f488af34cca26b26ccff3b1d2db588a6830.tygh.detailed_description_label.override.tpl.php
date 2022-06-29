<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 21:33:34
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/blog/hooks/pages/detailed_description_label.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75281253762b8a67e44b8b3-60668357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77614f488af34cca26b26ccff3b1d2db588a6830' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/blog/hooks/pages/detailed_description_label.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '75281253762b8a67e44b8b3-60668357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8a67e45fc40_32615992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8a67e45fc40_32615992')) {function content_62b8a67e45fc40_32615992($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('post_description'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==(defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>
    <label class="control-label" for="elm_page_descr"><?php echo $_smarty_tpl->__("post_description");?>
:</label>
<?php }?>
<?php }} ?>
