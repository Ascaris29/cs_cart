<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:43
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/components/context_menu/items/group_action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41713451162b461df43f6c3-69102082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e72198e225fd6b341a61d84a31ee9d8677e8b68e' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/components/context_menu/items/group_action.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '41713451162b461df43f6c3-69102082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461df474c70_98398253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461df474c70_98398253')) {function content_62b461df474c70_98398253($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_render_tag_attrs')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.render_tag_attrs.php';
?>

<li <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']);?>

    <?php if (!$_smarty_tpl->tpl_vars['data']->value['menu_item_attributes']['class']) {?>
        class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['menu_item_class'], ENT_QUOTES, 'UTF-8');?>
"
    <?php }?>
>
    <a <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['data']->value['action_attributes']);?>

            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']['class']) {?>
                class="cm-process-items cm-submit <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['action_class'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']["data-ca-target-form"]) {?>
                data-ca-target-form="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['data']->value['action_attributes']["data-ca-dispatch"]) {?>
                data-ca-dispatch="dispatch[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>
]"
            <?php }?>
    >
        <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>

    </a>
</li>
<?php }} ?>
