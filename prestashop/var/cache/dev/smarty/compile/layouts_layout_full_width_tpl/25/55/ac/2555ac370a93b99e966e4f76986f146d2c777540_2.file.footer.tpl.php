<?php
/* Smarty version 3.1.33, created on 2020-12-30 16:53:17
  from '/var/www/html/prestashop/themes/classic/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5feca26d419559_52824618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2555ac370a93b99e966e4f76986f146d2c777540' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/checkout/_partials/footer.tpl',
      1 => 1609337326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feca26d419559_52824618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5401634485feca26d417671_31309830', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_5401634485feca26d417671_31309830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5401634485feca26d417671_31309830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
