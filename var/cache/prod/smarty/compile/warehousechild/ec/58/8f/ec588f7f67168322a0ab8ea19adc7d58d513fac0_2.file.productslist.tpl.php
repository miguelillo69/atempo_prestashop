<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'C:\xampp\htdocs\atempo_prestashop\modules\iqitelementor\views\templates\widgets\productslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a8606b1480_12851659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec588f7f67168322a0ab8ea19adc7d58d513fac0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\modules\\iqitelementor\\views\\templates\\widgets\\productslist.tpl',
      1 => 1683531506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-small.tpl' => 2,
    'file:catalog/_partials/miniatures/product.tpl' => 2,
    'file:catalog/_partials/miniatures/product-list.tpl' => 1,
  ),
),false)) {
function content_6458a8606b1480_12851659 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="elementor-products">

        <?php if ($_smarty_tpl->tpl_vars['view']->value == 'carousel_s' || $_smarty_tpl->tpl_vars['view']->value == 'carousel') {?>
            <div class="swiper-container-wrapper swiper-overflow swiper-arrows-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arrows_position']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="products elementor-products-carousel swiper-products-carousel swiper-container products-grid  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cls_fix_classes']->value, ENT_QUOTES, 'UTF-8');?>
"  data-slider_options='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['options']->value ));?>
'>
                <div class="swiper-wrapper">
        <?php } else { ?>
            <div class="products row <?php if ($_smarty_tpl->tpl_vars['view']->value == 'list') {?>products-list<?php } else { ?>products-grid <?php }?>">
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['view']->value == 'grid_s') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'nbMobile'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['mobile'],'nbTablet'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['tablet'],'nbDesktop'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['desktop']), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == 'carousel_s') {?>
                <div class="swiper-slide"> <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'carousel'=>true), 0, true);
?> </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == 'grid') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'nbMobile'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['mobile'],'nbTablet'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['tablet'],'nbDesktop'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['desktop']), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == 'list') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true), 0, true);
?>
            <?php } else { ?>
                <div class="swiper-slide"> <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'carousel'=>true), 0, true);
?> </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['view']->value == 'carousel_s' || $_smarty_tpl->tpl_vars['view']->value == 'carousel') {?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['options']->value['dots']) {?>
                        <div class="swiper-pagination elementor-swiper-pagination swiper-dots-outside"></div>
                    <?php }?>
                    </div>
                <?php if ($_smarty_tpl->tpl_vars['options']->value['arrows']) {?>
                    <div class="swiper-button-prev swiper-button elementor-swiper-button elementor-swiper-button-prev"></div>
                    <div class="swiper-button-next swiper-button elementor-swiper-button elementor-swiper-button-next"></div>
                <?php }?>
                <?php }?>
            </div>

</div>
<?php }
}
