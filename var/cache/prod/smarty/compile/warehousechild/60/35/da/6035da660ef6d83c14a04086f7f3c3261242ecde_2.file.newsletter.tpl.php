<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'C:\xampp\htdocs\atempo_prestashop\modules\iqitelementor\views\templates\widgets\newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a8609cc6c3_81969831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6035da660ef6d83c14a04086f7f3c3261242ecde' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\modules\\iqitelementor\\views\\templates\\widgets\\newsletter.tpl',
      1 => 1683531506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a8609cc6c3_81969831 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="elementor-newsletter newsletter-form">
    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'index','params'=>array('fc'=>'module','module'=>'iqitemailsubscriptionconf','controller'=>'subscription')),$_smarty_tpl ) );?>
" method="post" class="elementor-newsletter-form">
        <div class="row">
            <div class="col-12">
                <input
                        class="btn btn-primary pull-right hidden-xs-down elementor-newsletter-btn"
                        name="submitNewsletter"
                        type="submit"
                        value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                >
                <input
                        class="btn btn-primary pull-right hidden-sm-up elementor-newsletter-btn"
                        name="submitNewsletter"
                        type="submit"
                        value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
"
                >
                <div class="input-wrapper">
                    <input
                            name="email"
                            class="form-control elementor-newsletter-input"
                            type="email"
                            value=""
                            placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                    >
                </div>
                <input type="hidden" name="action" value="0">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterRegistration'),$_smarty_tpl ) );?>

                <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                    <div class="mt-2 text-muted"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>
</div>
                <?php }?>
            </div>
        </div>
    </form>
</div><?php }
}
