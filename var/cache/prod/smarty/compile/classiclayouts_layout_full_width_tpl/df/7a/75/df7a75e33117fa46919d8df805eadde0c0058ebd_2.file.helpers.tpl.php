<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:21:32
  from 'C:\xampp\htdocs\atempo_prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a2fcc32ad2_31794501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df7a75e33117fa46919d8df805eadde0c0058ebd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1683529940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a2fcc32ad2_31794501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\atempo_prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\df\\7a\\75\\df7a75e33117fa46919d8df805eadde0c0058ebd_2.file.helpers.tpl.php',
    'uid' => 'df7a75e33117fa46919d8df805eadde0c0058ebd',
    'call_name' => 'smarty_template_function_renderLogo_9792436996458a2fcc1bea9_99889920',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_9792436996458a2fcc1bea9_99889920 */
if (!function_exists('smarty_template_function_renderLogo_9792436996458a2fcc1bea9_99889920')) {
function smarty_template_function_renderLogo_9792436996458a2fcc1bea9_99889920(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_9792436996458a2fcc1bea9_99889920 */
}
