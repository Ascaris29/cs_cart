<?php /* Smarty version Smarty-3.1.21, created on 2022-06-27 00:02:09
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/geo_maps/hooks/profile/manage_sidebar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133692658962b8c95167c429-23790683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da4e0550483d6f7704589255664b55a231a8a74c' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/geo_maps/hooks/profile/manage_sidebar.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '133692658962b8c95167c429-23790683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'settings' => 0,
    'show_move_map_mobile_hint' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b8c9516b67a6_62715582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b8c9516b67a6_62715582')) {function content_62b8c9516b67a6_62715582($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.shipping_address_on_map','store_locator.use_two_fingers_for_move_map','no_data'));
?>
<?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_id']&&$_smarty_tpl->tpl_vars['user_data']->value['user_type']=='C') {?>
    <div class="sidebar-row">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['geo_maps']['general']['provider']==="yandex") {?>
            <?php $_smarty_tpl->tpl_vars['show_move_map_mobile_hint'] = new Smarty_variable(true, null, 0);?>
        <?php }?>
        <h6><?php echo $_smarty_tpl->__("geo_maps.shipping_address_on_map");?>
</h6>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr']||$_smarty_tpl->tpl_vars['user_data']->value['s_city']||$_smarty_tpl->tpl_vars['user_data']->value['s_address']) {?>
            <div class="geo-map__map-container">
                <div class="cm-geo-map-container cm-aom-map-container"
                    data-ca-geo-map-controls-enable-zoom="true"
                    data-ca-geo-map-controls-enable-fullscreen="true"
                    data-ca-geo-map-controls-enable-layers="true"
                    data-ca-geo-map-controls-enable-ruler="true"
                    data-ca-geo-map-behaviors-enable-drag="true"
                    data-ca-geo-map-behaviors-enable-drag-on-mobile="false"
                    data-ca-geo-map-behaviors-enable-smart-drag="true"
                    data-ca-geo-map-behaviors-enable-dbl-click-zoom="true"
                    data-ca-geo-map-behaviors-enable-multi-touch="true"
                    data-ca-geo-map-language="<?php echo htmlspecialchars((defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-aom-country="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-aom-city="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-aom-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
"
                ></div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['show_move_map_mobile_hint']->value) {?>
                <div class="mobile-visible muted"><?php echo $_smarty_tpl->__("store_locator.use_two_fingers_for_move_map");?>
</div>
            <?php }?>
        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
    </div>
<?php }?>
<?php }} ?>
