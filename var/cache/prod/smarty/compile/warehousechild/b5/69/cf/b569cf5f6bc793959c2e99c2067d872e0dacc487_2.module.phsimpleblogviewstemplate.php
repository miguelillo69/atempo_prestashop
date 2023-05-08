<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:28:12
  from 'module:phsimpleblogviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dcccae6d45_27300909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b569cf5f6bc793959c2e99c2067d872e0dacc487' => 
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
function content_6458dcccae6d45_27300909 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 itemprop="headline" class="simpleblog__listing__post__wrapper__content__headline post-title">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8');?>

    </a>
</h3><?php }
}
