<?php
/* Smarty version 3.1.47, created on 2023-05-08 09:44:33
  from 'C:\xampp\htdocs\atempo_prestashop\themes\warehouse\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6458a8610aa4f9_81677525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc45edc67a6ea6b65fc6e78bda5fa6cc981d2276' => 
    array (
      0 => 'C:\\xampp\\htdocs\\atempo_prestashop\\themes\\warehouse\\templates\\_partials\\footer.tpl',
      1 => 1683531524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/_variants/footer-1.tpl' => 1,
    'file:_partials/_variants/footer-2.tpl' => 1,
    'file:_partials/_variants/footer-3.tpl' => 1,
    'file:_partials/_variants/footer-4.tpl' => 1,
    'file:_partials/_variants/footer-5.tpl' => 1,
  ),
),false)) {
function content_6458a8610aa4f9_81677525 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 1) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 2) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 3) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 4) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 5) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php }
}
