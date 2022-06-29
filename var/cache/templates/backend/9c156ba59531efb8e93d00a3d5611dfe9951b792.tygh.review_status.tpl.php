<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:29:38
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187537685862b46ac2e38975-69583368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c156ba59531efb8e93d00a3d5611dfe9951b792' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_status.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '187537685862b46ac2e38975-69583368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review_status' => 0,
    'config' => 0,
    'product_review_id' => 0,
    'product_review_status_descr' => 0,
    'rev' => 0,
    'return_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46ac2e50166_31293221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46ac2e50166_31293221')) {function content_62b46ac2e50166_31293221($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['product_review_status']->value) {?>
    <?php $_smarty_tpl->tpl_vars['return_url'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"product_review",'id'=>$_smarty_tpl->tpl_vars['product_review_id']->value,'status'=>$_smarty_tpl->tpl_vars['product_review_status']->value,'items_status'=>$_smarty_tpl->tpl_vars['product_review_status_descr']->value,'object_id_name'=>"product_review_id",'table'=>"product_reviews",'st_result_ids'=>$_smarty_tpl->tpl_vars['rev']->value,'btn_meta'=>"nowrap cs-product-reviews-reviews-review-status__btn",'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'ajax_full_render'=>true), 0);?>


<?php }?>
<?php }} ?>
