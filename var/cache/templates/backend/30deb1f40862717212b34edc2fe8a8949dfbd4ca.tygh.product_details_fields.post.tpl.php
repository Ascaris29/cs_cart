<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:54
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56332649762b461ea8a8b45-83772329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30deb1f40862717212b34edc2fe8a8949dfbd4ca' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/companies/product_details_fields.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '56332649762b461ea8a8b45-83772329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ea8c3799_11175406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ea8c3799_11175406')) {function content_62b461ea8c3799_11175406($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('approved','yes','pending','no'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")&&($_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation']=="Y"||$_smarty_tpl->tpl_vars['product_data']->value['company_pre_moderation_edit']=="Y")) {?>
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("approved");?>
:</label>
        <div class="controls">
        	<div class="text-type-value">
        		<?php if ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="Y") {
echo $_smarty_tpl->__("yes");
} elseif ($_smarty_tpl->tpl_vars['product_data']->value['approved']=="P") {
echo $_smarty_tpl->__("pending");
} else {
echo $_smarty_tpl->__("no");
}?>
        	</div>
        </div>
    </div>
<?php }?><?php }} ?>
