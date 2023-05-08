<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:21:32
  from 'C:\xampp\htdocs\atempo_prestashop\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a2fc922b66_50824314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fdf0778cfda430c050b3c8171de33ded2ac1c4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1683529940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a2fc922b66_50824314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '5346409326458a2fc919e96_29977835';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3785556066458a2fc91c3c2_17674174', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_3785556066458a2fc91c3c2_17674174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_3785556066458a2fc91c3c2_17674174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
