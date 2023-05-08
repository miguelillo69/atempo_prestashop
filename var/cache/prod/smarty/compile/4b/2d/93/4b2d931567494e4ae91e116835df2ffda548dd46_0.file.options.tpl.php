<?php
/* Smarty version 3.1.47, created on 2023-05-08 11:18:58
  from 'C:\xampp\htdocs\atempo_prestashop\modules\iqitelementor\views\templates\admin\iqit_elementor\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458be82b8bbc9_41675505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b2d931567494e4ae91e116835df2ffda548dd46' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\modules\\iqitelementor\\views\\templates\\admin\\iqit_elementor\\helpers\\options\\options.tpl',
      1 => 1683534383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458be82b8bbc9_41675505 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4636496466458be82b76981_83100868', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "input"} */
class Block_4636496466458be82b76981_83100868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_4636496466458be82b76981_83100868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'instagram_connect') {?>
    <div class="col-lg-9">
        <div class="elementor-instagram-connection">
        <?php if ($_smarty_tpl->tpl_vars['field']->value['token']) {?>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your connected instagram account','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</p>
            <a href="https://instagram.com/<?php echo $_smarty_tpl->tpl_vars['field']->value['username'];?>
/" target="_blank" class="m-b-2 m-r-1 btn btn-connect-with-instagram">
                    <i class="icon-instagram"></i> <?php echo $_smarty_tpl->tpl_vars['field']->value['username'];?>

            </a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['field']->value['urlRemove'];?>
" class="m-b-2 m-r-1 btn btn-danger">
                <i class="icon-trash"></i>
            </a>
            <p class="expiration-date"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiration date','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['field']->value['instagramExpDate'];?>
(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Autorenewal','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
)</p>
        <?php } else { ?>
        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['url'],'html','UTF-8' ));?>
" class="m-b-2 m-r-1 btn pointer btn-connect-with-instagram"><i class="icon-instagram"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect with your Instagram','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
</a>
        <?php }?>
        </div>
    </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['desc'])) && !empty($_smarty_tpl->tpl_vars['field']->value['desc'])) {?>
            <div class="col-lg-9 col-lg-offset-3">
                <div class="help-block">
                    <?php if (is_array($_smarty_tpl->tpl_vars['field']->value['desc'])) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['desc'], 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                            <?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
                                <span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['field']->value['desc'];?>

                    <?php }?>
                </div>
            </div>
        <?php }?>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input"} */
}
