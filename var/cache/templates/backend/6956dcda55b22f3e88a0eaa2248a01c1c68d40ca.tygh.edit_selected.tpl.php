<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:43
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/products/components/context_menu/edit_selected.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7014081462b461df4897f1-63630215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6956dcda55b22f3e88a0eaa2248a01c1c68d40ca' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/products/components/context_menu/edit_selected.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7014081462b461df4897f1-63630215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461df499ff8_62930071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461df499ff8_62930071')) {function content_62b461df499ff8_62930071($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('edit_selected'));
?>


<li class="btn bulk-edit__btn bulk-edit__btn--edit-products mobile-hide">
    <span class="bulk-edit__btn-content">
        <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'class'=>"cm-process-items",'text'=>$_smarty_tpl->__("edit_selected"),'target_id'=>"content_select_fields_to_edit",'form'=>$_smarty_tpl->tpl_vars['params']->value['form']));?>

    </span>
</li>
<?php }} ?>
