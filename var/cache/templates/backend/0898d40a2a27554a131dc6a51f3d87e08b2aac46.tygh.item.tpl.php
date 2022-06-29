<?php /* Smarty version Smarty-3.1.21, created on 2022-06-23 15:51:57
         compiled from "/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/products/components/picker/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47988658762b461ed6756b6-88925141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0898d40a2a27554a131dc6a51f3d87e08b2aac46' => 
    array (
      0 => '/Applications/MAMP/htdocs/cs_cart2/design/backend/templates/views/products/components/picker/item.tpl',
      1 => 1652778226,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '47988658762b461ed6756b6-88925141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_simple_product' => 0,
    'title_pre' => 0,
    'title_post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_62b461ed6862e0_27745630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62b461ed6862e0_27745630')) {function content_62b461ed6862e0_27745630($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['show_simple_product'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['show_simple_product']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['show_simple_product']->value) {?>

    ${data.image && data.image.image_path
        ? `<img src="${data.image.image_path}" width="30" height="30" alt="${data.image.alt}" class="object-picker__products-image"/>
        ` : `<div class="no-image object-picker__products-image object-picker__products-image--no-image" style="width: 30px; height: 30px;"> <span class="cs-icon glyph-image"></span></div>`
    }

<?php }?>

<div class="object-picker__products-main">
    <div class="object-picker__products-name">
        <div class="object-picker__products-name-content">
            <span class="object-picker__products-name-text">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_pre']->value, ENT_QUOTES, 'UTF-8');?>
 
                
                    ${data.product ? data.product : data.text}
                 
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title_post']->value, ENT_QUOTES, 'UTF-8');?>

            </span>
        </div>
    </div>
</div><?php }} ?>
