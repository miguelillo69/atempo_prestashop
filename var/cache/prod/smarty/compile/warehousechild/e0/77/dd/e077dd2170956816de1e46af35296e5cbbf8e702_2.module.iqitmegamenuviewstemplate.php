<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'module:iqitmegamenuviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a860ef6440_01237998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e077dd2170956816de1e46af35296e5cbbf8e702' => 
    array (
      0 => 'module:iqitmegamenuviewstemplate',
      1 => 1683531506,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a860ef6440_01237998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'mobile_links' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\atempo_prestashop\\var\\cache\\prod\\smarty\\compile\\warehousechild\\e0\\77\\dd\\e077dd2170956816de1e46af35296e5cbbf8e702_2.module.iqitmegamenuviewstemplate.php',
    'uid' => 'e077dd2170956816de1e46af35296e5cbbf8e702',
    'call_name' => 'smarty_template_function_mobile_links_8036600076458a860ee7461_69990444',
  ),
));
?>



<?php if ((isset($_smarty_tpl->tpl_vars['menu']->value))) {?>
	<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'mobile_links', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value,'first'=>true), true);?>

<?php }
}
/* smarty_template_function_mobile_links_8036600076458a860ee7461_69990444 */
if (!function_exists('smarty_template_function_mobile_links_8036600076458a860ee7461_69990444')) {
function smarty_template_function_mobile_links_8036600076458a860ee7461_69990444(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'first'=>false), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

	<?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {
if (!$_smarty_tpl->tpl_vars['first']->value) {?><ul><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['node']->value['title']))) {?><li><?php if ((isset($_smarty_tpl->tpl_vars['node']->value['children']))) {?><span class="mm-expand"><i class="fa fa-angle-down expand-icon" aria-hidden="true"></i><i class="fa fa-angle-up close-icon" aria-hidden="true"></i></span><?php }?><a <?php if ((isset($_smarty_tpl->tpl_vars['node']->value['href']))) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['href'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ((isset($_smarty_tpl->tpl_vars['node']->value['children']))) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'mobile_links', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'first'=>false), true);
}?></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!$_smarty_tpl->tpl_vars['first']->value) {?></ul><?php }
}
}}
/*/ smarty_template_function_mobile_links_8036600076458a860ee7461_69990444 */
}
