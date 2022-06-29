<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 15:26:34
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13330156562b5ad7a4bd993-08954825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fceb11edd7f4f238b72a2df430fc1f4a1a64bbd' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/colorpicker.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13330156562b5ad7a4bd993-08954825',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_meta' => 0,
    'cp_attrs' => 0,
    'cp_name' => 0,
    'cp_id' => 0,
    'cp_value' => 0,
    'show_picker' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5ad7a4f49d8_79223486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5ad7a4f49d8_79223486')) {function content_62b5ad7a4f49d8_79223486($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.render_tag_attrs.php';
?><div class="colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_meta']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo smarty_modifier_render_tag_attrs((($tmp = @$_smarty_tpl->tpl_vars['cp_attrs']->value)===null||$tmp==='' ? array() : $tmp));?>
>
    <input
        type="hidden"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['show_picker']->value) {?>data-ca-spectrum-show-initial="true"<?php } else { ?>data-ca-view="palette"<?php }?>
        class="cm-colorpicker"
    >
</div><?php }} ?>
