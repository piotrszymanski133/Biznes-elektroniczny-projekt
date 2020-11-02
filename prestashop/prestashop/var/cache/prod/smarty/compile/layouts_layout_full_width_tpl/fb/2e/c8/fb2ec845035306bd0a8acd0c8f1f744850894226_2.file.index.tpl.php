<?php
/* Smarty version 3.1.33, created on 2020-10-27 19:01:12
  from '/var/www/html/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9860687837d5_55292457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2ec845035306bd0a8acd0c8f1f744850894226' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/index.tpl',
      1 => 1603821355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9860687837d5_55292457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11400770435f98606877e517_21464923', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_21392178675f9860687802c6_02941001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_6230411635f9860687816a2_36160617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_6143499855f986068780e81_82552789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6230411635f9860687816a2_36160617', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_11400770435f98606877e517_21464923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_11400770435f98606877e517_21464923',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_21392178675f9860687802c6_02941001',
  ),
  'page_content' => 
  array (
    0 => 'Block_6143499855f986068780e81_82552789',
  ),
  'hook_home' => 
  array (
    0 => 'Block_6230411635f9860687816a2_36160617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21392178675f9860687802c6_02941001', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6143499855f986068780e81_82552789', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
