<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:12:14
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201350092462b466ae3d7d68-00982144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '408f97aea9cf2b8e3444b680d9194046cf214e0b' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/sidebox.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '201350092462b466ae3d7d68-00982144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b466ae430d93_97678560',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b466ae430d93_97678560')) {function content_62b466ae430d93_97678560($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
