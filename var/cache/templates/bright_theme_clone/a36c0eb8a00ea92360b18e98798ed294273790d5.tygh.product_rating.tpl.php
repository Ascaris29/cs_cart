<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:52:16
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17511756462b4620010f6b1-86926173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a36c0eb8a00ea92360b18e98798ed294273790d5' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/product_reviews/views/product_reviews/components/product_rating.tpl',
      1 => 1655987802,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17511756462b4620010f6b1-86926173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'total_product_reviews' => 0,
    'average_rating' => 0,
    'ratings_stats' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b462001441a5_57526047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b462001441a5_57526047')) {function content_62b462001441a5_57526047($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-rating">

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('average_rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0);?>


    </section>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="ty-product-review-product-rating">

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('average_rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/product_stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value,'total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value), 0);?>


    </section>
<?php }?>
<?php }?><?php }} ?>
