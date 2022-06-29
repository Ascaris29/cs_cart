<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:29:38
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars_with_text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162107324562b46ac23c77b8-62442168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a107939c8655f7e69d941e80a608f26ac2a7f365' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars_with_text.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162107324562b46ac23c77b8-62442168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rating' => 0,
    'size' => 0,
    'accurate_rating' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46ac2448e02_21020069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46ac2448e02_21020069')) {function content_62b46ac2448e02_21020069($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.out_of_five'));
?>


<?php if ($_smarty_tpl->tpl_vars['rating']->value>0) {?>
    <?php $_smarty_tpl->tpl_vars['accurate_rating'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['rating']->value,1), null, 0);?>

    <section>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['rating']->value,'size'=>$_smarty_tpl->tpl_vars['size']->value), 0);?>


        <div>
            <strong class="text-larger">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accurate_rating']->value, ENT_QUOTES, 'UTF-8');?>

            </strong>
            <span>
                <?php echo $_smarty_tpl->__("product_reviews.out_of_five");?>

            </span>
        </div>
    </section>
<?php }?>
<?php }} ?>
