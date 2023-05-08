<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:58:42
  from 'module:iqitelementorviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458abb288a466_59377034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2250361eb10369a5a6af91281303641da61fcf84' => 
    array (
      0 => 'module:iqitelementorviewstemplat',
      1 => 1683531506,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458abb288a466_59377034 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['options']->value['elementor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php } else { ?>
    <div class="rte-content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
<?php }?>

<?php }
}
