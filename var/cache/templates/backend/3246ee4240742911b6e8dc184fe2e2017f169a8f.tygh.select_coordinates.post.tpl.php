<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:11:17
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/store_locator/addons/geo_maps/hooks/store_locator/select_coordinates.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140720086862b5b7f5e988c3-43050718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3246ee4240742911b6e8dc184fe2e2017f169a8f' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/store_locator/addons/geo_maps/hooks/store_locator/select_coordinates.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '140720086862b5b7f5e988c3-43050718',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b7f5eacae4_57120296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b7f5eacae4_57120296')) {function content_62b5b7f5eacae4_57120296($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('select'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("select"),'but_target_id'=>"map_picker",'but_role'=>"action",'but_meta'=>"btn-primary cm-dialog-opener cm-hide-with-inputs",'but_id'=>"store_locator_picker_opener"), 0);?>
<?php }} ?>
