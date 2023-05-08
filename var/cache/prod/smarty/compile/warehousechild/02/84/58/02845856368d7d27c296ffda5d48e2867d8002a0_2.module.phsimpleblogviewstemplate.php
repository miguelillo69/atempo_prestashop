<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:28:12
  from 'module:phsimpleblogviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dccca980e5_41188661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02845856368d7d27c296ffda5d48e2867d8002a0' => 
    array (
      0 => 'module:phsimpleblogviewstemplate',
      1 => 1683534391,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ph_simpleblog/views/templates/front/1.7/_partials/type-url/post-thumbnail.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/_partials/type-default/post-thumbnail.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/_partials/type-url/post-headline.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/_partials/type-default/post-headline.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/_partials/type-default/post-bottomline.tpl' => 1,
    'module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature-footer.tpl' => 1,
  ),
),false)) {
function content_6458dccca980e5_41188661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\atempo_prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="simpleblog__listing__post
    <?php if ($_smarty_tpl->tpl_vars['blogLayout']->value == 'grid' && $_smarty_tpl->tpl_vars['columns']->value == '3') {?>
        col-md-4 col-sm-6 col-xs-12 col-ms-12 <?php echo smarty_function_cycle(array('values'=>"first-in-line,second-in-line,last-in-line"),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['blogLayout']->value == 'grid' && $_smarty_tpl->tpl_vars['columns']->value == '4') {?>
        col-md-3 col-sm-6 col-xs-12 col-ms-12 <?php echo smarty_function_cycle(array('values'=>"first-in-line,second-in-line,third-in-line,last-in-line"),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['blogLayout']->value == 'grid' && $_smarty_tpl->tpl_vars['columns']->value == '2') {?>
        col-md-6 col-sm-6 col-xs-12 col-ms-12 <?php echo smarty_function_cycle(array('values'=>"first-in-line,last-in-line"),$_smarty_tpl);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['blogLayout']->value == 'elementor') {?>
        elementor-blog-post-miniature
    <?php } else { ?>
        col-12
    <?php }?>"
    >
    <div class="simpleblog__listing__post__wrapper cardblog post-item">
        <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == 'url') {?>
            <?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/type-url/post-thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/type-default/post-thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
        <div class="simpleblog__listing__post__wrapper__content card-block">
            <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == 'url') {?>
                <?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/type-url/post-headline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/type-default/post-headline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>

            <?php if (Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')) {?>
                <p itemprop="description" class="d-inline">
                    <?php echo htmlspecialchars(strip_tags($_smarty_tpl->tpl_vars['post']->value['short_content']), ENT_QUOTES, 'UTF-8');?>

                </p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] != 'url') {?>
                <?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/type-default/post-bottomline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div><!-- .simpleblog__listing__post__wrapper -->
</div><!-- .simpleblog__listing__post --><?php }
}
