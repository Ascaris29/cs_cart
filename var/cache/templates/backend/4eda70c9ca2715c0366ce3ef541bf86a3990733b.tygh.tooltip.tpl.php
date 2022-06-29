<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:55
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195140909962b461ebb0dde9-45417370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4eda70c9ca2715c0366ce3ef541bf86a3990733b' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/tooltip.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '195140909962b461ebb0dde9-45417370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ebb24e87_18918776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ebb24e87_18918776')) {function content_62b461ebb24e87_18918776($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign"),$_smarty_tpl);?>
</a><?php }?>
<?php }} ?>
