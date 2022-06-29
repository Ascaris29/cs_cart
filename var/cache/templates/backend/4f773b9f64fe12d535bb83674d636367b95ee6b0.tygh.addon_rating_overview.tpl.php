<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 17:54:48
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170436459662b5d038122988-75170298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f773b9f64fe12d535bb83674d636367b95ee6b0' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/rating/addon_rating_overview.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '170436459662b5d038122988-75170298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_addon_reviews' => 0,
    'average_rating' => 0,
    'ratings_stats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5d0381a05d3_42823546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5d0381a05d3_42823546')) {function content_62b5d0381a05d3_42823546($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['total_addon_reviews']->value) {?>
    <section class="cs-addons-rating-addon-rating-overview well">
        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars_with_text.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('rating'=>$_smarty_tpl->tpl_vars['average_rating']->value,'size'=>"xlarge"), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/stars_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('ratings_stats'=>$_smarty_tpl->tpl_vars['ratings_stats']->value), 0);?>


        <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/rating/total_reviews.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('total_addon_reviews'=>$_smarty_tpl->tpl_vars['total_addon_reviews']->value), 0);?>


    </section>
<?php }?>
<?php }} ?>
