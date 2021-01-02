<?php
/* Smarty version 3.1.33, created on 2020-12-30 16:53:26
  from '/var/www/html/prestashop/pdf/invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5feca2762a2148_84910833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '639d8999dd67fd0ce2b4c628f542f7bdb461290c' => 
    array (
      0 => '/var/www/html/prestashop/pdf/invoice.shipping-tab.tpl',
      1 => 1609337325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feca2762a2148_84910833 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
