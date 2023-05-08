<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:33
  from 'C:\xampp\htdocs\atempo_prestashop\themes\warehouse\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a861065726_16021819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '196f3b9b9f30afda25265fdbec88dba12f7edb05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\warehouse\\templates\\_partials\\breadcrumb.tpl',
      1 => 1683531524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a861065726_16021819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value['count'] > 1) {
if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'inherit') {?><div class="container"><?php }?>

<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth') {?>
        <div class="container-fluid">
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth-bg') {?>
        <div class="container">
    <?php }?>
            <div class="row align-items-center">
                <div class="col">
                    <ol>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3383366616458a86105ee21_86098027', 'breadcrumb');
?>

                    </ol>
                </div>
                <div class="col col-auto"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBreadcrumb'),$_smarty_tpl ) );?>
</div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth' || $_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'fullwidth-bg') {?>
        </div>
        <?php }?>
</nav>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_width'] == 'inherit') {?></div><?php }
}
}
/* {block 'breadcrumb_item'} */
class Block_9201856736458a861060066_90062875 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
                                        <li>
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></a>
                                        </li>
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['path']->value['title']))) {?>
                                        <li>
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        </li>
                                    <?php }?>
                                <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_3383366616458a86105ee21_86098027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_3383366616458a86105ee21_86098027',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_9201856736458a861060066_90062875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>



                                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9201856736458a861060066_90062875', 'breadcrumb_item', $this->tplIndex);
?>


                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
}
/* {/block 'breadcrumb'} */
}
