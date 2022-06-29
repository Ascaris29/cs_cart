<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:52:09
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/views/block_manager/render/grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31948889662b461f936b702-86559501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ace7ce9b7172cc7623e6edd4b650b5e04402134d' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/views/block_manager/render/grid.tpl',
      1 => 1655987783,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '31948889662b461f936b702-86559501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location_data' => 0,
    'layout_data' => 0,
    'parent_grid' => 0,
    'grid' => 0,
    'content' => 0,
    'fluid_width' => 0,
    'width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461f93cf0e4_61591617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461f93cf0e4_61591617')) {function content_62b461f93cf0e4_61591617($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']&&$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("backend:views/block_manager/frontend_render/grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>
        <?php if ($_smarty_tpl->tpl_vars['parent_grid']->value['width']>0) {?>
            <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable(fn_get_grid_fluid_width($_smarty_tpl->tpl_vars['layout_data']->value['width'],$_smarty_tpl->tpl_vars['parent_grid']->value['width'],$_smarty_tpl->tpl_vars['grid']->value['width']), null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['fluid_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['grid']->value['width'], null, 0);?>
        <?php }?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['grid']->value['status']=="A"&&$_smarty_tpl->tpl_vars['content']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['grid']->value['alpha']) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>row-fluid<?php } else { ?>row<?php }?>"><?php }?>
            <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['fluid_width']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['grid']->value['width'] : $tmp), null, 0);?>
            <div class="span<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['grid']->value['offset']) {?>offset<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['offset'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
" >
                <?php if ($_smarty_tpl->tpl_vars['grid']->value['wrapper']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['grid']->value['wrapper'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['content']->value), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                <?php }?>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['grid']->value['omega']) {?></div><?php }?>
    <?php }?>
<?php }?>
<?php }} ?>
