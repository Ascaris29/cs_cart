<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:05:46
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/regions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119950161462b5b6aaa15a98-07425087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24dfb37a7e074396db8772dbe19cd324a12fe7b3' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/regions.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '119950161462b5b6aaa15a98-07425087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
    'selected_countries' => 0,
    'all_countries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b6aaa9b638_09273607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b6aaa9b638_09273607')) {function content_62b5b6aaa9b638_09273607($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('countries'));
?>


<?php $_smarty_tpl->tpl_vars['input_name'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['input_name']->value)===null||$tmp==='' ? "storefront_data[country_codes]" : $tmp), null, 0);?>

<input type="hidden"
       name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
       value=""
/>

<?php echo $_smarty_tpl->getSubTemplate ("common/double_selectboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("countries"),'first_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'first_data'=>$_smarty_tpl->tpl_vars['selected_countries']->value,'second_name'=>"all_countries",'second_data'=>$_smarty_tpl->tpl_vars['all_countries']->value), 0);?>

<?php }} ?>
