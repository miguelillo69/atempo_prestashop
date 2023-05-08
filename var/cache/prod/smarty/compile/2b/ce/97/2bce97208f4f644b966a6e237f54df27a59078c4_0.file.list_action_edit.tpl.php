<?php
/* Smarty version 3.1.47, created on 2023-05-08 11:18:58
  from 'C:\xampp\htdocs\atempo_prestashop\admin_gui01\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458be82a51c01_86879456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bce97208f4f644b966a6e237f54df27a59078c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\admin_gui01\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1683529939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458be82a51c01_86879456 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
