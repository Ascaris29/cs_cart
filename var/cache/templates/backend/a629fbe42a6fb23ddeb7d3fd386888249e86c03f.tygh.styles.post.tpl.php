<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:39
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207232196262b4619f2c53f3-49225061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a629fbe42a6fb23ddeb7d3fd386888249e86c03f' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/index/styles.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '207232196262b4619f2c53f3-49225061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4619f2cfa14_47805125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4619f2cfa14_47805125')) {function content_62b4619f2cfa14_47805125($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.style.php';
?><?php echo smarty_function_style(array('src'=>"addons/vendor_data_premoderation/styles.less"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['addon']->value['addon']=="vendor_data_premoderation") {?>
    <?php echo smarty_function_style(array('src'=>"addons/vendor_data_premoderation/vendor_data_premoderation.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
