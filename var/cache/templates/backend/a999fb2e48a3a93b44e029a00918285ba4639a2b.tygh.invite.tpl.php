<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:43:57
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/companies/invite.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158995834862b5bf9dc401f0-34627184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a999fb2e48a3a93b44e029a00918285ba4639a2b' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/companies/invite.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '158995834862b5bf9dc401f0-34627184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'is_ajax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5bf9dcf7213_88601402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5bf9dcf7213_88601402')) {function content_62b5bf9dcf7213_88601402($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('invite_vendors_enter_emails','separate_multiple_email_addresses','vendor_edit_invitation_email_template','send_invitations','send_invitations','invite_vendors'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("invite", null, null); ob_start(); ?>

<div>
    <form action="<?php echo htmlspecialchars(fn_url("companies.invite"), ENT_QUOTES, 'UTF-8');?>
" method="post" name="invite_vendors_form" class="form-horizontal form-edit">
        <div class="control-group">
            <label class="control-label" for="elm_companies_invite_vendors"><?php echo $_smarty_tpl->__("invite_vendors_enter_emails");?>
:</label>
            <div class="controls">
                <textarea name="vendor_emails" id="elm_companies_invite_vendors" cols="55" rows="10" class="span9"></textarea>
                <p class="muted description"><?php echo $_smarty_tpl->__("separate_multiple_email_addresses");?>
</p>
            </div>
            <?php if (($_smarty_tpl->tpl_vars['settings']->value['Appearance']['email_templates']=="new")) {?>
            <div class = "controls">
                <?php echo $_smarty_tpl->__("vendor_edit_invitation_email_template",array("[url]"=>fn_url("email_templates.update?code=vendor_invitation&area=A")));?>

            </div>
            <?php }?>
        </div>
    </form>

    <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>
        <div class="buttons-container">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send_invitations"),'cancel_action'=>"close",'but_target_form'=>"invite_vendors_form"), 0);?>

        </div>
    <?php } else { ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("send_invitations"),'cancel_action'=>"companies.manage",'but_target_form'=>"invite_vendors_form"), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>
    <?php echo Smarty::$_smarty_vars['capture']['invite'];?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("invite_vendors"),'content'=>Smarty::$_smarty_vars['capture']['invite'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }?>


<?php }} ?>
