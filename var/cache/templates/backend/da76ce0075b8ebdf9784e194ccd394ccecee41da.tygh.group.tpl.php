<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:43
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/components/context_menu/items/group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147844927762b461df3f4769-97688143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da76ce0075b8ebdf9784e194ccd394ccecee41da' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/components/context_menu/items/group.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '147844927762b461df3f4769-97688143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item_id' => 0,
    'item' => 0,
    'subitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461df425706_56610118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461df425706_56610118')) {function content_62b461df425706_56610118($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.render_tag_attrs.php';
?>

<li <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']['class']) {?>
        class="btn bulk-edit__btn bulk-edit__btn--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
 dropleft-mod <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['menu_item_class'], ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <span class="bulk-edit__btn-content dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>
 <span class="caret mobile-hide"></span></span>

    <ul class="dropdown-menu">
        <?php  $_smarty_tpl->tpl_vars['subitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subitem']->_loop = false;
 $_smarty_tpl->tpl_vars['item_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value->getItems(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subitem']->key => $_smarty_tpl->tpl_vars['subitem']->value) {
$_smarty_tpl->tpl_vars['subitem']->_loop = true;
 $_smarty_tpl->tpl_vars['item_id']->value = $_smarty_tpl->tpl_vars['subitem']->key;
?>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['subitem']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>$_smarty_tpl->tpl_vars['item_id']->value,'item'=>$_smarty_tpl->tpl_vars['subitem']->value,'data'=>$_smarty_tpl->tpl_vars['subitem']->value->getData()), 0);?>

        <?php } ?>
    </ul>
</li>
<?php }} ?>
