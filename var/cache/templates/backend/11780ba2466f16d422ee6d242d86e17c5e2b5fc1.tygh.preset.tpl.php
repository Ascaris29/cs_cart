<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:58:25
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/views/import_presets/components/preset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118848353062b4718103dfa6-29290081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11780ba2466f16d422ee6d242d86e17c5e2b5fc1' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/views/import_presets/components/preset.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '118848353062b4718103dfa6-29290081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preset' => 0,
    'company_id' => 0,
    'settings' => 0,
    'allowed_ext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b471811a6641_07179412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b471811a6641_07179412')) {function content_62b471811a6641_07179412($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_block_hook')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('name','advanced_import.last_launch','advanced_import.never','advanced_import.last_status','advanced_import.last_status.','text_exim_data_imported','advanced_import.file','remove_this_item','error_file_not_found','choose','advanced_import.uploading_file','select_file','upload','advanced_import.has_modifiers','yes','no','import','clone','edit','advanced_import.file_will_be_deleted_are_you_sure_to_proceed','delete'));
?>
<tr class="import-preset cm-longtap-target" id="preset_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
"
    data-ca-longtap-action="setCheckBox"
    data-ca-longtap-target="input.cm-item"
    data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
"
>
    <td class="left import-preset__checker mobile-hide">
        <input type="checkbox"
               name="preset_ids[]"
               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
"
               class="cm-item hide"
        />
    </td>

    <td class="import-preset__preset" data-th="<?php echo $_smarty_tpl->__("name");?>
">
        <a href="<?php echo htmlspecialchars(fn_url("import_presets.update?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['preset'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['company_id']->value!=$_smarty_tpl->tpl_vars['preset']->value['company_id']) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['preset']->value), 0);?>

        <?php }?>
    </td>

    <td class="import-preset__last-launch" data-th="<?php echo $_smarty_tpl->__("advanced_import.last_launch");?>
">
        <?php if ($_smarty_tpl->tpl_vars['preset']->value['last_launch']) {?>
            <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['preset']->value['last_launch'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("advanced_import.never");?>

        <?php }?>
    </td>

    <td class="import-preset__last-status" data-th="<?php echo $_smarty_tpl->__("advanced_import.last_status");?>
">
        <?php if (!$_smarty_tpl->tpl_vars['preset']->value['last_status']) {?>
            <?php $_smarty_tpl->createLocalArrayVariable('preset', null, 0);
$_smarty_tpl->tpl_vars['preset']->value['last_status'] = 'X';?>
        <?php }?>
        <span class="status--<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['preset']->value['last_status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("advanced_import.last_status.".((string)$_smarty_tpl->tpl_vars['preset']->value['last_status']));?>

            <?php if ($_smarty_tpl->tpl_vars['preset']->value['last_status']==smarty_modifier_enum("Addons\\AdvancedImport\\ImportStatuses::SUCCESS")) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("text_exim_data_imported",array("[new]"=>$_smarty_tpl->tpl_vars['preset']->value['last_result']['N'],"[exist]"=>$_smarty_tpl->tpl_vars['preset']->value['last_result']['E'],"[skipped]"=>$_smarty_tpl->tpl_vars['preset']->value['last_result']['S'],"[total]"=>$_smarty_tpl->tpl_vars['preset']->value['last_result']['N']+$_smarty_tpl->tpl_vars['preset']->value['last_result']['E']+$_smarty_tpl->tpl_vars['preset']->value['last_result']['S']))), 0);?>

            <?php } elseif ($_smarty_tpl->tpl_vars['preset']->value['last_status']==smarty_modifier_enum("Addons\\AdvancedImport\\ImportStatuses::FAIL")&&is_array($_smarty_tpl->tpl_vars['preset']->value['last_result']['msg'])) {?>
                <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>implode("<br>",$_smarty_tpl->tpl_vars['preset']->value['last_result']['msg'])), 0);?>

            <?php }?>
        </span>
    </td>

    <td class="import-preset__file" data-th="<?php echo $_smarty_tpl->__("advanced_import.file");?>
">
        <?php if ($_smarty_tpl->tpl_vars['preset']->value['file']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-cancel cm-adv-import-filename-delete",'id'=>"clean_selection",'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"$".".ceAdvancedImport('removeFile', ".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id']).");"),'icon_text'=>"&nbsp;"),$_smarty_tpl);?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['preset']->value['file_type']==smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::URL")) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['file'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['file'], ENT_QUOTES, 'UTF-8');?>
</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['preset']->value['file_type']==smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::SERVER")) {?>
            <?php if ($_smarty_tpl->tpl_vars['preset']->value['file_path']) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['file'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <span class="type-error"><?php echo $_smarty_tpl->__("error_file_not_found",array("[file]"=>$_smarty_tpl->tpl_vars['preset']->value['file']));?>
</span>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['preset']->value['file_type']===smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::LOCAL")) {?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['file'], ENT_QUOTES, 'UTF-8');?>

        <?php } else { ?>
            <?php smarty_template_function_btn($_smarty_tpl,array('type'=>"dialog",'text'=>$_smarty_tpl->__("choose"),'class'=>"btn cm-dialog-auto-size",'target_id'=>"import_preset_file_upload_".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])));?>

            <?php $_smarty_tpl->_capture_stack[0][] = array("popups", null, null); ob_start(); ?>
                <?php echo Smarty::$_smarty_vars['capture']['popups'];?>


                <div class="hidden" title="<?php echo $_smarty_tpl->__("advanced_import.uploading_file",array("[preset]"=>$_smarty_tpl->tpl_vars['preset']->value['preset']));?>
" id="import_preset_file_upload_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
                          method="post"
                          enctype="multipart/form-data">

                        <input type="hidden" name="preset_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
">
                        <div class="form-horizontal form-edit import-preset__fileuploader-form">

                            <div class="control-group">
                                <label class="control-label"><?php echo $_smarty_tpl->__("select_file");?>
:</label>
                                <div class="controls">
                                    <?php echo $_smarty_tpl->getSubTemplate ("addons/advanced_import/views/import_presets/components/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"upload[".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])."]",'id_var_name'=>"upload_".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id']),'prefix'=>$_smarty_tpl->tpl_vars['preset']->value['preset_id'],'allowed_ext'=>$_smarty_tpl->tpl_vars['allowed_ext']->value,'local_file_ignore'=>true), 0);?>

                                </div>
                            </div>
                            <div class="buttons-container">
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cancel_action'=>"close",'but_text'=>$_smarty_tpl->__("upload"),'but_meta'=>"cm-ajax cm-comet cm-post",'but_name'=>"dispatch[import_presets.upload]"), 0);?>

                            </div>
                        </div>
                    </form>
                    <!--import_preset_file_upload_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php }?>
    </td>

    <td class="import-preset__has-modifiers" data-th="<?php echo $_smarty_tpl->__("advanced_import.has_modifiers");?>
">
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['preset']->value['has_modifiers'])===null||$tmp==='' ? 0 : $tmp)) {?>
            <?php echo $_smarty_tpl->__("yes");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("no");?>

        <?php }?>
    </td>

    <td class="import-preset__run">
        <?php if ($_smarty_tpl->tpl_vars['preset']->value['file_type']==smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::SERVER")&&$_smarty_tpl->tpl_vars['preset']->value['file_path']||$_smarty_tpl->tpl_vars['preset']->value['file_type']==smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::URL")||($_smarty_tpl->tpl_vars['preset']->value['file_type']===smarty_modifier_enum("Addons\\AdvancedImport\\PresetFileTypes::LOCAL"))) {?>
            <a href="<?php echo htmlspecialchars(fn_url("advanced_import.import?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])), ENT_QUOTES, 'UTF-8');?>
"
               class="btn btn-primary cm-ajax cm-comet cm-post"
            ><?php echo $_smarty_tpl->__("import");?>
</a>
        <?php }?>
    </td>

    <td class="import-preset__tools">
        <div class="hidden-tools">
            <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"advanced_import:preset_list_extra_links")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"advanced_import:preset_list_extra_links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("clone"),'method'=>"POST",'href'=>"advanced_import.clone?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])));?>
</li>
                    <?php if (!$_smarty_tpl->tpl_vars['company_id']->value||$_smarty_tpl->tpl_vars['preset']->value['company_id']==$_smarty_tpl->tpl_vars['company_id']->value) {?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"import_presets.update?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id'])));?>
</li>
                        <li>
                            <?php ob_start();
echo $_smarty_tpl->__("advanced_import.file_will_be_deleted_are_you_sure_to_proceed");
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"import_presets.delete?preset_id=".((string)$_smarty_tpl->tpl_vars['preset']->value['preset_id']),'method'=>"POST",'data'=>array("data-ca-confirm-text"=>$_tmp1)));?>

                        </li>
                    <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"advanced_import:preset_list_extra_links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

        </div>
    </td>
<!--preset_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preset']->value['preset_id'], ENT_QUOTES, 'UTF-8');?>
--></tr>
<?php }} ?>
