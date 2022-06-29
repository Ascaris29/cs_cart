<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:53:15
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133301709662b4623b7e4ea8-95433989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830b31a1d3a262ce687bbc14aab7630067dbe059' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/theme_editor.tpl',
      1 => 1652778226,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '133301709662b4623b7e4ea8-95433989',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b4623b837890_89037538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b4623b837890_89037538')) {function content_62b4623b837890_89037538($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<div id="theme_editor">
<div class="theme-editor"></div>
<?php echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        query_string: encodeURIComponent('<?php echo strtr($_SERVER['QUERY_STRING'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor--></div>
<?php }} ?>
