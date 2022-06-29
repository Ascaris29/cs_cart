<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 17:43:45
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/views/advanced_import/modifiers_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55980445362b47c21cc4b85-16050103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7eb7d0e88caef957b06218b3afbcac691dfd66a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/advanced_import/views/advanced_import/modifiers_list.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '55980445362b47c21cc4b85-16050103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modifiers' => 0,
    'name' => 0,
    'modifier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b47c21d8c1a4_96703543',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b47c21d8c1a4_96703543')) {function content_62b47c21d8c1a4_96703543($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.modifiers_description','advanced_import.modifiers_self_referencing_info','advanced_import.modifier_description.','advanced_import.modifier_number_of_parameters','any','advanced_import.modifier_self_reference_is_unsupported'));
?>
<p><?php echo $_smarty_tpl->__("advanced_import.modifiers_description");?>
</p>
<p><?php echo $_smarty_tpl->__("advanced_import.modifiers_self_referencing_info");?>
</p>

<ul>
    <?php  $_smarty_tpl->tpl_vars["modifier"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["modifier"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modifiers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["modifier"]->key => $_smarty_tpl->tpl_vars["modifier"]->value) {
$_smarty_tpl->tpl_vars["modifier"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["modifier"]->key;
?>
        <li class="advanced-import__modifier-description">
            <?php echo $_smarty_tpl->__("advanced_import.modifier_description.".((string)$_smarty_tpl->tpl_vars['name']->value));?>

            <ul>
                <li><?php echo $_smarty_tpl->__("advanced_import.modifier_number_of_parameters");?>
: <b><?php if ($_smarty_tpl->tpl_vars['modifier']->value['parameters']===null) {
echo $_smarty_tpl->__("any");
} else {
echo $_smarty_tpl->tpl_vars['modifier']->value['parameters'];
}?></b></li>
                <?php if ($_smarty_tpl->tpl_vars['modifier']->value['current']===null) {?>
                    <li><?php echo $_smarty_tpl->__("advanced_import.modifier_self_reference_is_unsupported");?>
</li>
                <?php }?>
            </ul>
        </li>
    <?php } ?>
</ul>

<?php }} ?>
