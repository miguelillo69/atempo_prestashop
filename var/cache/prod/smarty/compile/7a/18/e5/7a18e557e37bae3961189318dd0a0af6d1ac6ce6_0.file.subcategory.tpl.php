<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:54:18
  from 'C:\xampp\htdocs\atempo_prestashop\modules\iqitmegamenu\views\templates\admin\_configure\helpers\form\subcategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458aaaad34ab1_39514798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a18e557e37bae3961189318dd0a0af6d1ac6ce6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\modules\\iqitmegamenu\\views\\templates\\admin\\_configure\\helpers\\form\\subcategory.tpl',
      1 => 1683531506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./subcategory.tpl' => 3,
  ),
),false)) {
function content_6458aaaad34ab1_39514798 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['ids']->value)) && $_smarty_tpl->tpl_vars['type']->value == 2 && in_array($_smarty_tpl->tpl_vars['category']->value['id'],$_smarty_tpl->tpl_vars['ids']->value)) {?>selected<?php }?> > <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
	<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['children']))) {?>

		<?php if ((isset($_smarty_tpl->tpl_vars['ids']->value)) && $_smarty_tpl->tpl_vars['type']->value == 2) {?>
			<?php $_smarty_tpl->_subTemplateRender("file:./subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children'],'ids'=>$_smarty_tpl->tpl_vars['ids']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value), 0, true);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender("file:./subcategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('categories'=>$_smarty_tpl->tpl_vars['category']->value['children']), 0, true);
?>
		<?php }?>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
