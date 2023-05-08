<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'module:iqitwishlistviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a860cf8bf8_66330181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73277702161b17505d668b28b8368941cf42c568' => 
    array (
      0 => 'module:iqitwishlistviewstemplate',
      1 => 1683531508,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a860cf8bf8_66330181 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-inline-block">
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitwishlist','controller'=>'view'),$_smarty_tpl ) );?>
">
        <i class="fa fa-heart-o fa-fw" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'iqitwishlist'),$_smarty_tpl ) );?>
 (<span
                id="iqitwishlist-nb"></span>)
    </a>
</div>
<?php }
}
