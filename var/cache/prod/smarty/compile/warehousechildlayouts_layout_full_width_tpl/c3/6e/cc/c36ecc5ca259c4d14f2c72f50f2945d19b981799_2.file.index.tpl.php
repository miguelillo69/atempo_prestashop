<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:32
  from 'C:\xampp\htdocs\atempo_prestashop\themes\warehouse\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a860a25163_51383124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c36ecc5ca259c4d14f2c72f50f2945d19b981799' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\warehouse\\templates\\index.tpl',
      1 => 1683531524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458a860a25163_51383124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12205425606458a860a16607_21461597', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15218362066458a860a19b24_01098287', 'head');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_9182015746458a860a16b35_20964925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_230604396458a860a178e6_21368784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

            <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_15955657856458a860a17308_80297008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_230604396458a860a178e6_21368784', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12205425606458a860a16607_21461597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12205425606458a860a16607_21461597',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9182015746458a860a16b35_20964925',
  ),
  'page_content' => 
  array (
    0 => 'Block_15955657856458a860a17308_80297008',
  ),
  'hook_home' => 
  array (
    0 => 'Block_230604396458a860a178e6_21368784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9182015746458a860a16b35_20964925', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15955657856458a860a17308_80297008', 'page_content', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'head'} */
class Block_15218362066458a860a19b24_01098287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_15218362066458a860a19b24_01098287',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\atempo_prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

    <?php $_smarty_tpl->_assignInScope('searchUrl', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['urls']->value['pages']['search'],"/\?controller=search+"."$"."/",''));?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        
		{
			"@context": "https://schema.org",
			"@type": "WebSite",
			"url": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
",
			"potentialAction": {
			    "@type": "SearchAction",
			    "target": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchUrl']->value, ENT_QUOTES, 'UTF-8');?>
?controller=search&s={s}",
			    "query-input": "required name=s"
			}
		}
		
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
}
