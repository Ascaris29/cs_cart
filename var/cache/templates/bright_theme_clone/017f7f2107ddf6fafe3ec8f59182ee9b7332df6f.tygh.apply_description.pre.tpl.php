<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 21:39:29
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/vendor_plans/hooks/vendors/apply_description.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13367782862b8a7e1600d39-18487352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017f7f2107ddf6fafe3ec8f59182ee9b7332df6f' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/vendor_plans/hooks/vendors/apply_description.pre.tpl',
      1 => 1655987795,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13367782862b8a7e1600d39-18487352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'vendor_plans' => 0,
    'profile_fields' => 0,
    'fields' => 0,
    'field' => 0,
    'show_plan_list' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8a7e164cee2_38198705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8a7e164cee2_38198705')) {function content_62b8a7e164cee2_38198705($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['vendor_plans']->value) {?>
    <?php $_smarty_tpl->tpl_vars['show_plan_list'] = new Smarty_variable(true, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fields']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fields']->key => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="plan_id") {?>
                <?php $_smarty_tpl->tpl_vars['show_plan_list'] = new Smarty_variable(false, null, 0);?>
            <?php }?>
        <?php } ?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['show_plan_list']->value) {?>
        <input type="hidden" name="company_data[plan_id]" id="company_plan" value="<?php echo htmlspecialchars($_REQUEST['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_plans/hooks/vendors/apply_description.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_plans/hooks/vendors/apply_description.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['vendor_plans']->value) {?>
    <?php $_smarty_tpl->tpl_vars['show_plan_list'] = new Smarty_variable(true, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['fields'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fields']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profile_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fields']->key => $_smarty_tpl->tpl_vars['fields']->value) {
$_smarty_tpl->tpl_vars['fields']->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['field_name']=="plan_id") {?>
                <?php $_smarty_tpl->tpl_vars['show_plan_list'] = new Smarty_variable(false, null, 0);?>
            <?php }?>
        <?php } ?>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['show_plan_list']->value) {?>
        <input type="hidden" name="company_data[plan_id]" id="company_plan" value="<?php echo htmlspecialchars($_REQUEST['plan_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
