<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:15:47
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/documents/preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186180041862b5b903b3ba13-45769981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f45d5532fe1da1220f2c0ca33bd79bb65a1c6c1' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/documents/preview.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '186180041862b5b903b3ba13-45769981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b903b9a667_58077385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b903b9a667_58077385')) {function content_62b5b903b9a667_58077385($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('preview'));
?>
<div title="<?php echo $_smarty_tpl->__("preview");?>
" id="preview_dialog">

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['preview']->value;?>

    </div>
<?php }?>

<!--preview_dialog--></div>
<?php }} ?>
