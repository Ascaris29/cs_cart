<?php /* Smarty version Smarty-3.1.21, created on 2022-06-26 22:48:40
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_bundles/hooks/product_list/product_data.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101088777862b8b818e07d54-97174217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ba88eba4f3101daf1985ec7178605d225a142cc' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_bundles/hooks/product_list/product_data.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '101088777862b8b818e07d54-97174217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'feature' => 0,
    'purpose_create_variations' => 0,
    'variant' => 0,
    'row_index' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8b818f05fe8_77572828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8b818f05fe8_77572828')) {function content_62b8b818f05fe8_77572828($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.any_variation','product_bundles.any_variation'));
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->tpl_vars['purpose_create_variations'] = new Smarty_variable(constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"), null, 0);?>

    <div class="cm-picker-product-options form-horizontal" id="features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-product-bundles-product-list__variation-features"
            id="features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_AOC"
            data-ca-empty-product-description-prefix="true"
        >
            <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose']!==$_smarty_tpl->tpl_vars['purpose_create_variations']->value) {?>
                    <?php continue 1;?>
                <?php }?>

                <div class="control-group ty-product-variation-features__item clearfix">
                    <label class="control-label ty-product-variation-features__item-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>

                    <div class="controls">
                        <select class="product_bundle_feature_variation" name="product_bundle_feature_variation[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_features][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]">
                            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']) {?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id']===$_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                                        data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="picker_product_row_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_index']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-change-url="<?php echo htmlspecialchars(fn_url("product_bundles.change_variation"), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-row-index="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_index']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    >
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                    </option>
                                <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants']===smarty_modifier_enum("YesNo::YES")) {?>
                                    <option disabled><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php }?>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div>
            <div class="control-group cm-picker-product-options">
                <label for="sw_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_AOC" class="checkbox">
                    <input class="cm-switch-availability cm-switch-inverse cm-option-aoc"
                        id="sw_features_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_AOC"
                        type="checkbox"
                        name="item_data[products][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][any_variation]"
                        value="<?php echo htmlspecialchars(smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-aoc-text="<?php echo $_smarty_tpl->__("product_bundles.any_variation");?>
"
                        data-ca-product-bundles="anyVariation"
                    /><?php echo $_smarty_tpl->__("product_bundles.any_variation");?>

                </label>
            </div>
        </div>
    </div>
<?php }?>
<?php }} ?>
