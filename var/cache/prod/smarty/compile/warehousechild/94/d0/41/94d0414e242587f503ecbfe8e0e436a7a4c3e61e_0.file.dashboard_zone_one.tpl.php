<?php
/* Smarty version 3.1.47, created on 2023-05-08 10:29:32
  from 'C:\xampp\htdocs\atempo_prestashop\modules\iqitdashboardnews\views\templates\hook\dashboard_zone_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458b2ec82ec16_87718504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94d0414e242587f503ecbfe8e0e436a7a4c3e61e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\modules\\iqitdashboardnews\\views\\templates\\hook\\dashboard_zone_one.tpl',
      1 => 1683534383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458b2ec82ec16_87718504 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="dashiqitnews" class="panel widget">
	<div class="panel-heading">
		 <img src="../modules/iqitdashboardnews/views/img/logo.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IQIT-COMMERCE updates','mod'=>'iqitdashboardnews'),$_smarty_tpl ) );?>
" /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'updates','mod'=>'iqitdashboardnews'),$_smarty_tpl ) );?>

	</div>
	<section id="iqit_iframe">
		<iframe width="100%" height="180px"
				src="//iqit-commerce.com/iframe/lastnews/news17.php?product=warehouse&psversion=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ps_version']->value,'html','UTF-8' ));?>
&version=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_version']->value,'html','UTF-8' ));?>
"
				style="border: none; overflow: hidden;"></iframe>
	</section>
</section>
<?php }
}
