<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:56
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/product_features/components/variants_picker/item_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86463066262b461ec345884-43119829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41960f992e25ca94f9d34bda79b864452e19a484' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/product_features/components/variants_picker/item_image.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '86463066262b461ec345884-43119829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enable_image' => 0,
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ec37cbf5_21460989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ec37cbf5_21460989')) {function content_62b461ec37cbf5_21460989($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['enable_image']->value) {?>
    
        ${data.image_url
        ? `<img src="${data.image_url}" width="30" height="30" alt="${data.name}" class="object-picker__product-feature-image"/>`
            : `<div class="no-image object-picker__product-feature-no-image" style="width: 30px; height: 30px;"><span class="cs-icon glyph-image"></span></div>`
        }
    
<?php }?>
<div class="object-picker__product-feature-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div><?php }} ?>
