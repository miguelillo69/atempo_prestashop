<?php
/* Smarty version 3.1.47, created on 2023-05-08 12:12:44
  from 'module:iqitpopupviewstemplatesho' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458cb1c0336e3_59788199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b166f7c8dc620ec07e6ab5438f4221ad26ff2d3e' => 
    array (
      0 => 'module:iqitpopupviewstemplatesho',
      1 => 1683534384,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458cb1c0336e3_59788199 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="iqitpopup">
    <div class="iqitpopup-close">
        <div class="iqit-close-checkbox">
<span class="custom-checkbox">
    <input type="checkbox" name="iqitpopup-checkbox" id="iqitpopup-checkbox" checked/>
    <span><i class="fa fa-check checkbox-checked"></i></span>
	<label for="iqitpopup-checkbox"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not show again.','mod'=>'iqitpopup'),$_smarty_tpl ) );?>
</label>
</span>

        </div>
        <div class="iqit-close-popup"><span class="cross" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close window','mod'=>'iqitpopup'),$_smarty_tpl ) );?>
"></span></div>
    </div>


    <div class="iqitpopup-content"><?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['newsletter']->value) {?>
        <div class="iqitpopup-newsletter-form">
            <div class="row">
                <div class="col-12">
                    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'index','params'=>array('fc'=>'module','module'=>'iqitemailsubscriptionconf','controller'=>'subscription')),$_smarty_tpl ) );?>
" method="post" class="form-inline justify-content-center">
                        <input class="inputNew form-control grey newsletter-input mr-3" type="text" name="email" size="18"
                               placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your e-mail','mod'=>'iqitpopup'),$_smarty_tpl ) );?>
" value=""/>
                        <button type="submit" name="submitNewsletter"
                                class="btn btn-primary button button-medium iqit-btn-newsletter">
                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','mod'=>'iqitpopup'),$_smarty_tpl ) );?>
</span>
                        </button>
                        <input type="hidden" name="action" value="0"/>
                        <div class="col-12 text-center mt-3 text-muted"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','mod'=>'psgdpr','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>
</div>
                    </form>
                </div>
            </div>
        </div>
    <?php }?>
</div> <!-- #layer_cart -->
<div id="iqitpopup-overlay"></div>
<?php }
}
