<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:57
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/hooks/products/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46369841362b461edd82543-31916586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64a7279a2f5f17b8ce190cf013f3cad9a4d87eaf' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/hooks/products/tabs_extra.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '46369841362b461edd82543-31916586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_allowed_to_view_product_reviews' => 0,
    'selected_section' => 0,
    'is_allowed_to_add_product_reviews' => 0,
    'product_data' => 0,
    'product_reviews_rating_stats' => 0,
    'product_reviews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461eddb6e29_50368475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461eddb6e29_50368475')) {function content_62b461eddb6e29_50368475($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.write_review','product_reviews.write_review'));
?>


<?php if ($_smarty_tpl->tpl_vars['is_allowed_to_view_product_reviews']->value) {?>

    <div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="product_reviews") {?>hidden<?php }?>" id="content_product_reviews">
        <?php if ($_smarty_tpl->tpl_vars['is_allowed_to_add_product_reviews']->value) {?>
            <div class="clearfix">
                <div class="pull-right">
                    <div id="add_new_review">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"product_reviews.add&product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'allow_href'=>true,'but_role'=>"action",'but_text'=>$_smarty_tpl->__("product_reviews.write_review"),'but_icon'=>"icon-plus"), 0);?>

                    </div>
                </div>
            </div><br>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/rating/product_rating_overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['product_reviews_rating_stats']->value['ratings'],'total_product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews_rating_stats']->value['total'],'average_rating'=>$_smarty_tpl->tpl_vars['product_data']->value['average_rating']), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/manage/reviews_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_reviews'=>$_smarty_tpl->tpl_vars['product_reviews']->value,'object_company_id'=>$_smarty_tpl->tpl_vars['product_data']->value['company_id'],'show_product'=>false), 0);?>

    </div>

<?php } elseif ($_smarty_tpl->tpl_vars['is_allowed_to_add_product_reviews']->value) {?>

    <div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="product_reviews") {?>hidden<?php }?>" id="content_product_reviews">
        <div class="clearfix">
            <div class="pull-right">
                <div id="add_new_review">
                    <?php echo $_smarty_tpl->getSubTemplate ("buttons/create.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"product_reviews.add&product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['product_id']),'allow_href'=>true,'but_role'=>"action",'but_text'=>$_smarty_tpl->__("product_reviews.write_review"),'but_icon'=>"icon-plus"), 0);?>

                </div>
            </div>
        </div><br>
    </div>

<?php }?>

<?php }} ?>
