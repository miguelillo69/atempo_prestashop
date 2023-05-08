<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:28:12
  from 'module:phsimpleblogviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dcccac8152_76571398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7f0158787c6f667181cab6ad78210d9d5246bb3' => 
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
function content_6458dcccac8152_76571398 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL') && ((isset($_smarty_tpl->tpl_vars['post']->value['banner_wide'])) || (isset($_smarty_tpl->tpl_vars['post']->value['banner_thumb'])))) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" itemprop="url">
    <?php if ($_smarty_tpl->tpl_vars['blogLayout']->value == 'full') {?>
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_wide'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" class="img-fluid photo mb-3" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_sizes']['wide']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_sizes']['wide']['height'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy">
    <?php } else { ?>
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_thumb'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" class="img-fluid photo mb-3" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_sizes']['thumb']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_sizes']['thumb']['height'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"
    <?php }?>
</a>
<?php }
}
}
