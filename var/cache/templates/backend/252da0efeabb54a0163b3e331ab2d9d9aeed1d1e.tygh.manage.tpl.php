<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 17:48:36
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/file_editor/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176360575462b47d44f1d456-48431031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '252da0efeabb54a0163b3e331ab2d9d9aeed1d1e' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/file_editor/manage.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '176360575462b47d44f1d456-48431031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b47d450f76e5_00523360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b47d450f76e5_00523360')) {function content_62b47d450f76e5_00523360($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('file_editor'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
    <?php $_smarty_tpl->tpl_vars['container_id'] = new Smarty_variable((($tmp = @$_REQUEST['container_id'])===null||$tmp==='' ? "elfinder" : $tmp), null, 0);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function(_, $) {
        $.getScript('js/lib/elfinder/js/elfinder.min.js')
            .done(function () {
                $.loadCss(['js/lib/elfinder/css/elfinder.min.css']);
                $.loadCss(['js/lib/elfinder/css/theme.css']);

                <?php if ((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)!='en') {?>
		    $.getScript("js/lib/elfinder/js/i18n/elfinder.<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
.js")
			.then(null, function() { return $.getScript("js/lib/elfinder/js/i18n/elfinder.LANG.js"); })
			.done(fn_init_elfinder);
                <?php } else { ?>
                    fn_init_elfinder();
                <?php }?>
            });

        function fn_init_elfinder() {
            var w = $.getWindowSizes();
            var options = $.extend(_.fileManagerOptions, {
                url: fn_url('elf_connector.manage?start_path=<?php echo htmlspecialchars($_REQUEST['path'], ENT_QUOTES, 'UTF-8');?>
&security_hash=' + _.security_hash),
                height: w.view_height - 190
            });
            $('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
').elfinder(options);
        }
    }(Tygh, Tygh.$))
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');?>
></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_REQUEST['in_popup']) {?>
    <?php echo Smarty::$_smarty_vars['capture']['mainbox'];?>

<?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title'=>$_smarty_tpl->__("file_editor"),'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'sidebar_position'=>"left"), 0);?>

<?php }?>
<?php }} ?>
