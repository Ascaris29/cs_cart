<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 17:43:30
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/views/import_presets/get_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22562558662b47c12d269f4-79456177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe067f0a5b3b49c670f852beb45874df977bfc67' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/views/import_presets/get_fields.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '22562558662b47c12d269f4-79456177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_only' => 0,
    'show_buttons_container' => 0,
    'allow_href' => 0,
    'fields' => 0,
    'preset' => 0,
    'allow_href_backup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b47c1301d805_38033811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b47c1301d805_38033811')) {function content_62b47c1301d805_38033811($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('import'));
?>
<div id="content_fields">
    <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/fields_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('view_only'=>$_smarty_tpl->tpl_vars['view_only']->value), 0);?>

<!--content_fields--></div>
<?php if ($_smarty_tpl->tpl_vars['show_buttons_container']->value) {?>
    <div class="buttons-container">
        <?php $_smarty_tpl->tpl_vars['allow_href_backup'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['allow_href']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['allow_href'] = new Smarty_variable(true, null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cancel_action'=>"close",'hide_first_button'=>!(($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? array() : $tmp),'but_text'=>$_smarty_tpl->__("import"),'but_meta'=>"cm-submit",'but_onclick'=>"$".".ceAdvancedImport('setFieldsForImport', ".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id']).")",'but_name'=>"dispatch[advanced_import.import]"), 0);?>

        <?php $_smarty_tpl->tpl_vars['allow_href'] = new Smarty_variable($_smarty_tpl->tpl_vars['allow_href_backup']->value, null, 0);?>
    </div>
<?php }?><?php }} ?>
