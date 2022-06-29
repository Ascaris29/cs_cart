<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:29:38
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/helpfulness.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22935435462b46ac2cf5004-03833504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7ef9600f0845d9ee3e1d8f789630ae1b11c81ea' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/helpfulness.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '22935435462b46ac2cf5004-03833504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helpfulness' => 0,
    'size' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46ac2d95508_13244106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46ac2d95508_13244106')) {function content_62b46ac2d95508_13244106($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.helpfulness','product_reviews.vote_up','product_reviews.vote_down'));
?>


<?php if ($_smarty_tpl->tpl_vars['helpfulness']->value) {?>

    <span title="<?php echo $_smarty_tpl->__("product_reviews.helpfulness");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['helpfulness'], ENT_QUOTES, 'UTF-8');?>

<?php echo $_smarty_tpl->__("product_reviews.vote_up");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_up'], ENT_QUOTES, 'UTF-8');?>

<?php echo $_smarty_tpl->__("product_reviews.vote_down");?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_down'], ENT_QUOTES, 'UTF-8');?>
"
        class="
            <?php if ($_smarty_tpl->tpl_vars['size']->value==="small") {?>
                slashed-child
            <?php } else { ?>
                spaced-child
            <?php }?>
        "
    >

        <span>
            <?php if ($_smarty_tpl->tpl_vars['size']->value!=="small") {?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-thumbs-up muted"),$_smarty_tpl);?>

            <?php }?>
            <span class="text-success">
                <?php if ($_smarty_tpl->tpl_vars['helpfulness']->value['vote_up']>0) {?>+<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_up'], ENT_QUOTES, 'UTF-8');?>

            </span>
        </span>

        <span>
            <?php if ($_smarty_tpl->tpl_vars['size']->value!=="small") {?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-thumbs-down muted"),$_smarty_tpl);?>

            <?php }?>
            <span class="text-error">
                <?php if ($_smarty_tpl->tpl_vars['helpfulness']->value['vote_down']>0) {?>−<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['helpfulness']->value['vote_down'], ENT_QUOTES, 'UTF-8');?>

            </span>
        </span>

    </span>
<?php }?>
<?php }} ?>
