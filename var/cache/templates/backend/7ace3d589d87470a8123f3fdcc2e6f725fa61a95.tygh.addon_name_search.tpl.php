<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 17:53:49
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/manage/addon_name_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201845225362b5cffdbf3a74-55056582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ace3d589d87470a8123f3fdcc2e6f725fa61a95' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/manage/addon_name_search.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201845225362b5cffdbf3a74-55056582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_meta' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5cffdc41e98_72977016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5cffdc41e98_72977016')) {function content_62b5cffdc41e98_72977016($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_field','remove','addons.search_description'));
?>
<div class="sidebar-row addons-addon-name-search">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="addons_search_form" method="get" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');?>
 form--no-margin">
        <div class="controls">
            <input type="text"
                name="q"
                id="elm_addon"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
"
                autofocus
                class="input-full input--no-margin"
                placeholder="<?php echo $_smarty_tpl->__("admin_search_field");?>
"
            />
            <button type="button" class="hidden addons-addon-name-search__remove" id="elm_addon_clear" title="<?php echo $_smarty_tpl->__("remove");?>
">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-remove"),$_smarty_tpl);?>

            </button>
        </div>
    </form>
    <div class="muted description">
        <?php echo $_smarty_tpl->__("addons.search_description");?>

    </div>
</div>
<?php }} ?>
