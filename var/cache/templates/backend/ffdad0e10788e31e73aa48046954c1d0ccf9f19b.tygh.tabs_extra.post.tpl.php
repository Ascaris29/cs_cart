<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:56
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92245691962b461ecc0ab99-90939755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffdad0e10788e31e73aa48046954c1d0ccf9f19b' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/attachments/hooks/products/tabs_extra.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '92245691962b461ecc0ab99-90939755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selected_section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ecce1376_64850947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ecce1376_64850947')) {function content_62b461ecce1376_64850947($_smarty_tpl) {?><div id="content_attachments" class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="attachments") {?>hidden<?php }?>">

<?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0);?>


<!--content_attachments--></div><?php }} ?>
