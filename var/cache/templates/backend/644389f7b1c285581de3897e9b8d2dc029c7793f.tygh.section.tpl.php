<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:58
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174367574862b461ee7f7278-61340177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644389f7b1c285581de3897e9b8d2dc029c7793f' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/section.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '174367574862b461ee7f7278-61340177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rnd' => 0,
    'section_content' => 0,
    'section_state' => 0,
    'config' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ee80eb70_47060626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ee80eb70_47060626')) {function content_62b461ee80eb70_47060626($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/Applications/MAMP/htdocs/cs_cart2/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('close'));
?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<div class="clear" id="ds_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rnd']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="section-border">
        <?php echo $_smarty_tpl->tpl_vars['section_content']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['section_state']->value) {?>
            <p align="right">
                <a href="<?php echo htmlspecialchars(fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"close_section=".((string)$_smarty_tpl->tpl_vars['key']->value))), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php echo $_smarty_tpl->__("close");?>
</a>
            </p>
        <?php }?>
    </div>
</div><?php }} ?>
