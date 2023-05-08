<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:26:25
  from 'C:\xampp\htdocs\atempo_prestashop\modules\ph_simpleblog\views\templates\admin\simple_blog_posts\helpers\list\list_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dc617939b9_21501444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f2cb9db98ab4d2cff24a31a07674de6d0961202' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\modules\\ph_simpleblog\\views\\templates\\admin\\simple_blog_posts\\helpers\\list\\list_footer.tpl',
      1 => 1683534386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458dc617939b9_21501444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1403773886458dc61792079_97585920', "after");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_footer.tpl");
}
/* {block "after"} */
class Block_1403773886458dc61792079_97585920 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1403773886458dc61792079_97585920',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (Configuration::get('PH_BLOG_ADVERTISING')) {?>
<iframe style="overflow:hidden;border:1px solid #f0f0f0;border-radius:10px;width:100%;height:175px;" src="https://api.prestahome.com/check_offer.php?from=ph_simpleblog" border="0"></iframe>
<small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can disable this panel in the Settings','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</small>
<?php }
}
}
/* {/block "after"} */
}
