<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 16:04:30
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/update_for_vendor_storefront_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93166891262b464deb93439-42853372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba362f5a61d7ca879a9fac0fa073b5275789ef7' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_plans/views/vendor_plans/components/update_for_vendor_storefront_notification.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '93166891262b464deb93439-42853372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b464deba7327_33715228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b464deba7327_33715228')) {function content_62b464deba7327_33715228($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_plans.storefronts_update_for_vendor.title','vendor_plans.storefronts_update_for_vendor.general_message','vendor_plans.storefronts_update_for_vendor.add_storefronts_message','vendor_plans.storefronts_update_for_vendor.remove_storefronts_message'));
?>
<div class="hidden alert alert-block" data-ca-vendor-plans="updateVendorStorefrontVendorsNotification">

    <h4>
        <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.title");?>

    </h4>

    <div>
        <div>
            <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.general_message");?>

        </div>

        <div>
            <div data-ca-vendor-plans="updateVendorStorefrontVendorsAddNotification">
                <label class="checkbox">
                    <input type="checkbox" name="company_data[add_vendor_to_new_storefronts]">
                    <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.add_storefronts_message");?>

                </label>
            </div>

            <div data-ca-vendor-plans="updateVendorStorefrontVendorsRemoveNotification">
                <label class="checkbox">
                    <input type="checkbox" name="company_data[remove_vendor_from_old_storefronts]">
                    <?php echo $_smarty_tpl->__("vendor_plans.storefronts_update_for_vendor.remove_storefronts_message");?>

                </label>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
