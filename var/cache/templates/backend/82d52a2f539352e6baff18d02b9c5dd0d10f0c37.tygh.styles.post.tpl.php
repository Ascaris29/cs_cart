<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:39
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_panel_configurator/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79229700362b4619f398a96-80689374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82d52a2f539352e6baff18d02b9c5dd0d10f0c37' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_panel_configurator/hooks/index/styles.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '79229700362b4619f398a96-80689374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mainColor' => 0,
    'menuSidebarColor' => 0,
    'menuSidebarBg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4619f3ad714_34498739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4619f3ad714_34498739')) {function content_62b4619f3ad714_34498739($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.style.php';
?><?php echo smarty_function_style(array('src'=>"addons/vendor_panel_configurator/styles.less"),$_smarty_tpl);?>


<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="vendor") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo smarty_function_style(array('src'=>"addons/vendor_panel_configurator/simple_vendor_panel/index.less"),$_smarty_tpl);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("styles", null, null); ob_start(); ?>
        @mainColor: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mainColor']->value, ENT_QUOTES, 'UTF-8');?>
;
        @menuSidebarColor: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuSidebarColor']->value, ENT_QUOTES, 'UTF-8');?>
;
        @menuSidebarBg: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuSidebarBg']->value, ENT_QUOTES, 'UTF-8');?>
;
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo smarty_function_style(array('content'=>Smarty::$_smarty_vars['capture']['styles'],'type'=>"less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
