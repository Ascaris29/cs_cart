<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 21:39:33
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13844497662b8a7e5908f16-49336725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4e00527056748f7d79c07d7f3f39f64835083c7' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl',
      1 => 1655987796,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13844497662b8a7e5908f16-49336725',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8a7e5974770_54101629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8a7e5974770_54101629')) {function content_62b8a7e5974770_54101629($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_function_script')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('certificate_verification','certificate_verification','gift_cert_code','enter_code','apply','apply','gift_certificate_verification','certificate_verification','certificate_verification','gift_cert_code','enter_code','apply','apply','gift_certificate_verification'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-gift-certificate-validate gift-validate">
    <form name="gift_certificate_verification_form" class="cm-ajax cm-form-dialog-opener cm-dialog-auto-size" data-ca-dialog-title="<?php echo $_smarty_tpl->__("certificate_verification");?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="gift_cert_verify" />
        <h3 class="ty-gift-certificate-validate__title"><?php echo $_smarty_tpl->__("certificate_verification");?>
</h3>
        <div class="ty-input-append">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-gift ty-gift-certificate__icon"),$_smarty_tpl);?>
<label for="id_verify_code" class="hidden cm-required"><?php echo $_smarty_tpl->__("gift_cert_code");?>
</label><input type="text" name="verify_code" id="id_verify_code" value="<?php echo $_smarty_tpl->__("enter_code");?>
" class="ty-input-text cm-hint" /><?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"gift_certificates.verify",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0);?>

        </div>
    </form>
</div>

<div title="<?php echo $_smarty_tpl->__("gift_certificate_verification");?>
" id="gift_cert_verify">
<!--gift_cert_verify--></div>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gift_certificates/views/gift_certificates/components/gift_certificates_verify.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-gift-certificate-validate gift-validate">
    <form name="gift_certificate_verification_form" class="cm-ajax cm-form-dialog-opener cm-dialog-auto-size" data-ca-dialog-title="<?php echo $_smarty_tpl->__("certificate_verification");?>
" action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="gift_cert_verify" />
        <h3 class="ty-gift-certificate-validate__title"><?php echo $_smarty_tpl->__("certificate_verification");?>
</h3>
        <div class="ty-input-append">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-gift ty-gift-certificate__icon"),$_smarty_tpl);?>
<label for="id_verify_code" class="hidden cm-required"><?php echo $_smarty_tpl->__("gift_cert_code");?>
</label><input type="text" name="verify_code" id="id_verify_code" value="<?php echo $_smarty_tpl->__("enter_code");?>
" class="ty-input-text cm-hint" /><?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"gift_certificates.verify",'alt'=>$_smarty_tpl->__("apply"),'but_text'=>$_smarty_tpl->__("apply")), 0);?>

        </div>
    </form>
</div>

<div title="<?php echo $_smarty_tpl->__("gift_certificate_verification");?>
" id="gift_cert_verify">
<!--gift_cert_verify--></div>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php }?><?php }} ?>
