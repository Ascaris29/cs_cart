<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:06:17
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195514845962b5b6c9805951-55500991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '508803e6ad2fa76bb0d411af847a5c12da894689' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/storefronts/components/picker/item.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '195514845962b5b6c9805951-55500991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b6c981c330_59677116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b6c981c330_59677116')) {function content_62b5b6c981c330_59677116($_smarty_tpl) {?><div class="object-picker__storefronts-main">
    <div class="object-picker__storefronts-name">
        <div class="object-picker__storefronts-name-content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name} <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
</div><?php }} ?>
