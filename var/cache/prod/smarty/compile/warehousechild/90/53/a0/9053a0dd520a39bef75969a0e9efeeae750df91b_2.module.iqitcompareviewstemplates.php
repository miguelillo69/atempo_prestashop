<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'module:iqitcompareviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a860813080_52544823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9053a0dd520a39bef75969a0e9efeeae750df91b' => 
    array (
      0 => 'module:iqitcompareviewstemplates',
      1 => 1683531505,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a860813080_52544823 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['id_product']->value))) {?>
<a href="#" class="btn-iqitcompare-add js-iqitcompare-add"  data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
"
   data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitcompare','controller'=>'actions'),$_smarty_tpl ) );?>
" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','mod'=>'iqitcompare'),$_smarty_tpl ) );?>
">
    <i class="fa fa-random" aria-hidden="true"></i>
</a>
<?php }
}
}
