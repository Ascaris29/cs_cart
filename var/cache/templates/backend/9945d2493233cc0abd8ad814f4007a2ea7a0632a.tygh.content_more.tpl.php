<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:29:38
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/content_more.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17336208862b46ac2a49320-70470270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9945d2493233cc0abd8ad814f4007a2ea7a0632a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/content_more.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17336208862b46ac2a49320-70470270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text_limit' => 0,
    'display' => 0,
    'text' => 0,
    'more_text' => 0,
    'meta' => 0,
    'visible_comment_lines' => 0,
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46ac2ab0303_05012160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46ac2ab0303_05012160')) {function content_62b46ac2ab0303_05012160($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('content_more'));
?>


<?php $_smarty_tpl->tpl_vars['text_limit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['text_limit']->value)===null||$tmp==='' ? 600 : $tmp), null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable((mb_strlen($_smarty_tpl->tpl_vars['text']->value, 'UTF-8')>$_smarty_tpl->tpl_vars['text_limit']->value), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['text']->value)===null||$tmp==='' ? "–" : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['more_text'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['more_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("content_more") : $tmp), null, 0);?>

<div class="cs-content-more" data-ca-elem="contentMore">
    <div class="cs-content-more__text <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-elem="contentMoreText"
        <?php if ($_smarty_tpl->tpl_vars['visible_comment_lines']->value) {?>
            style="--cs-content-more-visible-comment-lines: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['visible_comment_lines']->value, ENT_QUOTES, 'UTF-8');?>
;"
        <?php }?>
    >
        <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </div>
    <div class="cs-content-more__btn-wrapper <?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>hidden<?php }?>" data-ca-elem="contentMoreBtnWrapper">
        <button type="button" class="cs-content-more__btn" data-ca-elem="contentMoreBtn">
            <?php echo $_smarty_tpl->tpl_vars['more_text']->value;?>

        </button>
    </div>
</div>
<?php }} ?>
