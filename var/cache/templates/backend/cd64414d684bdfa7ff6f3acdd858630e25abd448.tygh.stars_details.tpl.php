<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:29:38
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31571682962b46ac25d6204-29119781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd64414d684bdfa7ff6f3acdd858630e25abd448' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/rating/stars_details.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '31571682962b46ac25d6204-29119781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ratings_stats' => 0,
    'quantity' => 0,
    'rating' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46ac2697893_65739501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46ac2697893_65739501')) {function content_62b46ac2697893_65739501($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['ratings_stats']->value) {?>    
    <section class="cs-product-reviews-rating-stars-details">

        <?php  $_smarty_tpl->tpl_vars['rating'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rating']->_loop = false;
 $_smarty_tpl->tpl_vars['quantity'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ratings_stats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rating']->key => $_smarty_tpl->tpl_vars['rating']->value) {
$_smarty_tpl->tpl_vars['rating']->_loop = true;
 $_smarty_tpl->tpl_vars['quantity']->value = $_smarty_tpl->tpl_vars['rating']->key;
?>
            <div class="cs-product-reviews-rating-stars-details__row">

                <div class="cs-product-reviews-rating-stars-details__quantity">
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['quantity']->value,'size'=>"small",'type'=>"secondary",'without_empty_stars'=>true,'flip'=>true), 0);?>

                </div>

                <progress
                    class="cs-product-reviews-rating-stars-details__line"
                    max="100"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating']->value['percentage'], ENT_QUOTES, 'UTF-8');?>
"
                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rating']->value['percentage'], ENT_QUOTES, 'UTF-8');?>
</progress>


                <div class="cs-product-reviews-rating-stars-details__percentage">
                    <?php echo htmlspecialchars(round($_smarty_tpl->tpl_vars['rating']->value['percentage']), ENT_QUOTES, 'UTF-8');?>
%
                </div>

            </div>
        <?php } ?>

    </section>
<?php }?>
<?php }} ?>
