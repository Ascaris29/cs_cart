<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:38:12
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/views/import_presets/components/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199890736562b46cc4c11632-96788767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5570d8df5d798743ac6689ff04fd209de6005914' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/views/import_presets/components/form.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '199890736562b46cc4c11632-96788767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preffix' => 0,
    'wrapper_extra_id' => 0,
    'object_type' => 0,
    'wrapper_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46cc4c21806_08631279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46cc4c21806_08631279')) {function content_62b46cc4c21806_08631279($_smarty_tpl) {?><form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="manage_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preffix']->value, ENT_QUOTES, 'UTF-8');?>
_import_presets_form"
        enctype="multipart/form-data"
        class="cm-skip-check-items import-preset cm-ajax cm-comet"
        data-ca-advanced-import-element="management_form"
        id="manage_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preffix']->value, ENT_QUOTES, 'UTF-8');?>
_import_presets_form<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_extra_id']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <?php echo $_smarty_tpl->tpl_vars['wrapper_content']->value;?>

</form><?php }} ?>
