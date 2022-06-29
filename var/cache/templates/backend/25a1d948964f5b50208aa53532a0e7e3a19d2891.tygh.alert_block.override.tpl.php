<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:59:17
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_debt_payout/hooks/index/alert_block.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39957853162b463a5469266-03704041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25a1d948964f5b50208aa53532a0e7e3a19d2891' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_debt_payout/hooks/index/alert_block.override.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '39957853162b463a5469266-03704041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dashboard_alert' => 0,
    'is_block_alert' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b463a54ca2b0_73544245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b463a54ca2b0_73544245')) {function content_62b463a54ca2b0_73544245($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dashboard_alert']->value) {?>
    <div class="alert alert-block <?php if ($_smarty_tpl->tpl_vars['is_block_alert']->value) {?>alert-error debt-notification<?php }?>">
        <div class="debt-notification__text">
            <?php echo $_smarty_tpl->tpl_vars['dashboard_alert']->value;?>

        </div>
    </div>
<?php }?><?php }} ?>
