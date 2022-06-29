<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:05:46
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/redirect_customer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13092592162b5b6aa979659-24387112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01ae4aeb0d91ef5a9c46d54e9824c43c9fb0b5d1' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/redirect_customer.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13092592162b5b6aa979659-24387112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'redirect_customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b6aaa01378_55572589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b6aaa01378_55572589')) {function content_62b5b6aaa01378_55572589($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('redirect_customer_from_storefront'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[redirect_customer]" : $tmp), null, 0);?>

<div class="control-group">
    <div class="controls">
        <input type="hidden"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
        />
        <label for="redirect_customer_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="checkbox"
        >
            <input type="checkbox"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   id="redirect_customer_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                   class="cm-switch-availability"
                   <?php if ($_smarty_tpl->tpl_vars['redirect_customer']->value) {?>checked<?php }?>
            /><?php echo $_smarty_tpl->__("redirect_customer_from_storefront");?>

        </label>
    </div>
</div>
<?php }} ?>
