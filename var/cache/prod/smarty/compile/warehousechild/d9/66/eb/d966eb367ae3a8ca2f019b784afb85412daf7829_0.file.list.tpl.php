<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:54:07
  from 'C:\xampp\htdocs\atempo_prestashop\modules\iqitmegamenu\views\templates\hook\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458aa9f8ce330_29793515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd966eb367ae3a8ca2f019b784afb85412daf7829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\modules\\iqitmegamenu\\views\\templates\\hook\\list.tpl',
      1 => 1683531506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458aa9f8ce330_29793515 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel"><h3><i class="icon-list-ul"></i> <?php if ($_smarty_tpl->tpl_vars['menu_type']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Horizontal tabs list','mod'=>'iqitmegamenu'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['menu_type']->value == 2) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vertical tabs list','mod'=>'iqitmegamenu'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['menu_type']->value == 3) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Predefinied submenu tabs','mod'=>'iqitmegamenu'),$_smarty_tpl ) );
}?>
	<span class="panel-heading-action">
		<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=iqitmegamenu&addTab=1&menu_type=<?php echo $_smarty_tpl->tpl_vars['menu_type']->value;?>
">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
	</span>
	</h3>
	<div id="tabsContent">
		<div id="tabs<?php echo $_smarty_tpl->tpl_vars['menu_type']->value;?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
				<div id="tabs_<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_tab'];?>
" class="panel" style="padding: 10px 10px 0px 10px;">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows "></i></span>
						</div>
						<div class="col-md-11">
							<h4 class="pull-left">#<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_tab'];?>
 - <?php echo $_smarty_tpl->tpl_vars['tab']->value['title'];?>
</h4>
							<div class="btn-group-action pull-right">
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=iqitmegamenu&duplicateTabC=<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_tab'];?>
">
									<i class="icon-edit"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=iqitmegamenu&id_tab=<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_tab'];?>
&menu_type=<?php echo $_smarty_tpl->tpl_vars['menu_type']->value;?>
">
									<i class="icon-edit"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=iqitmegamenu&delete_id_tab=<?php echo $_smarty_tpl->tpl_vars['tab']->value['id_tab'];?>
">
									<i class="icon-trash"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqitmegamenu'),$_smarty_tpl ) );?>

								</a>
							</div>
						</div>
					</div>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div>
<?php }
}
