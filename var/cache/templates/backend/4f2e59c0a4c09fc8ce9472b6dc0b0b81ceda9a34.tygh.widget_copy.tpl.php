<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:14:30
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/widget_copy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48166141362b46736bbbf75-67997191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f2e59c0a4c09fc8ce9472b6dc0b0b81ceda9a34' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/widget_copy.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '48166141362b46736bbbf75-67997191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_copy_class' => 0,
    'widget_copy_title' => 0,
    'widget_copy_text' => 0,
    'widget_copy_code_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46736bd9950_26794349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46736bd9950_26794349')) {function content_62b46736bd9950_26794349($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('copied','copy'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/backend/widget_copy.js"),$_smarty_tpl);?>

<div class="cm-widget-copy widget-copy <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_copy_class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['widget_copy_title']->value||$_smarty_tpl->tpl_vars['widget_copy_text']->value) {?>
        <div class="widget-copy__body">
            <?php if ($_smarty_tpl->tpl_vars['widget_copy_title']->value) {?>
                <strong class="widget-copy__title"><?php echo $_smarty_tpl->tpl_vars['widget_copy_title']->value;?>
.</strong>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['widget_copy_text']->value) {?>
                <span class="widget-copy__text"><?php echo $_smarty_tpl->tpl_vars['widget_copy_text']->value;?>
</span>
            <?php }?>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['widget_copy_code_text']->value) {?>
        <div class="widget-copy__code">
            <button class="cm-widget-copy__btn widget-copy__btn" data-title="<?php echo $_smarty_tpl->__("copied");?>
" type="button"><?php echo $_smarty_tpl->__("copy");?>
</button>
            <pre class="widget-copy__pre"><code class="cm-widget-copy__code-text widget-copy__code-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_copy_code_text']->value, ENT_QUOTES, 'UTF-8');?>
</code></pre>
        </div>
    <?php }?>
</div><?php }} ?>
