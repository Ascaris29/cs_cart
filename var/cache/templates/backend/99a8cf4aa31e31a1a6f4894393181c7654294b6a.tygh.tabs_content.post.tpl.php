<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:48:45
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_categories_fee/hooks/categories/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65371762362b5c0bd6cfc08-95285887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99a8cf4aa31e31a1a6f4894393181c7654294b6a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_categories_fee/hooks/categories/tabs_content.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '65371762362b5c0bd6cfc08-95285887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_plans' => 0,
    'plan' => 0,
    'plan_id' => 0,
    'category_fee' => 0,
    'hide_inputs' => 0,
    'percent_fee' => 0,
    'parent_fee' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5c0bd718ed2_37433370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5c0bd718ed2_37433370')) {function content_62b5c0bd718ed2_37433370($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plan','vendor_categories_fee.percent_fee','vendor_plan','vendor_categories_fee.percent_fee'));
?>
<div id="content_vendor_fee" class="hidden">
    <div class="table-responsive-wrapper">
        <table class="table table-middle table--relative table-responsive">
            <thead class="cm-first-sibling">
            <tr>
                <th width="50%"><?php echo $_smarty_tpl->__("vendor_plan");?>
</th>
                <th width="50%"><?php echo $_smarty_tpl->__("vendor_categories_fee.percent_fee");?>
</th>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vendor_plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['plan_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['plan']->value['plan_id'], null, 0);?>
                <?php $_smarty_tpl->tpl_vars['percent_fee'] = new Smarty_variable($_smarty_tpl->tpl_vars['category_fee']->value[$_smarty_tpl->tpl_vars['plan_id']->value]["percent_fee"], null, 0);?>

                <?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value&&!isset($_smarty_tpl->tpl_vars['percent_fee']->value)) {?>
                    <?php $_smarty_tpl->tpl_vars['percent_fee'] = new Smarty_variable($_smarty_tpl->tpl_vars['parent_fee']->value[$_smarty_tpl->tpl_vars['plan_id']->value]["percent_fee"], null, 0);?>
                <?php }?>

                <tr>
                    <td data-th="<?php echo $_smarty_tpl->__("vendor_plan");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan']->value['plan'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td data-th="<?php echo $_smarty_tpl->__("vendor_categories_fee.percent_fee");?>
">
                        <input type="text" name="category_data[vendor_fee][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plan_id']->value, ENT_QUOTES, 'UTF-8');?>
][percent_fee]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['percent_fee']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!isset($_smarty_tpl->tpl_vars['percent_fee']->value)) {?> placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent_fee']->value[$_smarty_tpl->tpl_vars['plan_id']->value]["percent_fee"], ENT_QUOTES, 'UTF-8');?>
"<?php }?>></td>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php }} ?>
