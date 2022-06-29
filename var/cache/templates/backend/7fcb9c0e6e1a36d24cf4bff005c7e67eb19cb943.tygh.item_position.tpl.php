<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 22:47:55
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/products/components/picker/item_position.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125037750062b8b7ebb78b62-00503433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fcb9c0e6e1a36d24cf4bff005c7e67eb19cb943' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/products/components/picker/item_position.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125037750062b8b7ebb78b62-00503433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8b7ebb8d760_45420227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8b7ebb8d760_45420227')) {function content_62b8b7ebb8d760_45420227($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('position'));
?>
<div class="object-picker__products-position" data-th="<?php echo $_smarty_tpl->__("position");?>
:">
    <input type="text"
        name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[${data.product_id}]"
        value="${(data._index + 1) * 10}"
        size="3"
        class="input-micro"
    />
</div><?php }} ?>
