<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:56
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/hooks/products/update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45084331862b461ecae6f13-92801253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '951404fc2df269ecd5b44eabae7e057c7b17fc2a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/hooks/products/update_tools_list.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '45084331862b461ecae6f13-92801253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ecaf1150_03954616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ecaf1150_03954616')) {function content_62b461ecaf1150_03954616($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null),'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'menu_button'=>true,'divider'=>true), 0);?>
<?php }} ?>
