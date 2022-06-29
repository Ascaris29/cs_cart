<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:14:54
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/email_templates/preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181841292662b5b8ce91a465-29721235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ea4d27b9228adf6238e5cba165dae8d1e6197e' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/email_templates/preview.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '181841292662b5b8ce91a465-29721235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b8ce940a74_32150781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b8ce940a74_32150781')) {function content_62b5b8ce940a74_32150781($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('preview','subject','body'));
?>
<div title="<?php echo $_smarty_tpl->__("preview");?>
" id="preview_dialog">

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
    <h4><?php echo $_smarty_tpl->__("subject");?>
:</h4>
    <div>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview']->value->getSubject(), ENT_QUOTES, 'UTF-8');?>

    </div>
    <h4><?php echo $_smarty_tpl->__("body");?>
:</h4>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['preview']->value->getBody();?>

    </div>
<?php }?>

<!--preview_dialog--></div>
<?php }} ?>
