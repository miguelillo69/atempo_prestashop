<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:33
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a861044707_18043644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4e1571b6b210795247564db06deb17061778b51' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1683531523,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a861044707_18043644 (Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>

<?php }
}
