<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:04:30
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114052639062b464dedc8fd8-32583175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d05055cb440d4f5bd99a3b4c83384689fe1c9d1' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/picker/item.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '114052639062b464dedc8fd8-32583175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'title_pre' => 0,
    'title_post' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b464dee06d45_03618194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b464dee06d45_03618194')) {function content_62b464dee06d45_03618194($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
?><div class="object-picker__vendor-plan-main">
    <?php if ($_smarty_tpl->tpl_vars['type']->value==="result") {?>
        <div class="object-picker__vendor-plan-content">
            <div class="object-picker__vendor-plan-name">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 ${data.name}<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
            <div class="object-picker__vendor-plan-monthly-fee">
                ${data.price}&nbsp;${data.periodicity}
            </div>
            <div class="object-picker__vendor-plan-transaction-fee">
                ${data.commission_text}
            </div>
            <div class="object-picker__vendor-plan-vendor-count">
                ${data.vendor_count_text}
            </div>
            <div class="object-picker__vendor-plan-status">
                ${data.status}
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="selection") {?>
        ${data.name}(${data.price})
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="load") {?>
        ...
    <?php } elseif ($_smarty_tpl->tpl_vars['type']->value==="new_item") {?>
        <div class="object-picker__results-label object-picker__vendor-plan-results-label">
            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? true : $tmp)) {?>
                <div class="object-picker__results-label-icon-wrapper object-picker__vendor-plan-results-label-icon-wrapper">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)(($tmp = @$_smarty_tpl->tpl_vars['icon']->value)===null||$tmp==='' ? 'icon-plus-sign' : $tmp))." object-picker__results-label-icon object-picker__vendor-plan-results-label-icon"),$_smarty_tpl);?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['title_pre']->value) {?>
                <div class="object-picker__results-label-prefix object-picker__vendor-plan-results-label-prefix">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>

                </div>
            <?php }?>
            <div class="object-picker__results-label-body object-picker__vendor-plan-results-label-body">
                ${data.name}
            </div>
        </div>
    <?php }?>
</div>
<?php }} ?>
