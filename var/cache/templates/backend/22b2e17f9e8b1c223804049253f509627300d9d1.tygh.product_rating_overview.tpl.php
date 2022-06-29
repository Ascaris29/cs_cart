<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:57
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/product_rating_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135331269762b461eddf9808-61052590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22b2e17f9e8b1c223804049253f509627300d9d1' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/product_rating_overview.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '135331269762b461eddf9808-61052590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_product_reviews' => 0,
    'average_rating' => 0,
    'ratings_stats' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ede19406_58969160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ede19406_58969160')) {function content_62b461ede19406_58969160($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['total_product_reviews']->value) {?>
    <section class="cs-product-reviews-rating-product-rating-overview well">
        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_product_reviews'=>$_smarty_tpl->tpl_vars['total_product_reviews']->value,'product_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'meta'=>"muted"), 0);?>


    </section>
<?php }?>
<?php }} ?>
