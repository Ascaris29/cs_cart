<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:39
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96650905262b4619f2eb0d9-95113921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d28917a22eead13bb00559ca672d6659d3b5acd' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '96650905262b4619f2eb0d9-95113921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locator_shipping' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4619f2f5046_76008383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4619f2f5046_76008383')) {function content_62b4619f2f5046_76008383($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.style.php';
?><?php if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value&&$_smarty_tpl->tpl_vars['shipping']->value['company_id']==0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
