<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:29:38
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_tools_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52727321762b46ac2f30998-29764822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c33bcee260bb185c407480ea48a91d816723ad5' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_tools_list.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '52727321762b46ac2f30998-29764822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review_id' => 0,
    'is_allowed_to_delete_product_reviews' => 0,
    'auth' => 0,
    'current_redirect_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46ac3116958_78123157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46ac3116958_78123157')) {function content_62b46ac3116958_78123157($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit','delete'));
?>


<?php if ($_smarty_tpl->tpl_vars['product_review_id']->value) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"product_reviews.update?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)));?>
</li>
    <?php if ($_smarty_tpl->tpl_vars['is_allowed_to_delete_product_reviews']->value&&$_smarty_tpl->tpl_vars['auth']->value['user_type']===smarty_modifier_enum("UserTypes::ADMIN")) {?>
        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"product_reviews.delete?product_review_id=".((string)$_smarty_tpl->tpl_vars['product_review_id']->value)."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value),'method'=>"POST"));?>

        </li>
    <?php }?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

<?php }?>
<?php }} ?>
