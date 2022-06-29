<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 17:53:49
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/addons/addon_supplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182393135762b5cffd507d42-68181872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15043f77bf3c425cbceb2f2e489787a9cdf6eda0' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/addons/addon_supplier.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '182393135762b5cffd507d42-68181872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5cffd5b4de7_14335468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5cffd5b4de7_14335468')) {function content_62b5cffd5b4de7_14335468($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('verified_developer','addon_has_admin_review'));
?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['supplier']) {?>
    <div class="addons-addon-supplier">
        <a href="<?php echo htmlspecialchars(fn_url("addons.manage&supplier=".((string)$_smarty_tpl->tpl_vars['a']->value['supplier'])), ENT_QUOTES, 'UTF-8');?>
" class="addons-addon-supplier__name row-status">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['supplier'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['identified']||$_smarty_tpl->tpl_vars['a']->value['is_core_addon']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ok addons-addon-supplier__identified addons-addon-supplier__identified--".((string)mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8')),'title'=>$_smarty_tpl->__("verified_developer")),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['a']->value['personal_review']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comment addons-addon-supplier__has-admin-review",'title'=>$_smarty_tpl->__("addon_has_admin_review")),$_smarty_tpl);?>

        <?php }?>
    </div>
<?php }?>
<?php }} ?>
