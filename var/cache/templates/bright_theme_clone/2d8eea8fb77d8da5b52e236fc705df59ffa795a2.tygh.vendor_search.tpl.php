<?php /* Smarty version Smarty-3.1.21, created on 2022-06-27 00:00:43
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/blocks/vendors/vendor_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103514918062b8c8fb5e3a68-08059430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d8eea8fb77d8da5b52e236fc705df59ffa795a2' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/blocks/vendors/vendor_search.tpl',
      1 => 1655987763,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103514918062b8c8fb5e3a68-08059430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_id' => 0,
    'category_data' => 0,
    'search' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8c8fb63dc56_28595559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8c8fb63dc56_28595559')) {function content_62b8c8fb63dc56_28595559($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('block_vendor_search','storefront_search_button','block_vendor_search','storefront_search_button'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ty-search-block">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="status" value="A" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />
        <input type="hidden" name="company_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="category_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_search:additional_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_search:additional_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_search:additional_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <input type="text" name="q" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("block_vendor_search");?>
" class="ty-search-block__input cm-hint" /><?php echo $_smarty_tpl->getSubTemplate ("buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"companies.products",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0);?>

    </form>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/vendors/vendor_search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/vendors/vendor_search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ty-search-block">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="search_form" method="get">
        <input type="hidden" name="subcats" value="Y" />
        <input type="hidden" name="pcode_from_q" value="Y" />
        <input type="hidden" name="status" value="A" />
        <input type="hidden" name="pshort" value="Y" />
        <input type="hidden" name="pfull" value="Y" />
        <input type="hidden" name="pname" value="Y" />
        <input type="hidden" name="pkeywords" value="Y" />
        <input type="hidden" name="search_performed" value="Y" />
        <input type="hidden" name="company_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="category_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category_id'], ENT_QUOTES, 'UTF-8');?>
" />

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"vendor_search:additional_fields")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"vendor_search:additional_fields"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"vendor_search:additional_fields"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        <input type="text" name="q" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("block_vendor_search");?>
" class="ty-search-block__input cm-hint" /><?php echo $_smarty_tpl->getSubTemplate ("buttons/magnifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"companies.products",'alt'=>$_smarty_tpl->__("storefront_search_button")), 0);?>

    </form>
</div>
<?php }?><?php }} ?>
