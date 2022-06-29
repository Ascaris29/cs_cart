<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:57
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/buttons/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74154937762b461eddc7336-29054628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1643ad37f517c4441840978b3eb8bce6249e2cff' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/buttons/create.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '74154937762b461eddc7336-29054628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_text' => 0,
    '_but_text' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461edde9308_90429907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461edde9308_90429907')) {function content_62b461edde9308_90429907($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('create'));
?>
<?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
	<?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->tpl_vars['but_text']->value, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->__("create"), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
