<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:29:38
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48414994262b46ac26a7678-07385866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7acdca25f3c74fca43a7275f1fa0fc66fca7391' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '48414994262b46ac26a7678-07385866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_product_reviews' => 0,
    'scroll_to_elm' => 0,
    'external_click_id' => 0,
    'link' => 0,
    'product_id' => 0,
    'meta' => 0,
    'total_product_reviews_text' => 0,
    'button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46ac26e7544_30382701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46ac26e7544_30382701')) {function content_62b46ac26e7544_30382701($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.n_reviews','product_reviews.show_reviews','product_reviews.scroll_to_reviews'));
?>


<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value>0) {?>

    <?php $_smarty_tpl->tpl_vars['scroll_to_elm'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['scroll_to_elm']->value)===null||$tmp==='' ? "content_product_reviews" : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['external_click_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['external_click_id']->value)===null||$tmp==='' ? "reviews" : $tmp), null, 0);?>
    <?php ob_start();
echo $_smarty_tpl->__("product_reviews.n_reviews",array($_smarty_tpl->tpl_vars['total_product_reviews']->value));
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total_product_reviews_text'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['total_product_reviews']->value)." ".$_tmp1, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value===true) {?>
        <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_id']->value)."&selected_section=product_reviews", null, 0);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("product_reviews.show_reviews");?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['total_product_reviews_text']->value;?>

        </a>

    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="cm-external-click <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("product_reviews.scroll_to_reviews");?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['total_product_reviews_text']->value;?>

        </button>
    <?php } else { ?>
        <span class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['total_product_reviews_text']->value;?>

        </span>
    <?php }?>

<?php }?>
<?php }} ?>
