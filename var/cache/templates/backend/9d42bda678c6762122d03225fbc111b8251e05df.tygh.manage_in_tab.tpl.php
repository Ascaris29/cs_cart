<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:52:03
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/block_manager/manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76071995762b461f3cd1e87-79622128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d42bda678c6762122d03225fbc111b8251e05df' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/block_manager/manage_in_tab.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '76071995762b461f3cd1e87-79622128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layouts' => 0,
    'config' => 0,
    'runtime' => 0,
    'dynamic_object_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461f3d49cb1_72477915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461f3d49cb1_72477915')) {function content_62b461f3d49cb1_72477915($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.count.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('switch_layout'));
?>
<div id="content_blocks">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['layouts']->value)>1) {?>
        <div class="content-variant-wrap content-variant-wrap--layout">
            <h6 class="muted"><?php echo $_smarty_tpl->__("switch_layout");?>
:</h6>
            <?php echo $_smarty_tpl->getSubTemplate ("common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('style'=>"graphic",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"s_layout="),'items'=>$_smarty_tpl->tpl_vars['layouts']->value,'selected_id'=>$_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'],'key_name'=>"name",'display_icons'=>false,'target_id'=>"content_blocks"), 0);?>

        </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('storefront_selector_submit_form_class'=>"cm-ajax",'storefront_selector_submit_form_result_ids'=>"content_blocks",'storefront_selector_submit_form_params'=>$_smarty_tpl->tpl_vars['dynamic_object_params']->value), 0);?>

<!--content_blocks--></div>
<?php }} ?>
