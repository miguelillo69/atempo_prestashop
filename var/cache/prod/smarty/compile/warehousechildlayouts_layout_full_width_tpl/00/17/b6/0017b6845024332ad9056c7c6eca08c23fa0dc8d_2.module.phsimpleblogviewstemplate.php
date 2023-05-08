<?php
/* Smarty version 3.1.47, created on 2023-05-08 13:28:22
  from 'module:phsimpleblogviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458dcd6c6f943_36268373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0017b6845024332ad9056c7c6eca08c23fa0dc8d' => 
    array (
      0 => 'module:phsimpleblogviewstemplate',
      1 => 1683534391,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ph_simpleblog/views/templates/front/1.7/comments/form.tpl' => 1,
  ),
),false)) {
function content_6458dcd6c6f943_36268373 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="blog-mb simpleblog__comments<?php if ($_smarty_tpl->tpl_vars['post']->value->comments == 0) {?>-empty<?php }?>" id="phsimpleblog_comments">
    <h2 class="section-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->comments, ENT_QUOTES, 'UTF-8');?>
)</span></h2>
    <?php if ($_smarty_tpl->tpl_vars['post']->value->comments) {?>
    <ul class="cardblog mb-0">
    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
        <li class="card-block <?php if ($_smarty_tpl->tpl_vars['comment']->value['is_highlighted']) {?>simpleblog_comments_highlighted<?php }?> pt-3 pb-3">
            <ul class="simpleblog__comments__authorInfo text-muted">
                <li class="simpleblog__comments__authorInfo__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</li>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8');?>
</li>
            </ul>
            <div class="simpleblog__comments__text">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['comment'], ENT_QUOTES, 'UTF-8');?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['comment']->value['depth'] == 0) {?> 
                <button class="reply-simpleblog-button btn btn-secondary btn-sm mt-3" data-id-comment="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['id'], ENT_QUOTES, 'UTF-8');?>
" type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reply','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>
</button>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['comment']->value['replies']) > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value['replies'], 'commentReply');
$_smarty_tpl->tpl_vars['commentReply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['commentReply']->value) {
$_smarty_tpl->tpl_vars['commentReply']->do_else = false;
?>
                <li class="simpleblog_reply_position <?php if ($_smarty_tpl->tpl_vars['commentReply']->value['is_highlighted']) {?>simpleblog_comments_highlighted<?php }?>">
                    <ul class="simpleblog__comments__authorInfo">
                        <li class="simpleblog__comments__authorInfo__author">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['commentReply']->value['name'], ENT_QUOTES, 'UTF-8');?>
 
                        </li>
                        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['commentReply']->value['date_add'], ENT_QUOTES, 'UTF-8');?>
</li>
                    </ul>
                    <div class="simpleblog__comments__text">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['commentReply']->value['comment'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php } else { ?>
    	<div class="warning alert alert-warning mb-2">
    		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No comments at this moment','mod'=>'ph_simpleblog'),$_smarty_tpl ) );?>

    	</div><!-- .warning -->
    <?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/comments/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
