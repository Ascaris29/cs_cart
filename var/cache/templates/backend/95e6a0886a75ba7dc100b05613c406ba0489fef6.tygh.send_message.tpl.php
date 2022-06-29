<?php /* Smarty version Smarty-3.1.21, created on 2022-06-27 00:02:02
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/context_menu/send_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109075677162b8c94a412f55-54218127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95e6a0886a75ba7dc100b05613c406ba0489fef6' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/context_menu/send_message.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '109075677162b8c94a412f55-54218127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'communication_type' => 0,
    'params' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8c94a4a0132_59022535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8c94a4a0132_59022535')) {function content_62b8c94a4a0132_59022535($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.type_message','send'));
?>


<?php $_smarty_tpl->_capture_stack[0][] = array('default', "content", null); ob_start(); ?>
    <div class="bulk-edit-inner__header">
        <span><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>
</span>
    </div>

    <div class="bulk-edit-inner__body">
        <input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['communication_type']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-bulkedit-message-communication-type/>
        <div class="add_message_form--wrapper">
            <textarea
                    class="cm-focus add_message_form--textarea"
                    rows="5"
                    autofocus
                    placeholder="<?php echo $_smarty_tpl->__("vendor_communication.type_message");?>
"
                    data-ca-bulkedit-message-text
            ></textarea>
        </div>
    </div>

    <div class="bulk-edit-inner__footer">
        <button class="btn btn-primary bulk-edit-inner__btn bulkedit-shippings-update"
                role="button"
                data-ca-bulkedit-message-send
                data-ca-bulkedit-message-value="[data-ca-bulkedit-message-text]"
                data-ca-bulkedit-message-type="[data-ca-bulkedit-message-communication-type]"
                data-ca-bulkedit-message-target-form="[name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
]"
                data-ca-bulkedit-message-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                data-ca-bulkedit-message-dispatch="vendor_communication.m_post_message"
        ><?php echo $_smarty_tpl->__("send");?>
</button>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("components/context_menu/items/dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>$_smarty_tpl->tpl_vars['content']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'id'=>"send_message"), 0);?>

<?php }} ?>
