<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 17:53:18
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/block_manager/block_type_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:367211362b5cfde62ddc8-18838438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ed9bad2b2ae7ca7c8ae9fd1b47ac5e7f8657e62' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/block_manager/block_type_list.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '367211362b5cfde62ddc8-18838438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'extra_id' => 0,
    'block_types' => 0,
    'block' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5cfde6e7550_30536481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5cfde6e7550_30536481')) {function content_62b5cfde6e7550_30536481($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Applications/MAMP/htdocs/cs_cart2/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_block'));
?>
<div id="block_type_list">
    <div id="content_block_type_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['block_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("block_edit_link", null, null); ob_start(); ?>
                <div class="select-block-box">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"bmicon-".((string)smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],'_','-'))),$_smarty_tpl);?>

                </div>
                <div class="select-block-description">
                    <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],20,"...",true), ENT_QUOTES, 'UTF-8', true),'...','&hellip;');?>
</strong>
                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

            <?php if ($_smarty_tpl->tpl_vars['block']->value['is_manageable']) {?>
                <div class="select-block">
                        <?php ob_start();
echo htmlspecialchars(rawurlencode($_REQUEST['r_url']), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php ob_start();?><?php echo Smarty::$_smarty_vars['capture']['block_edit_link'];?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"block_properties_".((string)$_smarty_tpl->tpl_vars['block']->value['type']),'title_start'=>$_smarty_tpl->__("add_block"),'title_end'=>$_smarty_tpl->tpl_vars['block']->value['name'],'act'=>"link",'href'=>"block_manager.update_block?block_data[type]=".((string)$_smarty_tpl->tpl_vars['type']->value)."&r_url=".$_tmp1,'opener_ajax_class'=>"cm-ajax cm-ajax-force",'content'=>'','link_text'=>$_tmp2), 0);?>

                </div>
            <?php }?>
        <?php } ?>
        <!--content_create_new_blocks_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <!--add_new_block<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
