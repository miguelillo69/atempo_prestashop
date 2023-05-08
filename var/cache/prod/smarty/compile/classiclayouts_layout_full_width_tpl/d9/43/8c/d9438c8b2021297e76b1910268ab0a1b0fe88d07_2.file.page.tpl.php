<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:21:32
  from 'C:\xampp\htdocs\atempo_prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a2fcb84550_21491468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9438c8b2021297e76b1910268ab0a1b0fe88d07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1683529940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a2fcb84550_21491468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8947068386458a2fcb7c638_56518083', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_10764542026458a2fcb7d517_70961635 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_17177017636458a2fcb7cbb8_42889113 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10764542026458a2fcb7d517_70961635', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_17763835236458a2fcb81e13_28896470 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20549461006458a2fcb82532_33849062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15764389876458a2fcb818c2_88514212 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17763835236458a2fcb81e13_28896470', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20549461006458a2fcb82532_33849062', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_174361276458a2fcb83705_19700390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4463550496458a2fcb831d2_32198600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174361276458a2fcb83705_19700390', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_8947068386458a2fcb7c638_56518083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8947068386458a2fcb7c638_56518083',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_17177017636458a2fcb7cbb8_42889113',
  ),
  'page_title' => 
  array (
    0 => 'Block_10764542026458a2fcb7d517_70961635',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_15764389876458a2fcb818c2_88514212',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17763835236458a2fcb81e13_28896470',
  ),
  'page_content' => 
  array (
    0 => 'Block_20549461006458a2fcb82532_33849062',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4463550496458a2fcb831d2_32198600',
  ),
  'page_footer' => 
  array (
    0 => 'Block_174361276458a2fcb83705_19700390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17177017636458a2fcb7cbb8_42889113', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15764389876458a2fcb818c2_88514212', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4463550496458a2fcb831d2_32198600', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
