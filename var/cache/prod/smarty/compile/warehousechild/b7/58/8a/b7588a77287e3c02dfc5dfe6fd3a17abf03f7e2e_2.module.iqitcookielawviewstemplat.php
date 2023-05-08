<?php
/* Smarty version 3.1.47, created on 2023-05-08 12:12:44
  from 'module:iqitcookielawviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458cb1c0d8232_14289321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7588a77287e3c02dfc5dfe6fd3a17abf03f7e2e' => 
    array (
      0 => 'module:iqitcookielawviewstemplat',
      1 => 1683534383,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458cb1c0d8232_14289321 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7319704556458cb1c0d5fa2_51712003', 'iqitcookielaw');
?>

<?php }
/* {block 'iqitcookielaw'} */
class Block_7319704556458cb1c0d5fa2_51712003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitcookielaw' => 
  array (
    0 => 'Block_7319704556458cb1c0d5fa2_51712003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="iqitcookielaw" class="p-3">
<?php echo $_smarty_tpl->tpl_vars['txt']->value;?>


<button class="btn btn-primary" id="iqitcookielaw-accept"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accept','mod'=>'iqitcookielaw'),$_smarty_tpl ) );?>
</button>
</div>
<?php
}
}
/* {/block 'iqitcookielaw'} */
}
