<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 22:47:55
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/products/components/picker/block_manager_picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1412243762b8b7ebaa41c3-15450040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6279362311814fd4cf6c6160bdf4d1da60dce28' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/products/components/picker/block_manager_picker.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1412243762b8b7ebaa41c3-15450040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_ids' => 0,
    'multiple' => 0,
    'view_mode' => 0,
    'show_positions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8b7ebb03737_27706400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8b7ebb03737_27706400')) {function content_62b8b7ebb03737_27706400($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_ids'=>explode(",",$_smarty_tpl->tpl_vars['item_ids']->value),'multiple'=>$_smarty_tpl->tpl_vars['multiple']->value,'view_mode'=>$_smarty_tpl->tpl_vars['view_mode']->value,'show_positions'=>$_smarty_tpl->tpl_vars['show_positions']->value,'allow_clear'=>false,'for_current_storefront'=>true), 0);?>

<?php }} ?>
