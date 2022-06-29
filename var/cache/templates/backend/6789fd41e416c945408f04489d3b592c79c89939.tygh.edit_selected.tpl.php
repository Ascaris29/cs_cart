<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:56:31
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88555360462b4710fad5d47-98927944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6789fd41e416c945408f04489d3b592c79c89939' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/categories/components/context_menu/edit_selected.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '88555360462b4710fad5d47-98927944',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4710faee7f9_31559373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4710faee7f9_31559373')) {function content_62b4710faee7f9_31559373($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-categories mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>"category_tree_form",'data'=>array("data-ca-bulkedit-disable-save-button"=>true)));?>

    </span>
</li>
<?php }} ?>
