<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:50:05
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a9ad5cb468_37167970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4a476e0a8201677b298f7c0f8ca1ac698e1bac3' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1683531523,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart.tpl' => 1,
  ),
),false)) {
function content_6458a9ad5cb468_37167970 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ps-shoppingcart-wrapper" class="col col-auto">
    <div id="ps-shoppingcart"
         class="header-btn-w header-cart-btn-w ps-shoppingcart <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style'] == "floating") {?>dropdown<?php } else { ?>side-cart<?php }?>">
        <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php }
}
