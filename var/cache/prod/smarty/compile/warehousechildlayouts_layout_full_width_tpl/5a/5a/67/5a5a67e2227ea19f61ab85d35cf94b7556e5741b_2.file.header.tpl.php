<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'C:\xampp\htdocs\atempo_prestashop\themes\warehouse\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a860c39eb9_97118833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a5a67e2227ea19f61ab85d35cf94b7556e5741b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\warehouse\\templates\\_partials\\header.tpl',
      1 => 1683531524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_elements/social-links.tpl' => 1,
    'file:_partials/_variants/header-1.tpl' => 1,
    'file:_partials/_variants/header-2.tpl' => 1,
    'file:_partials/_variants/header-3.tpl' => 1,
    'file:_partials/_variants/header-4.tpl' => 1,
    'file:_partials/_variants/header-5.tpl' => 1,
    'file:_partials/_variants/header-6.tpl' => 1,
    'file:_partials/_variants/header-7.tpl' => 1,
    'file:_partials/_variants/header-8.tpl' => 1,
    'file:_partials/_variants/mobile-header-1.tpl' => 1,
    'file:_partials/_variants/mobile-header-2.tpl' => 1,
    'file:_partials/_variants/mobile-header-3.tpl' => 1,
  ),
),false)) {
function content_6458a860c39eb9_97118833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2884624356458a860c19893_42007421', 'header_banner');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21272975526458a860c1a838_03210548', 'header_nav');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18048320906458a860c207c3_96243406', 'header_desktop');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15592173146458a860c35916_66742315', 'header_mobile');
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBelowHeader'),$_smarty_tpl ) );?>

<?php }
/* {block 'header_banner'} */
class Block_2884624356458a860c19893_42007421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_2884624356458a860c19893_42007421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_21272975526458a860c1a838_03210548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_21272975526458a860c1a838_03210548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['tb_width'] == 'fullwidth') {?>
        <nav class="header-nav">
        <div class="container">
    <?php } else { ?>
        <div class="container">
        <nav class="header-nav">
    <?php }?>

        <div class="row justify-content-between">
            <div class="col col-auto col-md left-nav">
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['tb_social'] == 1) {?> <div class="d-inline-block"> <?php $_smarty_tpl->_subTemplateRender('file:_elements/social-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'_topbar'), 0, false);
?> </div> <?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

            </div>
            <div class="col col-auto center-nav text-center">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCenter'),$_smarty_tpl ) );?>

             </div>
            <div class="col col-auto col-md right-nav text-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

             </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['tb_width'] == 'fullwidth') {?>
                </div>
            </nav>
        <?php } else { ?>
                </nav>
            </div>
        <?php }
}
}
/* {/block 'header_nav'} */
/* {block 'header_desktop'} */
class Block_18048320906458a860c207c3_96243406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_desktop' => 
  array (
    0 => 'Block_18048320906458a860c207c3_96243406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="desktop-header" class="desktop-header-style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHeaderTop'),$_smarty_tpl ) );?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 3) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 4) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 5) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 6) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 7) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-7.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 8) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-8.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>
<?php
}
}
/* {/block 'header_desktop'} */
/* {block 'header_mobile'} */
class Block_15592173146458a860c35916_66742315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_mobile' => 
  array (
    0 => 'Block_15592173146458a860c35916_66742315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="mobile-header" class="mobile-header-style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_header'], ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_header'] == 1) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/mobile-header-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_header'] == 2) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/mobile-header-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_header'] == 3) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/mobile-header-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'header_mobile'} */
}
