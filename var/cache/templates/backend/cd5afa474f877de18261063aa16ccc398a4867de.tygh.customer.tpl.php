<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:29:38
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83859236362b46ac2b8de80-16230110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd5afa474f877de18261063aa16ccc398a4867de' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/product_reviews/views/product_reviews/components/reviews/customer.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '83859236362b46ac2b8de80-16230110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_customer' => 0,
    'user_data' => 0,
    'NAME_CHARACTERS_THRESHOLD' => 0,
    'customer_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b46ac2c14935_60907579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b46ac2c14935_60907579')) {function content_62b46ac2c14935_60907579($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('anonymous'));
?>


<?php $_smarty_tpl->tpl_vars['show_customer'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_customer']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['customer_name'] = new Smarty_variable(smarty_modifier_truncate($_smarty_tpl->tpl_vars['user_data']->value['name'],$_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD']->value,"...",true), null, 0);?>
<?php $_smarty_tpl->tpl_vars['NAME_CHARACTERS_THRESHOLD'] = new Smarty_variable(30, null, 0);?>

<span>
    <?php if ($_smarty_tpl->tpl_vars['show_customer']->value&&$_smarty_tpl->tpl_vars['user_data']->value['is_authorized']) {?>
        <a href=<?php echo htmlspecialchars(fn_url("profiles.update&user_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>

            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>

        </a>

    <?php } elseif ($_smarty_tpl->tpl_vars['show_customer']->value&&$_smarty_tpl->tpl_vars['user_data']->value['name']) {?>
        <span title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->tpl_vars['customer_name']->value;?>

        </span>

    <?php } elseif ($_smarty_tpl->tpl_vars['show_customer']->value) {?>
        <span class="muted">
            <?php echo $_smarty_tpl->__("anonymous");?>

        </span>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_reviews/views/product_reviews/components/reviews/customer_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('user_data'=>$_smarty_tpl->tpl_vars['user_data']->value), 0);?>

</span>
<?php }} ?>
