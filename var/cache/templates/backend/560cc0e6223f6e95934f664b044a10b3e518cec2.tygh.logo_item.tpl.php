<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:40
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/themes/components/logo_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23389633362b461a02b49c6-92268046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '560cc0e6223f6e95934f664b044a10b3e518cec2' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/themes/components/logo_item.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '23389633362b461a02b49c6-92268046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logo' => 0,
    'id' => 0,
    'type' => 0,
    'image' => 0,
    'show_alt' => 0,
    'company_name' => 0,
    'show_hidpi_checkbox' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461a02f2737_96628292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461a02f2737_96628292')) {function content_62b461a02f2737_96628292($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('logo_section.','no_image','alt_text'));
?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['logo']->value['logo_id'])===null||$tmp==='' ? 0 : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['image'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['logo']->value['image'])===null||$tmp==='' ? array() : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
    <input type="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][type]" value="M">
    <input type="hidden" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="logos-section__item attach-images control-group">
        <div class="upload-box clearfix">
            <div class="row-fluid">
                <div class="span12">
                    <h5><?php echo $_smarty_tpl->__("logo_section.".((string)$_smarty_tpl->tpl_vars['type']->value));?>
</h5>
                </div>
            </div>
            <div class="row-fluid">
                <div class="logos-section__image <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
 span4">
                    <div class="image <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>
                            <img class="solid-border" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_path'], ENT_QUOTES, 'UTF-8');?>
" width="152">
                        <?php } else { ?>
                            <div class="no-image"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"glyph-image",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</div>
                        <?php }?>
                    </div>
                    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_alt']->value)===null||$tmp==='' ? true : $tmp)) {?>
                        <div class="image-alt">
                            <div class="input-prepend">
                                <span class="add-on cm-tooltip" title="<?php echo $_smarty_tpl->__("alt_text");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-comment"),$_smarty_tpl);?>
</span>
                                <input type="text" class="input-text cm-image-field" id="alt_text_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" name="logotypes_image_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
][image_alt]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['image']->value['alt'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company_name']->value : $tmp), ENT_QUOTES, 'UTF-8');?>
" value="">
                            </div>
                        </div>
                    <?php }?>
                </div>

                <div class="logos-section image-upload span8">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"logotypes_image_icon[".((string)$_smarty_tpl->tpl_vars['type']->value)."]",'is_image'=>true,'show_hidpi_checkbox'=>(($tmp = @$_smarty_tpl->tpl_vars['show_hidpi_checkbox']->value)===null||$tmp==='' ? true : $tmp)), 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
                        <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8');?>
</div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>
<?php }} ?>
