<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:39
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8480270462b4619f23ebd5-62342903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb389cfe6e2bde59cc98e00b6d8b48796d66a48b' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8480270462b4619f23ebd5-62342903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4619f249146_56761608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4619f249146_56761608')) {function content_62b4619f249146_56761608($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.style.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
