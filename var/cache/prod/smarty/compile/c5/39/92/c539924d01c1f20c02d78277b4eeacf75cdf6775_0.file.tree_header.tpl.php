<?php
/* Smarty version 3.1.48, created on 2024-07-10 16:51:28
  from 'C:\wamp64\www\prestashop\admin747f5sjbm\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_668ebc101724a8_93045268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c539924d01c1f20c02d78277b4eeacf75cdf6775' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin747f5sjbm\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1720447186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ebc101724a8_93045268 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
