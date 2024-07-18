<?php
/* Smarty version 3.1.48, created on 2024-07-10 15:11:41
  from 'C:\wamp64\www\prestashop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_668ea4ad6c93a0_41840404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'accf035f9f1531331305e2dda1ca8661e86002cd' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\page.tpl',
      1 => 1720447196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668ea4ad6c93a0_41840404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1266649689668ea4ad6bd696_01244785', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1175734245668ea4ad6bf118_29597420 extends Smarty_Internal_Block
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
class Block_2029763191668ea4ad6be283_11390369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1175734245668ea4ad6bf118_29597420', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1382263897668ea4ad6c3722_47489146 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2048787839668ea4ad6c4819_22316044 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1947314865668ea4ad6c2b94_47547241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1382263897668ea4ad6c3722_47489146', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2048787839668ea4ad6c4819_22316044', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1875327228668ea4ad6c73a5_79228125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2118028872668ea4ad6c62a9_73863818 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1875327228668ea4ad6c73a5_79228125', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1266649689668ea4ad6bd696_01244785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1266649689668ea4ad6bd696_01244785',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2029763191668ea4ad6be283_11390369',
  ),
  'page_title' => 
  array (
    0 => 'Block_1175734245668ea4ad6bf118_29597420',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1947314865668ea4ad6c2b94_47547241',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1382263897668ea4ad6c3722_47489146',
  ),
  'page_content' => 
  array (
    0 => 'Block_2048787839668ea4ad6c4819_22316044',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2118028872668ea4ad6c62a9_73863818',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1875327228668ea4ad6c73a5_79228125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2029763191668ea4ad6be283_11390369', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1947314865668ea4ad6c2b94_47547241', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2118028872668ea4ad6c62a9_73863818', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
