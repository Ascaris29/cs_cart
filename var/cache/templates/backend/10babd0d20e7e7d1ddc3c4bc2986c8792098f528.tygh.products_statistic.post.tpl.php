<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:59:17
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/index/products_statistic.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47671098062b463a55d1ba8-54637024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10babd0d20e7e7d1ddc3c4bc2986c8792098f528' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_data_premoderation/hooks/index/products_statistic.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '47671098062b463a55d1ba8-54637024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vendor_data_premoderation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b463a55fc5c1_50928004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b463a55fc5c1_50928004')) {function content_62b463a55fc5c1_50928004($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_data_premoderation.require_approval','vendor_data_premoderation.disapproved'));
?>
<?php if (isset($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count'])) {?>
<div class="dashboard-card">
    <div class="dashboard-card-title">
        <?php echo $_smarty_tpl->__("vendor_data_premoderation.require_approval");?>

    </div>
    <div class="dashboard-card-content">
        <h3>
            <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::REQUIRES_APPROVAL"), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.manage?status=".$_tmp2), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['require_approval_count']), ENT_QUOTES, 'UTF-8');?>

            </a>
        </h3>
    </div>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count'])) {?>
<div class="dashboard-card">
    <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendor_data_premoderation.disapproved");?>
</div>
    <div class="dashboard-card-content">
        <h3>
            <a href="<?php ob_start();
echo htmlspecialchars(smarty_modifier_enum("Addons\VendorDataPremoderation\ProductStatuses::DISAPPROVED"), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo htmlspecialchars(fn_url("products.manage?status=".$_tmp3), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['vendor_data_premoderation']->value['disapproved_count']), ENT_QUOTES, 'UTF-8');?>

            </a>
        </h3>
    </div>
</div>
<?php }?>
<?php }} ?>
