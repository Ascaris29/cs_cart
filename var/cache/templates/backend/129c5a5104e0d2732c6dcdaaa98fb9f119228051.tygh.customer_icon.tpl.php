<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:29:38
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68039182462b46ac2cb3509-11836863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129c5a5104e0d2732c6dcdaaa98fb9f119228051' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '68039182462b46ac2cb3509-11836863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46ac2ce2db1_17155869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46ac2ce2db1_17155869')) {function content_62b46ac2ce2db1_17155869($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.verified_purchase','anonymous'));
?>


<?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer']||$_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_buyer']===smarty_modifier_enum("YesNo::YES")) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ok-sign muted",'title'=>$_smarty_tpl->__("product_reviews.verified_purchase")),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['is_anon']) {?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-eye-close muted",'title'=>$_smarty_tpl->__("anonymous")),$_smarty_tpl);?>

    <?php }?>

<?php }?>
<?php }} ?>
