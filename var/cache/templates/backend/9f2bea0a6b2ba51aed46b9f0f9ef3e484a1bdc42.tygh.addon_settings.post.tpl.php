<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 17:54:47
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107226559562b5d037bd1aa8-17637485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f2bea0a6b2ba51aed46b9f0f9ef3e484a1bdc42' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/reward_points/hooks/addons/addon_settings.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '107226559562b5d037bd1aa8-17637485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5d037be46e3_52840084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5d037be46e3_52840084')) {function content_62b5d037be46e3_52840084($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.script.php';
?><?php if ($_smarty_tpl->tpl_vars['_addon']->value==="reward_points") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/reward_points/index.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
