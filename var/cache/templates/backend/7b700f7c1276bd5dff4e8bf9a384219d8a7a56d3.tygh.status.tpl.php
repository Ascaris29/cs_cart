<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:05:46
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59338227262b5b6aa58aa79-30270720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b700f7c1276bd5dff4e8bf9a384219d8a7a56d3' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/status.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '59338227262b5b6aa58aa79-30270720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'id' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b6aa623ec5_47235330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b6aa623ec5_47235330')) {function content_62b5b6aa623ec5_47235330($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('storefront_status','storefront_status.tooltip','ttc_stores_status'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[status]" : $tmp), null, 0);?>

<div class="control-group">
    <label for="status_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="control-label"
    >
        <?php echo $_smarty_tpl->__("storefront_status");?>

    </label>
    <div class="controls">
        <input type="hidden"
               name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
               value="<?php echo htmlspecialchars(smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');?>
"
        />

        <?php echo $_smarty_tpl->getSubTemplate ("common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('checked'=>$_smarty_tpl->tpl_vars['status']->value===smarty_modifier_enum("StorefrontStatuses::OPEN"),'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value),'input_value'=>smarty_modifier_enum("StorefrontStatuses::OPEN"),'input_id'=>"status_".((string)$_smarty_tpl->tpl_vars['id']->value)), 0);?>


        <p>
            <?php echo $_smarty_tpl->__("storefront_status.tooltip");?>

        </p>

        <p class="muted description"><?php echo $_smarty_tpl->__("ttc_stores_status");?>
</p>
    </div>
</div>
<?php }} ?>
