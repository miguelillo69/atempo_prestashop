<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:28:12
  from 'module:phsimpleblogviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dcccb11da7_72816067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1087e6b0172dd48b532784788a40e618f62a5de4' => 
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
function content_6458dcccb11da7_72816067 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('PH_BLOG_DISPLAY_MORE')) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="text-muted simpleblog__listing__post__wrapper__content__readmore">
        <span class="text-underline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</span> <i class="fa fa-chevron-right text-smaller"></i>
    </a>
<?php }
}
}
