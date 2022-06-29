<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:30
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_body.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143610762662b461d2521b96-81712234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69ed960b66b0d7e6dd2b2292b2099ccf7e5382fc' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/products/manage_body.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '143610762662b461d2521b96-81712234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461d25338b6_93387665',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461d25338b6_93387665')) {function content_62b461d25338b6_93387665($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.disapprove_product'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_data_premoderation/components/disapproval_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'title'=>$_smarty_tpl->__("vendor_data_premoderation.disapprove_product",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product']))), 0);?>

<?php }} ?>
