<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:53:35
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/block_manager/frontend_render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133327123162b4624fc6b769-47239172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '424a65d842c61f2e2411ba0a583a1329972904d3' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/block_manager/frontend_render/container.tpl',
      1 => 1652778226,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '133327123162b4624fc6b769-47239172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4624fd138d1_23172012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4624fd138d1_23172012')) {function content_62b4624fd138d1_23172012($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-block-manager-container-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
"
>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/block_manager/frontend_render/container.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/block_manager/frontend_render/container.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-block-manager-container-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
"
>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }?><?php }} ?>
