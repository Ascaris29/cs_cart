<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:42
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/select2/categories_bulkedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36291840462b461dec7bde3-81582543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12067768b89e23bbfdeb478cfb782d9326fd527a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/select2/categories_bulkedit.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '36291840462b461dec7bde3-81582543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'select_id' => 0,
    'select2_select_id' => 0,
    'tabindex' => 0,
    'bulk_edit_ids_flat' => 0,
    'select_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461dec9a508_37429091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461dec9a508_37429091')) {function content_62b461dec9a508_37429091($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/backend/categories.js"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"product_data[category_ids][]",'simple_class'=>"cm-field-container",'multiple'=>true,'id'=>((string)$_smarty_tpl->tpl_vars['select_id']->value),'data-ca-picker-id'=>"categories_".((string)$_smarty_tpl->tpl_vars['select2_select_id']->value),'tabindex'=>$_smarty_tpl->tpl_vars['tabindex']->value,'item_ids'=>$_smarty_tpl->tpl_vars['bulk_edit_ids_flat']->value,'meta'=>"object-categories-add object-categories-add--multiple object-categories-add--bulk-edit cm-object-categories-add-container",'select_class'=>"cm-bulk-edit-object-categories-add ".((string)$_smarty_tpl->tpl_vars['select_class']->value),'show_advanced'=>true,'allow_add'=>false,'allow_sorting'=>true,'result_class'=>"object-picker__result--inline",'selection_class'=>"object-picker__selection--product-categories",'required'=>true,'close_on_select'=>false,'allow_multiple_created_objects'=>true,'created_object_holder_selector'=>"[name='product_data[add_new_category][]']",'is_bulk_edit'=>true,'has_selection_controls'=>true,'has_removable_items'=>false,'is_tristate_checkbox'=>true), 0);?>
<?php }} ?>
