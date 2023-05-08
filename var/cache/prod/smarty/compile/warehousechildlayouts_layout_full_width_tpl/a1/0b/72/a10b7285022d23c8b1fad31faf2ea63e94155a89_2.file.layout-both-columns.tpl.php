<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'C:\xampp\htdocs\atempo_prestashop\themes\warehouse\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a860abb186_88110673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a10b7285022d23c8b1fad31faf2ea63e94155a89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\warehouse\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1683531524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_6458a860abb186_88110673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19700442206458a860a8c5a9_50528785', 'head');
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head']) {?> <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head'];?>
 <?php }?>
</head>

<body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 body-desktop-header-style-w-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18627349556458a860a90260_04462320', 'body_gtm');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18442800656458a860a92016_07868328', 'hook_after_body_opening_tag');
?>


<main id="main-page-content" <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader'] == "pre" && (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre']))) {?>style="opacity: 0;"<?php }?> >
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11602851946458a860a93f13_71889149', 'product_activation');
?>


    <header id="header" class="desktop-header-style-w-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7121377886458a860a95244_89548223', 'header');
?>

    </header>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3993833806458a860a95e56_70056733', 'checkout_header');
?>


    <section id="wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16086687006458a860a96526_22317867', 'hook_display_wrapper_top');
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="inner-wrapper" class="container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19890008706458a860a975c7_63925968', 'hook_display_wrapper_top_container');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20810835846458a860a981f4_88611670', 'notifications');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5800406136458a860a98fd5_67448747', "layout_row_start");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10816079026458a860a99890_04135145', "content_wrapper");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2575580116458a860a9cfa4_93755911', "left_column");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7475860886458a860aa00c2_96648527', "right_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7318389776458a860aa3a35_46560517', "layout_row_end");
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17464892816458a860aa4fe4_76803237', '`hook_display_wrapper_bottom_container');
?>

        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17495281246458a860aa7ac9_53194984', 'hook_display_wrapper_bottom');
?>

    </section>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8768339746458a860aaa727_12937273', 'checkout_footer');
?>

    <footer id="footer" class="js-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18829562246458a860aacd85_68939352', "footer");
?>

    </footer>

</main>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1087201056458a860aae845_91807172', 'javascript_bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11095203506458a860ab0399_78564832', 'hook_before_body_closing_tag');
?>


<button id="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</button>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader'] == "pre" && (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre']))) {?>
    <div id="page-preloader" style="">
        <div class="loader-wrapper">
            <div class="loader loader-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'], ENT_QUOTES, 'UTF-8');?>
"></div>
        </div>
    </div>
<?php }?>
<div id="cart-error-toast" class="toast ns-box ns-show ns-box-danger hide" role="alert" aria-live="assertive" aria-atomic="true" style="position: fixed; top: 2rem; right: 2rem; z-index: 999999;" data-delay="4000">
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body']) {?> <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body'];?>
 <?php }?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8265410126458a860ab5e85_57661786', 'hook_fonts');
?>





</body>

</html>
<?php }
/* {block 'head'} */
class Block_19700442206458a860a8c5a9_50528785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19700442206458a860a8c5a9_50528785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'body_gtm'} */
class Block_18627349556458a860a90260_04462320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body_gtm' => 
  array (
    0 => 'Block_18627349556458a860a90260_04462320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtm'])) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtm']) {?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_gtm'], ENT_QUOTES, 'UTF-8');?>
"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php }
}
}
/* {/block 'body_gtm'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_18442800656458a860a92016_07868328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_18442800656458a860a92016_07868328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_11602851946458a860a93f13_71889149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_11602851946458a860a93f13_71889149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_7121377886458a860a95244_89548223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_7121377886458a860a95244_89548223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'checkout_header'} */
class Block_3993833806458a860a95e56_70056733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_header' => 
  array (
    0 => 'Block_3993833806458a860a95e56_70056733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkout_header'} */
/* {block 'hook_display_wrapper_top'} */
class Block_16086687006458a860a96526_22317867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_top' => 
  array (
    0 => 'Block_16086687006458a860a96526_22317867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_top'} */
/* {block 'hook_display_wrapper_top_container'} */
class Block_19890008706458a860a975c7_63925968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_top_container' => 
  array (
    0 => 'Block_19890008706458a860a975c7_63925968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTopInContainer"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_top_container'} */
/* {block 'notifications'} */
class Block_20810835846458a860a981f4_88611670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_20810835846458a860a981f4_88611670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'notifications'} */
/* {block "layout_row_start"} */
class Block_5800406136458a860a98fd5_67448747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_start' => 
  array (
    0 => 'Block_5800406136458a860a98fd5_67448747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="row">
            <?php
}
}
/* {/block "layout_row_start"} */
/* {block "content"} */
class Block_1981614956458a860a9ada5_20538488 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <p>Hello world! This is HTML5 Boilerplate.</p>
                        <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_10816079026458a860a99890_04135145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_10816079026458a860a99890_04135145',
  ),
  'content' => 
  array (
    0 => 'Block_1981614956458a860a9ada5_20538488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="content-wrapper" class=" js-content-wrapperleft-column right-column col-12 col-md-6 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-8<?php }?>">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1981614956458a860a9ada5_20538488', "content", $this->tplIndex);
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_column"} */
class Block_2575580116458a860a9cfa4_93755911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_2575580116458a860a9cfa4_93755911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="left-column" class="col-12 col-md-3 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-2<?php }?> order-first">
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] != 6 && $_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] != 7) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayVerticalMenu"),$_smarty_tpl ) );
}?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                        </div>
                <?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_7475860886458a860aa00c2_96648527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_7475860886458a860aa00c2_96648527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="right-column" class="col-12 col-md-3 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-2<?php }?>">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block "right_column"} */
/* {block "layout_row_end"} */
class Block_7318389776458a860aa3a35_46560517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_end' => 
  array (
    0 => 'Block_7318389776458a860aa3a35_46560517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                </div>
            <?php
}
}
/* {/block "layout_row_end"} */
/* {block '`hook_display_wrapper_bottom_container'} */
class Block_17464892816458a860aa4fe4_76803237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  '`hook_display_wrapper_bottom_container' => 
  array (
    0 => 'Block_17464892816458a860aa4fe4_76803237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottomInContainer"),$_smarty_tpl ) );
}
}
/* {/block '`hook_display_wrapper_bottom_container'} */
/* {block 'hook_display_wrapper_bottom'} */
class Block_17495281246458a860aa7ac9_53194984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_wrapper_bottom' => 
  array (
    0 => 'Block_17495281246458a860aa7ac9_53194984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_wrapper_bottom'} */
/* {block 'checkout_footer'} */
class Block_8768339746458a860aaa727_12937273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_footer' => 
  array (
    0 => 'Block_8768339746458a860aaa727_12937273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkout_footer'} */
/* {block "footer"} */
class Block_18829562246458a860aacd85_68939352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18829562246458a860aacd85_68939352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_1087201056458a860aae845_91807172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_1087201056458a860aae845_91807172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_11095203506458a860ab0399_78564832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_11095203506458a860ab0399_78564832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
/* {block 'hook_fonts'} */
class Block_8265410126458a860ab5e85_57661786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_fonts' => 
  array (
    0 => 'Block_8265410126458a860ab5e85_57661786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_bfont_t'] == 'google' || $_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_t'] == 'google') {?>
        <link rel="preconnect"
              href="https://fonts.gstatic.com"
              crossorigin />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_bfont_t'] == 'google') {?>
        <link rel="preload"
              as="style"
              href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_bfont_g_url'], ENT_QUOTES, 'UTF-8');?>
" />

        <link rel="stylesheet"
              href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_bfont_g_url'], ENT_QUOTES, 'UTF-8');?>
"
              media="print" onload="this.media='all'" />

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_t'] == 'google') {?>
        <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_g_url'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
        <link rel="preload"
              as="style"
              href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_g_url'], ENT_QUOTES, 'UTF-8');?>
" />

        <link rel="stylesheet"
              href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_g_url'], ENT_QUOTES, 'UTF-8');?>
"
              media="print" onload="this.media='all'" />
    <?php }
}
}
/* {/block 'hook_fonts'} */
}
