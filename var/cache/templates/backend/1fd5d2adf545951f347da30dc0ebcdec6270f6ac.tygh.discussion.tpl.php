<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:56
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/discussion/views/discussion_manager/components/discussion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20967611662b461ec67c9f8-50788623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fd5d2adf545951f347da30dc0ebcdec6270f6ac' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/discussion/views/discussion_manager/components/discussion.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20967611662b461ec67c9f8-50788623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'discussion' => 0,
    'is_allowed_to_add_reviews' => 0,
    'runtime' => 0,
    'object_company_id' => 0,
    'is_allowed_to_update_reviews' => 0,
    'is_owned_object' => 0,
    'is_company_reviews' => 0,
    'selected_section' => 0,
    'is_allowed_to_bulk_delete_reviews' => 0,
    'allow_save' => 0,
    'post' => 0,
    'user_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ec7168d8_20132760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ec7168d8_20132760')) {function content_62b461ec7168d8_20132760($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_script')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_post','add_post','no_data','text_enabled_testimonials_notice'));
?>
<?php if ($_smarty_tpl->tpl_vars['discussion']->value&&$_smarty_tpl->tpl_vars['discussion']->value['object_type']&&!$_smarty_tpl->tpl_vars['discussion']->value['is_empty']) {?>

    <?php $_smarty_tpl->tpl_vars['is_allowed_to_add_reviews'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['is_allowed_to_add_reviews']->value)===null||$tmp==='' ? fn_check_permissions("discussion","add","admin",'') : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['is_allowed_to_update_reviews'] = new Smarty_variable(fn_check_permissions("discussion","update","admin"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['is_allowed_to_bulk_delete_reviews'] = new Smarty_variable(fn_check_permissions("discussion","m_delete","admin"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['is_owned_object'] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_id']==$_smarty_tpl->tpl_vars['object_company_id']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['is_company_reviews'] = new Smarty_variable($_smarty_tpl->tpl_vars['discussion']->value['object_type']===smarty_modifier_enum("Addons\Discussion\DiscussionObjectTypes::COMPANY"), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['allow_save'] = new Smarty_variable($_smarty_tpl->tpl_vars['is_allowed_to_update_reviews']->value&&!($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&(!$_smarty_tpl->tpl_vars['is_owned_object']->value||$_smarty_tpl->tpl_vars['is_company_reviews']->value)), null, 0);?>
    <div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value!=="discussion"&&$_smarty_tpl->tpl_vars['runtime']->value['controller']!=="discussion") {?>hidden<?php }?>" id="content_discussion">
    <div class="clearfix">
        <div class="buttons-container buttons-bg pull-right">
            <?php if ($_smarty_tpl->tpl_vars['is_allowed_to_add_reviews']->value&&!($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&(!$_smarty_tpl->tpl_vars['is_owned_object']->value||$_smarty_tpl->tpl_vars['is_company_reviews']->value))) {?>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type']==smarty_modifier_enum("Addons\Discussion\DiscussionObjectTypes::TESTIMONIALS_AND_LAYOUT")) {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_post",'title'=>$_smarty_tpl->__("add_post"),'icon'=>"icon-plus",'act'=>"general",'link_class'=>"cm-dialog-switch-avail"), 0);?>

                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_post",'link_text'=>$_smarty_tpl->__("add_post"),'act'=>"general",'link_class'=>"cm-dialog-switch-avail"), 0);?>

                <?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']&&$_smarty_tpl->tpl_vars['is_allowed_to_update_reviews']->value) {?>
                <?php $_smarty_tpl->tpl_vars['show_save_btn'] = new Smarty_variable(true, null, 2);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars['show_save_btn'] = clone $_smarty_tpl->tpl_vars['show_save_btn']; $_ptr = $_ptr->parent; }?>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type']==smarty_modifier_enum("Addons\Discussion\DiscussionObjectTypes::TESTIMONIALS_AND_LAYOUT")) {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("buttons_insert", null, null); ob_start(); ?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['is_allowed_to_bulk_delete_reviews']->value) {?>
                    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete_selected",'dispatch'=>"dispatch[discussion.m_delete]",'form'=>"update_posts_form"));?>
</li>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type']==smarty_modifier_enum("Addons\Discussion\DiscussionObjectTypes::TESTIMONIALS_AND_LAYOUT")) {?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php }?>
            <?php }?>
        </div>
    </div><br>

    <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

        <?php echo smarty_function_script(array('src'=>"js/addons/discussion/discussion.js"),$_smarty_tpl);?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true,'id'=>"pagination_discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>


        <div class="posts-container <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-no-hide-input<?php } else { ?>cm-hide-inputs<?php }?>">
            <?php  $_smarty_tpl->tpl_vars["post"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["post"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['discussion']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["post"]->key => $_smarty_tpl->tpl_vars["post"]->value) {
$_smarty_tpl->tpl_vars["post"]->_loop = true;
?>
                <div class="post-item <?php if ($_smarty_tpl->tpl_vars['discussion']->value['object_type']==smarty_modifier_enum("Addons\Discussion\DiscussionObjectTypes::ORDER")) {
if ($_smarty_tpl->tpl_vars['post']->value['user_id']==$_smarty_tpl->tpl_vars['user_id']->value) {?>incoming<?php } else { ?>outgoing<?php }
}?>">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"discussion:items_list_row")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('post'=>$_smarty_tpl->tpl_vars['post']->value,'type'=>$_smarty_tpl->tpl_vars['discussion']->value['type']), 0);?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"discussion:items_list_row"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php } ?>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"pagination_discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0);?>


    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

    </div>

<?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['is_empty']) {?>

    <?php echo $_smarty_tpl->__("text_enabled_testimonials_notice",array("[link]"=>fn_url("addons.manage#groupdiscussion")));?>


<?php }?>
<?php }} ?>
