<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:05:46
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34730592562b5b6aa79f7f5-95600620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c9a2eeea46592085bb322e214be2895212ec3a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/theme.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '34730592562b5b6aa79f7f5-95600620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'theme_url' => 0,
    'id' => 0,
    'theme' => 0,
    'current_theme' => 0,
    'current_style' => 0,
    'readonly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b6aa834a07_35646234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b6aa834a07_35646234')) {function content_62b5b6aa834a07_35646234($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('store_theme','goto_theme_configuration'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[theme_name]" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['theme_url'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['theme_url']->value)===null||$tmp==='' ? "themes.manage?s_storefront=".((string)$_smarty_tpl->tpl_vars['id']->value) : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <div class="control-group">
        <label for="theme_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
               class="control-label"
        >
            <?php echo $_smarty_tpl->__("store_theme");?>

        </label>
        <div class="controls">
            <input type="hidden"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value, ENT_QUOTES, 'UTF-8');?>
"
            />
            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_theme']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_style']->value, ENT_QUOTES, 'UTF-8');?>
</p>
            <?php if (!$_smarty_tpl->tpl_vars['readonly']->value) {?>
                <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['theme_url']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("goto_theme_configuration");?>
</a>
            <?php }?>
        </div>
    </div>
<?php } else { ?>
    <input type="hidden"
           name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
           value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value, ENT_QUOTES, 'UTF-8');?>
"
    />
<?php }?>
<?php }} ?>
