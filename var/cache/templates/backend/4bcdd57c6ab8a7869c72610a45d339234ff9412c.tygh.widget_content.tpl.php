<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:41
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/setup_wizard/components/widget_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189813864962b461a17af668-82124111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bcdd57c6ab8a7869c72610a45d339234ff9412c' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/setup_wizard/components/widget_content.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '189813864962b461a17af668-82124111',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461a17ba1d0_53169258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461a17ba1d0_53169258')) {function content_62b461a17ba1d0_53169258($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sw.store_setup_wizard_short','sw.marketplace_setup_wizard'));
?>
<div class="hidden">
    <div class="setup-wizard-panel no-js">
        <a class="handle open cm-ajax" id="opener_sw_wizard_opener" data-ca-target-id="sw_wizard_container" data-ca-event-name="setupwizard" href="<?php echo htmlspecialchars(fn_url("setup_wizard.manage"), ENT_QUOTES, 'UTF-8');?>
">
            <span class="mobile-visible">
                <?php echo $_smarty_tpl->__("sw.store_setup_wizard_short");?>

            </span>
            <span class="mobile-hidden">
                <?php echo $_smarty_tpl->__("sw.marketplace_setup_wizard");?>

            </span>
        </a>

        <a class="handle close" id="sw_wizard_closer" href="#"></a>
        <div class="setup-wizard-content" id="sw_wizard_container"><!--sw_wizard_container--></div>
    </div>
</div>

<?php }} ?>
