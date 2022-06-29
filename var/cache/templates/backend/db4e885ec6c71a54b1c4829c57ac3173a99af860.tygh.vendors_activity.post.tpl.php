<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:59:17
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_debt_payout/hooks/index/vendors_activity.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127531386962b463a5653130-81289344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4e885ec6c71a54b1c4829c57ac3173a99af860' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/addons/vendor_debt_payout/hooks/index/vendors_activity.post.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '127531386962b463a5653130-81289344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'time_from' => 0,
    'time_to' => 0,
    'url' => 0,
    'dashboard_vendors_activity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b463a56886a5_51337351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b463a56886a5_51337351')) {function content_62b463a56886a5_51337351($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.dashboard_suspended_vendors'));
?>
<tr>
    <td class="dashboard-vendors-activity__label">
        <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("companies.manage?time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&get_suspended=Y", null, 0);?>
        <a href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("vendor_debt_payout.dashboard_suspended_vendors");?>

        </a>
    </td>
    <td class="dashboard-vendors-activity__value">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['suspended_vendors'], ENT_QUOTES, 'UTF-8');?>

    </td>
</tr>
<?php }} ?>
