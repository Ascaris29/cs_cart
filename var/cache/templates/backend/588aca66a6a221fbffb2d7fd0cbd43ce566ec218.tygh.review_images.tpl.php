<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:29:38
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_images.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82689237762b46ac2b28939-12713521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588aca66a6a221fbffb2d7fd0cbd43ce566ec218' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/review_images.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '82689237762b46ac2b28939-12713521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_review_images' => 0,
    'product_review' => 0,
    'size' => 0,
    'settings' => 0,
    'show_delete' => 0,
    'image' => 0,
    'preview_id' => 0,
    'image_width' => 0,
    'image_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46ac2b808b4_42904578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46ac2b808b4_42904578')) {function content_62b46ac2b808b4_42904578($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
?>

<?php if ($_smarty_tpl->tpl_vars['product_review_images']->value) {?>

    
    <?php echo $_smarty_tpl->getSubTemplate ("common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->tpl_vars['preview_id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['product_review']->value['product_review_id']), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['size']->value==="large") {?>
        <?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable((intval($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'])*2), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable((intval($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'])*2), null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'], null, 0);?>
    <?php }?>

    <section class="flex flex-wrap spaced-child">
        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_review_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["post_images"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["post_images"]['index']++;
?>
            <div class="cs-product-reviews-reviews-review-images">

                <div class="cs-product-reviews-reviews-review-images__toolbar">
                    <?php if ($_smarty_tpl->tpl_vars['show_delete']->value) {?>
                        <label class="cs-product-reviews-reviews-review-images__delete-label">
                            <input type="checkbox"
                                name="product_review_data[delete_images][]"
                                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['pair_id'], ENT_QUOTES, 'UTF-8');?>
"
                                class="cs-product-reviews-reviews-review-images__delete-checkbox"
                            />
                            <div class="cs-product-reviews-reviews-review-images__delete-btn">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-trash cs-product-reviews-reviews-review-images__delete-icon"),$_smarty_tpl);?>

                            </div>
                        </label>
                    <?php }?>
                </div>


                <a id="image_preview_product_review_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-image-id="preview_product_review_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-image-order=<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['post_images']['index'], ENT_QUOTES, 'UTF-8');?>

                    class="cm-previewer cs-product-reviews-reviews-review-images__link"
                >
                        <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['image']->value,'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'show_detailed_link'=>false,'image_css_class'=>"cs-product-reviews-reviews-review-images__image"), 0);?>

                </a>

            </div>
        <?php } ?>
    </section>
<?php }?>
<?php }} ?>
