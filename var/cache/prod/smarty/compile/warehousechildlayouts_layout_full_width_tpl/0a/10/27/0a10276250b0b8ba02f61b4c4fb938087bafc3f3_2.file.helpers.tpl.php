<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'C:\xampp\htdocs\atempo_prestashop\themes\warehouse\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a860ae9155_72367840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a10276250b0b8ba02f61b4c4fb938087bafc3f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\warehouse\\templates\\_partials\\helpers.tpl',
      1 => 1683531524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a860ae9155_72367840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\atempo_prestashop\\var\\cache\\prod\\smarty\\compile\\warehousechildlayouts_layout_full_width_tpl\\0a\\10\\27\\0a10276250b0b8ba02f61b4c4fb938087bafc3f3_2.file.helpers.tpl.php',
    'uid' => '0a10276250b0b8ba02f61b4c4fb938087bafc3f3',
    'call_name' => 'smarty_template_function_renderLogo_16307844526458a860ad97f8_58848947',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_16307844526458a860ad97f8_58848947 */
if (!function_exists('smarty_template_function_renderLogo_16307844526458a860ad97f8_58848947')) {
function smarty_template_function_renderLogo_16307844526458a860ad97f8_58848947(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img class="logo img-fluid"
         src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
"
         <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'] != '') {?> srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_logo'], ENT_QUOTES, 'UTF-8');?>
 2x"<?php }?>
         alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
         width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
         height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
"
    >
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_16307844526458a860ad97f8_58848947 */
}
