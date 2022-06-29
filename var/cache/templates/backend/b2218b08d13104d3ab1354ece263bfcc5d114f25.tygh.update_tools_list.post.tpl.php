<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:38:17
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/hooks/advanced_import/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12918236062b46cc90aa4f3-80457517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2218b08d13104d3ab1354ece263bfcc5d114f25' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/hooks/advanced_import/update_tools_list.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12918236062b46cc90aa4f3-80457517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'preset' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46cc91168a7_27465278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46cc91168a7_27465278')) {function content_62b46cc91168a7_27465278($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['id']->value!=0&&($_smarty_tpl->tpl_vars['preset']->value['company_id']!=0||$_smarty_tpl->tpl_vars['preset']->value['company_id']==0&&$_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_IMPORT_PRESET') ? constant('VC_OBJECT_TYPE_IMPORT_PRESET') : null),'object_id'=>$_smarty_tpl->tpl_vars['id']->value,'menu_button'=>true), 0);?>

<?php }?><?php }} ?>
