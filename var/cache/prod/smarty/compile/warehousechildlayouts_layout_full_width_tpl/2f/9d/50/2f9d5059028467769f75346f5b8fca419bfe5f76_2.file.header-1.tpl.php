<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'C:\xampp\htdocs\atempo_prestashop\themes\warehouse\templates\_partials\_variants\header-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a860d27b13_18252889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f9d5059028467769f75346f5b8fca419bfe5f76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\warehouse\\templates\\_partials\\_variants\\header-1.tpl',
      1 => 1683531524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-default.tpl' => 1,
  ),
),false)) {
function content_6458a860d27b13_18252889 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="header-top">
    <div id="desktop-header-container" class="container">
        <div class="row align-items-center">
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_logo_position'] == 'left') {?>
                <div class="col col-auto col-header-left">
                    <div id="desktop_logo">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

                    </div>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderLeft'),$_smarty_tpl ) );?>

                </div>
                <div class="col col-header-center">
                    <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt']) {?>
                        <div class="header-custom-html">
                            <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt'];?>

                        </div>
                    <?php }?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"iqitsearch"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderCenter'),$_smarty_tpl ) );?>

                </div>
            <?php } else { ?>
                <div class="col col-header-left">
                    <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt']) {?>
                        <div class="header-custom-html">
                            <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['h_txt'];?>

                        </div>
                    <?php }?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"iqitsearch"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderLeft'),$_smarty_tpl ) );?>

                </div>
                <div class="col col-header-center text-center">
                    <div id="desktop_logo">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

                    </div>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderCenter'),$_smarty_tpl ) );?>

                </div>
            <?php }?>
            <div class="col <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_logo_position'] == 'left') {?>col-auto<?php }?> col-header-right text-right">
                <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiBegin",'m'=>"ps_shoppingcart",'field'=>"widget_block",'tpl'=>"module:ps_shoppingcart/ps_shoppingcart-default.tpl"),$_smarty_tpl ) );?>

                    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_shoppingcart"));
$_block_repeat=true;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-default.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_block_repeat=false;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"litespeedEsiEnd"),$_smarty_tpl ) );?>

                <?php }?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_customersignin"),$_smarty_tpl ) );?>


                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderRight'),$_smarty_tpl ) );?>

            </div>
            <div class="col-12">
                <div class="row">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container iqit-megamenu-container"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMainMenu'),$_smarty_tpl ) );?>
</div>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>


<?php }
}
