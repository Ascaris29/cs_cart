<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:05:46
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81678024962b5b6aa462a46-77839115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '170c2fef622f54eda880d601af176d29af6c69be' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/url.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '81678024962b5b6aa462a46-77839115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'readonly' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b6aa4f52b8_28696477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b6aa4f52b8_28696477')) {function content_62b5b6aa4f52b8_28696477($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_puny_decode')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.puny_decode.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_url'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[url]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label cm-required"
    ><?php echo $_smarty_tpl->__("storefront_url");?>
</label>
    <div class="controls">
        <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
            <?php echo htmlspecialchars(smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <input type="text"
                   id="url_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                   name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                   class="input-large"
                   value="<?php echo htmlspecialchars(smarty_modifier_puny_decode($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
"
            />
        <?php }?>
    </div>
</div>
<?php }} ?>
