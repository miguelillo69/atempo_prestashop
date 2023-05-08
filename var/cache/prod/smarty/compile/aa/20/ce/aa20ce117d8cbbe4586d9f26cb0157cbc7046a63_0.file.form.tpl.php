<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:26:34
  from 'C:\xampp\htdocs\atempo_prestashop\modules\ph_simpleblog\views\templates\admin\simple_blog_posts\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dc6a04e479_40633705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa20ce117d8cbbe4586d9f26cb0157cbc7046a63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\modules\\ph_simpleblog\\views\\templates\\admin\\simple_blog_posts\\helpers\\form\\form.tpl',
      1 => 1683534386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./post_images.tpl' => 1,
  ),
),false)) {
function content_6458dc6a04e479_40633705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10569245646458dc6a01dc25_66037312', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4479926196458dc6a04d352_31594853', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_10569245646458dc6a01dc25_66037312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_10569245646458dc6a01dc25_66037312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == "tags") {?>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
		<div class="row">
		<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
				
				<?php echo '<script'; ?>
 type="text/javascript">
					$().ready(function () {
						var input_id = 'tags_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
';
						$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add tag','js'=>1),$_smarty_tpl ) );?>
'});
						$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
							$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
						});
					});
				<?php echo '</script'; ?>
>
				
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
				<div class="col-lg-9">
			<?php }?>
					<input type="text" id="tags_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="tagify updateCurrentText" name="tags_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" 
					value="<?php echo $_smarty_tpl->tpl_vars['simpleblogpost']->value->getTags($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" />
			<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
				</div>
				<div class="col-lg-2">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<li>
							<a href="javascript:hideOtherLanguage(<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
						</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
			<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
		</div>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == "post_images") {?>
        <?php $_smarty_tpl->_subTemplateRender("file:./post_images.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'featured') {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['display_image'])) && $_smarty_tpl->tpl_vars['input']->value['display_image']) {?>
			<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['featured'])) && $_smarty_tpl->tpl_vars['fields_value']->value['featured']) {?>
				<div id="image">
					<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['featured'];?>

					<p align="center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File size'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['fields_value']->value['featured_size'];?>
kb</p>
					<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&deleteFeatured=1">
						<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

					</a>
				</div>
			<?php }?>
		<?php }?>
		<input type="file" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
"<?php }?> /> 
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'cover') {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['display_image'])) && $_smarty_tpl->tpl_vars['input']->value['display_image']) {?>
			<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['cover'])) && $_smarty_tpl->tpl_vars['fields_value']->value['cover']) {?>
				<div id="image">
					<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['cover'];?>

					<p align="center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'File size'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['fields_value']->value['cover_size'];?>
kb</p>
					<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&deleteCover=1">
						<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

					</a>
				</div>
			<?php }?>
		<?php }?>
		<input type="file" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
"<?php }?> />
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select_category') {?>
		<select name="id_parent">
			<?php echo $_smarty_tpl->tpl_vars['input']->value['options']['html'];?>

		</select>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'elementor-button') {?>
		<div id="elementor-button-blog-wrapper"></div>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == "link_rewrite") {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		<?php if ((isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value)) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }?>
		<?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "script"} */
class Block_4479926196458dc6a04d352_31594853 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_4479926196458dc6a04d352_31594853',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function(){
	hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['defaultFormLanguage']->value;?>
);
	$(".copyNiceUrl").live('keyup change',function(e){
		if(!isArrowKey(e))
			return copyNiceUrl();
	});
});
function copyNiceUrl()
{
	$('#link_rewrite_' + id_language).val(str2url($('#name_' + id_language).val().replace(/^[0-9]+\./, ''), 'UTF-8'));
}	
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
