<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:56
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184822796962b461ec728440-14938402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cdb238f8ade78fd38ea2e2833ea02265fa3f39e' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/required_products/hooks/products/tabs_content.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '184822796962b461ec728440-14938402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
    'required_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ec73a942_52235884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ec73a942_52235884')) {function content_62b461ec73a942_52235884($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="required_products") {?>hidden<?php }?>" id="content_required_products">
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"required_product_ids[]",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'multiple'=>true,'view_mode'=>"external",'select_group_class'=>"btn-toolbar"), 0);?>

</div><?php }} ?>
