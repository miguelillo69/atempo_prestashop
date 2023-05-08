<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:28:12
  from 'module:phsimpleblogviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dcccb43dd8_81279351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baf0d26b6e261f28a968d891964b9e219a0f3204' => 
    array (
      0 => 'module:phsimpleblogviewstemplate',
      1 => 1683534391,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458dcccb43dd8_81279351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\atempo_prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="simpleblog__listing__post__wrapper__footer pt-3 mt-3 text-muted">

        <?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')) {?>
        <div class="simpleblog__listing__post__wrapper__footer__block d-inline-block mr-2">
            <i class="fa fa-calendar"></i>
            <time datetime="<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],'c'), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],Configuration::get('PH_BLOG_DATEFORMAT')), ENT_QUOTES, 'UTF-8');?>

            </time>
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['is_category']->value == false && Configuration::get('PH_BLOG_DISPLAY_CATEGORY')) {?>
        <div class="simpleblog__listing__post__wrapper__footer__block d-inline-block mr-2">
            <i class="fa fa-tags"></i>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8');?>
" rel="category" class="text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['category'], ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['author'])) && !empty($_smarty_tpl->tpl_vars['post']->value['author']) && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')) {?>
        <div class="simpleblog__listing__post__wrapper__footer__block d-inline-block mr-2">
            <i class="fa fa-user"></i>
            <span>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['author'], ENT_QUOTES, 'UTF-8');?>

            </span>
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value['allow_comments'] == true && Configuration::get('PH_BLOG_COMMENTS_SYSTEM') == 'native' && Configuration::get('PH_BLOG_DISPLAY_COMMENTS')) {?>
        <div class="simpleblog__listing__post__wrapper__footer__block d-inline-block mr-2">
            <i class="fa fa-comments"></i>
            <span>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['comments'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

            </span>
        </div>
        <?php }?>
        <?php if (Configuration::get('PH_BLOG_DISPLAY_VIEWS') && $_smarty_tpl->tpl_vars['post']->value['post_type'] != 'url') {?>
        <div class="simpleblog__listing__post__wrapper__footer__block d-inline-block mr-2">
            <i class="fa fa-eye"></i>
            <span>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['views'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'views','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

            </span>
        </div>
        <?php }?>
</div><!-- .simpleblog__listing__post__wrapper__footer --><?php }
}
