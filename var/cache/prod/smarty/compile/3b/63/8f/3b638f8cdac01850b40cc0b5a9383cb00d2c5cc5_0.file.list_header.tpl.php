<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:26:25
  from 'C:\xampp\htdocs\atempo_prestashop\modules\ph_simpleblog\views\templates\admin\simple_blog_posts\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dc6173c6e6_78199201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b638f8cdac01850b40cc0b5a9383cb00d2c5cc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\modules\\ph_simpleblog\\views\\templates\\admin\\simple_blog_posts\\helpers\\list\\list_header.tpl',
      1 => 1683534386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458dc6173c6e6_78199201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20508412046458dc6173aa34_15890731', "override_header");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "override_header"} */
class Block_20508412046458dc6173aa34_15890731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_20508412046458dc6173aa34_15890731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['phpWarning']->value == true) {?>
<div class="alert alert-warning">
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Important! Starting June 2021, Blog for PrestaShop will support only PHP in version 7.1 or higher, ask your hosting provider to update PHP version on your server.','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

</div>
<?php }
}
}
/* {/block "override_header"} */
}
