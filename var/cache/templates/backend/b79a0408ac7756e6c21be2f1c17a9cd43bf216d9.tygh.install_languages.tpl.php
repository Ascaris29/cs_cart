<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:16:19
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/languages/components/install_languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132657233462b5b923413de7-33772715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b79a0408ac7756e6c21be2f1c17a9cd43bf216d9' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/languages/components/install_languages.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '132657233462b5b923413de7-33772715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langs_meta' => 0,
    'runtime' => 0,
    'language' => 0,
    'countries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b9234e0703_13016781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b9234e0703_13016781')) {function content_62b5b9234e0703_13016781($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.count.php';
if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('language_code','name','country','language_code','name','country','install','no_items'));
?>
<div class="hidden" id="content_available_languages">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['langs_meta']->value)>0) {?>
        
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="languages_install_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>cm-hide-inputs<?php }?>">
            <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-responsive">
                <thead>
                    <tr class="cm-first-sibling">
                        <th><?php echo $_smarty_tpl->__("language_code");?>
</th>
                        <th><?php echo $_smarty_tpl->__("name");?>
</th>
                        <th><?php echo $_smarty_tpl->__("country");?>
</th>
                        <th class="right">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                <?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs_meta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
                    <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                        <td data-th="<?php echo $_smarty_tpl->__("language_code");?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>

                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("name");?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>

                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("country");?>
">
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"flag flag-".((string)strtolower($_smarty_tpl->tpl_vars['language']->value['country_code']))),$_smarty_tpl);
echo htmlspecialchars($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['language']->value['country_code']], ENT_QUOTES, 'UTF-8');?>

                        </td>
                        <td class="right" data-th="">
                            <?php ob_start();
echo htmlspecialchars(fn_url("languages.install?pack=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code'])), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>$_tmp1,'but_text'=>$_smarty_tpl->__("install"),'but_role'=>"action",'but_meta'=>"lowercase cm-post"), 0);?>

                        </td>

                    </tr>
                <?php } ?>
                </tbody>
                </table>
            </div>

        </form>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
    <?php }?>
<!--content_available_languages--></div>
<?php }} ?>
