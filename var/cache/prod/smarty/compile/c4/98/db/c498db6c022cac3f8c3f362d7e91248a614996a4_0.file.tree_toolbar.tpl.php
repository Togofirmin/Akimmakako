<?php
/* Smarty version 3.1.48, created on 2024-07-10 16:51:27
  from 'C:\wamp64\www\prestashop\admin747f5sjbm\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_668ebc0fcf59a0_23176936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c498db6c022cac3f8c3f362d7e91248a614996a4' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin747f5sjbm\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1720447186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ebc0fcf59a0_23176936 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div>
<?php }
}
