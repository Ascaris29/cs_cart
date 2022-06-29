<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:38:17
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/views/import_presets/components/option_fileeditor_open.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41964255162b46cc905e797-00736836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15623db65ec556ca936e915a707dd5750bc6f198' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/views/import_presets/components/option_fileeditor_open.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '41964255162b46cc905e797-00736836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_id' => 0,
    'field_name_prefix' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46cc9071973_64623206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46cc9071973_64623206')) {function content_62b46cc9071973_64623206($_smarty_tpl) {?><div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
_dialog" class="hidden"></div>
<input id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
"
       class="input-large"
       type="text"
       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_name_prefix']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]"
       value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['option']->value['selected_value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] : $tmp), ENT_QUOTES, 'UTF-8');?>
"
/><?php }} ?>
