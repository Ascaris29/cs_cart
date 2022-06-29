<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:52:04
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/block_manager/components/device_icons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155697323662b461f42328f5-73985725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c73c1be51005f63f89b43a2be86831f3bde270d0' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/block_manager/components/device_icons.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '155697323662b461f42328f5-73985725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'devices' => 0,
    'wrapper_class' => 0,
    'device' => 0,
    'all_devices' => 0,
    'is_available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461f424bef9_92486478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461f424bef9_92486478')) {function content_62b461f424bef9_92486478($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['devices'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['item']->value['availability'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['all_devices'] = new Smarty_variable(array_filter($_smarty_tpl->tpl_vars['devices']->value)==$_smarty_tpl->tpl_vars['devices']->value, null, 0);?>

<div class="device-specific-block__devices <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php  $_smarty_tpl->tpl_vars['is_available'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['is_available']->_loop = false;
 $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['devices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['is_available']->key => $_smarty_tpl->tpl_vars['is_available']->value) {
$_smarty_tpl->tpl_vars['is_available']->_loop = true;
 $_smarty_tpl->tpl_vars['device']->value = $_smarty_tpl->tpl_vars['is_available']->key;
?>
        <div class="device-specific-block__devices__device device-specific-block__devices__device--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
 icon-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['device']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['all_devices']->value||!$_smarty_tpl->tpl_vars['is_available']->value) {?>hidden<?php }?>"></div>
    <?php } ?>
</div>
<?php }} ?>
