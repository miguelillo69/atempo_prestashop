<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'C:\xampp\htdocs\atempo_prestashop\themes\warehouse\templates\catalog\_partials\miniatures\_partials\product-miniature-btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a8608d71d5_23098439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2877e5d66fedb8264258d47e1f4e15709c46952a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\warehouse\\templates\\catalog\\_partials\\miniatures\\_partials\\product-miniature-btn.tpl',
      1 => 1683531524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a8608d71d5_23098439 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-add-cart js-product-add-cart-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" >

    <?php if (!(isset($_smarty_tpl->tpl_vars['max_quantity']->value))) {?>
        <?php $_smarty_tpl->_assignInScope('max_quantity', $_smarty_tpl->tpl_vars['product']->value['quantity']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] && ($_smarty_tpl->tpl_vars['max_quantity']->value > 0 || $_smarty_tpl->tpl_vars['product']->value['allow_oosp']) && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'], ENT_QUOTES, 'UTF-8');?>
" method="post">

            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="input-group-add-cart">
                <input
                        type="number"
                        name="qty"
                        value="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])) && $_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'] != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
}?>"
                        class="form-control input-qty"
                        min="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])) && $_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'] != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
}?>"
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>max="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['max_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                >

                <button
                        class="btn btn-product-list add-to-cart"
                        data-button-action="add-to-cart"
                        type="submit"
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
                            disabled
                        <?php }?>
                ><i class="fa fa-shopping-bag fa-fw bag-icon"
                    aria-hidden="true"></i> <i class="fa fa-circle-o-notch fa-spin fa-fw spinner-icon" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </button>
            </div>
        </form>
    <?php } else { ?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
           class="btn btn-product-list"
        > <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </a>
    <?php }?>
</div><?php }
}
