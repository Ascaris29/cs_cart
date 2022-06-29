<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:39
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/hidpi/hooks/common/image.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126456783862b4619f67e592-22979682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c9e23fbcec05380ade4e1a296e97a32642d9041' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/hidpi/hooks/common/image.pre.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '126456783862b4619f67e592-22979682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image_data' => 0,
    'image' => 0,
    'width' => 0,
    'height' => 0,
    'image_data2x' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4619f6b2533_41579104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4619f6b2533_41579104')) {function content_62b4619f6b2533_41579104($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['image_data']->value['is_thumbnail']) {?>
    <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['width']*2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['height'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['height']*2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['image']->value['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['image']->value,$_smarty_tpl->tpl_vars['image']->value['image_x'],$_smarty_tpl->tpl_vars['image']->value['image_y']), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_data'] = clone $_smarty_tpl->tpl_vars['image_data'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['image']->value['original_image_path']) {?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable($_smarty_tpl->tpl_vars['image']->value, null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('image_data2x', null, 0);
$_smarty_tpl->tpl_vars['image_data2x']->value["image_path"] = $_smarty_tpl->tpl_vars['image']->value['original_image_path'];?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['image_data2x']->value['image_path']) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('image_attributes', null, 1);
$_smarty_tpl->tpl_vars['image_attributes']->value["srcset"] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_attributes'] = clone $_smarty_tpl->tpl_vars['image_attributes'];?>
<?php }?>
<?php }} ?>
