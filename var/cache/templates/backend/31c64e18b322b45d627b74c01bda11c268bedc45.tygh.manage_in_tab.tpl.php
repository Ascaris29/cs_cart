<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:52:05
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/tabs/manage_in_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169244606862b461f58a45d1-80912234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c64e18b322b45d627b74c01bda11c268bedc45' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/tabs/manage_in_tab.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '169244606862b461f58a45d1-80912234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461f58f9344_30909472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461f58f9344_30909472')) {function content_62b461f58f9344_30909472($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php echo $_smarty_tpl->getSubTemplate ("views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--content_product_tabs--></div>
<?php }} ?>
