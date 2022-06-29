<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:05:46
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/is_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24775282862b5b6aa50a223-70701016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09b09df5fa4f1621db145f43b2ba431cc872e2f4' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/is_default.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '24775282862b5b6aa50a223-70701016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'is_default' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b6aa577a95_55415173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b6aa577a95_55415173')) {function content_62b5b6aa577a95_55415173($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('is_default_storefront'));
?>

<div class="control-group">
    <label for="is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("is_default_storefront");?>

    </label>
    <div class="controls" id="is_default_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <input type="checkbox"
               name="storefront_data[is_default]"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['is_default']->value) {?>checked<?php }?>
        />
    </div>
</div>
<?php }} ?>
