<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 17:54:48
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/detailed_page/sidebar/detailed_page_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49053304162b5d0382e7c73-90424196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53896aded134ed08f62ac349d6680bf21b199389' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/addons/components/detailed_page/sidebar/detailed_page_sidebar.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '49053304162b5d0382e7c73-90424196',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5d0383a2027_31559225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5d0383a2027_31559225')) {function content_62b5d0383a2027_31559225($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/block.hook.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"addons_detailed:manage_sidebar")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"addons_detailed:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


    
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/sidebar/addon_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/sidebar/enjoy_addon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/sidebar/addon_market_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
    <?php echo $_smarty_tpl->getSubTemplate ("views/addons/components/detailed_page/sidebar/addon_support.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"addons_detailed:manage_sidebar"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
