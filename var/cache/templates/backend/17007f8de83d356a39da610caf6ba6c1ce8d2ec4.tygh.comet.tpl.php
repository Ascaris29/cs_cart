<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:50:41
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/comet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65038908662b461a17c8a39-40535807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17007f8de83d356a39da610caf6ba6c1ce8d2ec4' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/common/comet.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '65038908662b461a17c8a39-40535807',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461a17d2d00_24707325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461a17d2d00_24707325')) {function content_62b461a17d2d00_24707325($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('processing'));
?>
<a id="comet_container_controller" data-backdrop="static" data-keyboard="false" href="#comet_control" data-toggle="modal" class="hide"></a>

<div class="modal hide fade" id="comet_control" tabindex="-1" role="dialog" aria-labelledby="comet_title" aria-hidden="true">
    <div class="modal-header">
        <h3 id="comet_title"><?php echo $_smarty_tpl->__("processing");?>
</h3>
    </div>
    <div class="modal-body">
        <p></p>
        <div class="progress progress-striped active">
            
            <div class="bar" style="width: 0%;"></div>
        </div>
    </div>
</div><?php }} ?>
