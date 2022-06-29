<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:43:54
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/companies/invitations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173724564962b5bf9a343350-66693409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40b7615c340c2ac7366cdd584dc0550b196df2c2' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/companies/invitations.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '173724564962b5bf9a343350-66693409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'invitations' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'invitation' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5bf9a4910f8_92874285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5bf9a4910f8_92874285')) {function content_62b5bf9a4910f8_92874285($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('email','vendor_invited_at','email','vendor_invited_at','delete','no_data','invite_vendors_title','invite_vendors','pending_vendor_invitations'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'save_current_url'=>true), 0);?>


<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>
<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

<?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['invitations']->value) {?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="invited_vendors_form" id="invited_vendors_form">
        <?php $_smarty_tpl->_capture_stack[0][] = array("companies_invitations_table", null, null); ob_start(); ?>
            <div class="table-responsive-wrapper longtap-selection">
                <table class="table table-middle table--relative table-responsive">
                    <thead
                            data-ca-bulkedit-default-object="true"
                            data-ca-bulkedit-component="defaultObject"
                    >
                        <tr>
                            <th class="mobile-hide" width="1%">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                <input type="checkbox"
                                       class="bulkedit-toggler hide"
                                       data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                       data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                />
                            </th>
                            <th width="69%" class="nowrap">
                                <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=email&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("email");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="email") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                            <th width="20%" class="nowrap">
                                <a class="cm-ajax" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=invited_at&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("vendor_invited_at");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by']==="invited_at") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                            <th width="10%" class="mobile-hide">&nbsp;</th>
                        </tr>
                    </thead>

                    <?php  $_smarty_tpl->tpl_vars['invitation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invitation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invitations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invitation']->key => $_smarty_tpl->tpl_vars['invitation']->value) {
$_smarty_tpl->tpl_vars['invitation']->_loop = true;
?>
                        <tr  class="cm-row-item cm-longtap-target"
                             data-ca-longtap-action="setCheckBox"
                             data-ca-longtap-target="input.cm-item"
                             data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invitation']->value['invitation_key'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <td class="mobile-hide" width="1%">
                                <input name="invitation_keys[]" type="checkbox" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invitation']->value['invitation_key'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" /></td>
                            <td width="69%" data-th="<?php echo $_smarty_tpl->__("email");?>
">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invitation']->value['email'], ENT_QUOTES, 'UTF-8');?>

                            <td width="20%" data-th="<?php echo $_smarty_tpl->__("vendor_invited_at");?>
">
                                <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['invitation']->value['invited_at'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                            </td>
                            <td width="10%" class="right mobile-hide">
                                <div class="hidden-tools">
                                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"companies.delete_invitation?invitation_key=".((string)$_smarty_tpl->tpl_vars['invitation']->value['invitation_key']),'method'=>"POST"));?>
</li>
                                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"invited_vendors_form",'object'=>"companies_invitations",'items'=>Smarty::$_smarty_vars['capture']['companies_invitations_table'],'is_check_all_shown'=>true), 0);?>

    </form>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"companies:manage_invite_vendors")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"companies:manage_invite_vendors"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_href'=>"companies.invite",'title'=>$_smarty_tpl->__("invite_vendors_title"),'but_text'=>$_smarty_tpl->__("invite_vendors"),'but_meta'=>"btn cm-dialog-opener"), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"companies:manage_invite_vendors"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("pending_vendor_invitations"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'tools'=>Smarty::$_smarty_vars['capture']['tools'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
