<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:05:46
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/companies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23371239462b5b6aab973b9-28399215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40ed295c03b27be336eca032b8af3d49725d27d0' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/companies.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '23371239462b5b6aab973b9-28399215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'selected_companies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b6aad40304_17218120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b6aad40304_17218120')) {function content_62b5b6aad40304_17218120($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('all_companies'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[company_ids]" : $tmp), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("pickers/companies/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('show_add_button'=>true,'multiple'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['selected_companies']->value,'view_mode'=>"list",'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'checkbox_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'no_item_text'=>$_smarty_tpl->__("all_companies")), 0);?>


<?php }} ?>
