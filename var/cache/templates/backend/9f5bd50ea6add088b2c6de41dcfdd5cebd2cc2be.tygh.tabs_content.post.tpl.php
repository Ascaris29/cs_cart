<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:04:30
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_terms/hooks/companies/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214001649462b464dee1b0b5-05321333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f5bd50ea6add088b2c6de41dcfdd5cebd2cc2be' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_terms/hooks/companies/tabs_content.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '214001649462b464dee1b0b5-05321333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b464dee2df43_06578145',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b464dee2df43_06578145')) {function content_62b464dee2df43_06578145($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_terms.terms_and_conditions','vendor_terms.terms_and_conditions_tooltip'));
?>

<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div id="content_terms_and_conditions" class="hidden">
    <div class="control-group">
        <label class="control-label" for="elm_company_terms"><?php echo $_smarty_tpl->__("vendor_terms.terms_and_conditions");?>
:</label>
        <div class="controls">
            <textarea id="elm_company_terms" name="company_data[terms]" cols="55" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company_data']->value['terms'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <p class="muted description"><?php echo $_smarty_tpl->__("vendor_terms.terms_and_conditions_tooltip");?>
</p>
        </div>
    </div>
</div>
<?php }?>
<?php }} ?>
