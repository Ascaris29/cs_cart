<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:52:13
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/vendor_rating/components/relative_vendor_rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211783841962b461fd7c8052-02056713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c796bdd3176e640609de6ab2dbca665cba5ce498' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/themes/responsive/templates/addons/vendor_rating/components/relative_vendor_rating.tpl',
      1 => 1655987794,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '211783841962b461fd7c8052-02056713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'show_icon' => 0,
    'rating' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461fd841178_49255682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461fd841178_49255682')) {function content_62b461fd841178_49255682($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.include_ext.php';
if (!is_callable('smarty_function_set_id')) include '/Applications/MAMP/htdocs/cs_cart2/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&(defined('AREA') ? constant('AREA') : null)=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['show_icon'] = new Smarty_variable(true, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit']===$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']&&$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']===$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']&&$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']==="0") {?>
    <?php $_smarty_tpl->tpl_vars['show_icon'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['show_icon']->value) {?>
    <span class="ty-vendor-rating">
        <?php if ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit']&&$_smarty_tpl->tpl_vars['rating']->value<$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_tmp30=ob_get_clean();?><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--bronze",'title'=>$_tmp30.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']&&$_smarty_tpl->tpl_vars['rating']->value<$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_tmp31=ob_get_clean();?><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--silver",'title'=>$_tmp31.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_tmp32=ob_get_clean();?><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--gold",'title'=>$_tmp32.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php }?>
    </span>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_rating/components/relative_vendor_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_rating/components/relative_vendor_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['show_icon'] = new Smarty_variable(true, null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit']===$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']&&$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']===$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']&&$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']==="0") {?>
    <?php $_smarty_tpl->tpl_vars['show_icon'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['show_icon']->value) {?>
    <span class="ty-vendor-rating">
        <?php if ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit']&&$_smarty_tpl->tpl_vars['rating']->value<$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_tmp33=ob_get_clean();?><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--bronze",'title'=>$_tmp33.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']&&$_smarty_tpl->tpl_vars['rating']->value<$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_tmp34=ob_get_clean();?><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--silver",'title'=>$_tmp34.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value>=$_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_tmp35=ob_get_clean();?><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--gold",'title'=>$_tmp35.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php }?>
    </span>
<?php }?>
<?php }?><?php }} ?>
