<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:56:32
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52854714962b471100ca652-40284895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b76cce3b7024ae9830461fba7df6bfda8b931943' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '52854714962b471100ca652-40284895',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b47110108ef1_65675041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b47110108ef1_65675041')) {function content_62b47110108ef1_65675041($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
