<?php /* Smarty version Smarty-3.1.21, created on 2022-06-24 16:15:23
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/snippets/components/adv_buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138155785162b5b8eb725cd7-06546759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58b6d7527e1350667cbda583f93af59ad88dca3f' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/snippets/components/adv_buttons.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '138155785162b5b8eb725cd7-06546759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'return_url' => 0,
    'link_text' => 0,
    'return_url_escape' => 0,
    'result_ids' => 0,
    'type' => 0,
    'addon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b5b8eb74d252_14792193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b5b8eb74d252_14792193')) {function content_62b5b8eb74d252_14792193($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('add_snippet'));
?>
<?php if (fn_check_permissions("snippets","update","admin","POST")) {?>
    <?php $_smarty_tpl->tpl_vars['return_url_escape'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['return_url']->value), null, 0);?>

    <?php ob_start();
echo $_smarty_tpl->__("add_snippet");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('method'=>"POST",'id'=>"add_snippet",'text'=>$_tmp1,'link_text'=>(($tmp = @$_smarty_tpl->tpl_vars['link_text']->value)===null||$tmp==='' ? '' : $tmp),'act'=>"general",'icon'=>"icon-plus",'href'=>"snippets.update?snippet_id=0&return_url=".((string)$_smarty_tpl->tpl_vars['return_url_escape']->value)."&current_result_ids=".((string)$_smarty_tpl->tpl_vars['result_ids']->value)."&type=".((string)$_smarty_tpl->tpl_vars['type']->value)."&addon=".((string)$_smarty_tpl->tpl_vars['addon']->value)), 0);?>

<?php }?><?php }} ?>
