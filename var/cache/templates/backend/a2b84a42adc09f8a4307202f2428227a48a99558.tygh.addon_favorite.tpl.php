<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 17:53:49
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/addons/addon_favorite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190014910462b5cffd1ead70-45896761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2b84a42adc09f8a4307202f2428227a48a99558' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/addons/addon_favorite.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '190014910462b5cffd1ead70-45896761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a' => 0,
    'result_ids' => 0,
    'new_favorite_status' => 0,
    'detailed' => 0,
    'icon_star_empty' => 0,
    'icon_star' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5cffd2236e5_50914660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5cffd2236e5_50914660')) {function content_62b5cffd2236e5_50914660($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_addon_to_favorites','remove_addon_from_favorites','favorites'));
?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['is_favorite']===smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->tpl_vars['new_favorite_status'] = new Smarty_variable(smarty_modifier_enum("YesNo::NO"), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['new_favorite_status'] = new Smarty_variable(smarty_modifier_enum("YesNo::YES"), null, 0);?>
<?php }?>
<form action="<?php echo htmlspecialchars(fn_url("addons.set_favorite"), ENT_QUOTES, 'UTF-8');?>
"
    method="post"
    name="addons_set_favorite"
    class="form-edit form-horizontal cm-ajax form--no-margin"
    enctype="multipart/form-data"
>
    <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_ids']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" name="addon" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['addon'], ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" name="favorite" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_favorite_status']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <input type="hidden" name="detailed" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['detailed']->value, ENT_QUOTES, 'UTF-8');?>
"/>

    <button type="submit" class="btn btn-text btn-mini">
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['a']->value['is_favorite']===smarty_modifier_enum('YesNo::YES')) {?><?php echo " hidden";?><?php }
$_tmp17=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['icon_star_empty'] = new Smarty_variable("icon-star-empty".$_tmp17, null, 0);?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['a']->value['is_favorite']!==smarty_modifier_enum('YesNo::YES')) {?><?php echo " hidden";?><?php }
$_tmp18=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['icon_star'] = new Smarty_variable("icon-star".$_tmp18, null, 0);?>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_star_empty']->value,'title'=>$_smarty_tpl->__("add_addon_to_favorites")),$_smarty_tpl);?>

        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_star']->value,'title'=>$_smarty_tpl->__("remove_addon_from_favorites")),$_smarty_tpl);?>

    </button>

    
    <span class="hidden">
        <?php if ($_smarty_tpl->tpl_vars['a']->value['is_favorite']===smarty_modifier_enum("YesNo::YES")) {?>
            <?php echo $_smarty_tpl->__("favorites");?>

        <?php }?>
    </span>
</form>
<?php }} ?>
