<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:43
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/components/easter_egg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61050648662b461df5320e5-06788436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c703d7c1a140a01c9ee6d946a895e1251f716753' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/components/easter_egg.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '61050648662b461df5320e5-06788436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461df545741_86295573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461df545741_86295573')) {function content_62b461df545741_86295573($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('easter_coming_soon_message','cancel'));
?>

<div class="easter">
    <div class="easter__image-container">
        <img
            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/tux.png"
            class="easter__image"
        />
    </div>

    <p class="easter__text"><?php echo $_smarty_tpl->__("easter_coming_soon_message");?>
</p>

    <div class="easter__close-button">
        <a class="cm-dialog-closer cm-cancel tool-link btn"><?php echo $_smarty_tpl->__("cancel");?>
</a>
    </div>
</div>
<?php }} ?>
