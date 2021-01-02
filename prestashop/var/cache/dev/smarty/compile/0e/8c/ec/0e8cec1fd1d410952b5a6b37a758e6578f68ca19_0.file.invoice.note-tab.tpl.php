<?php
/* Smarty version 3.1.33, created on 2020-12-30 16:53:26
  from '/var/www/html/prestashop/pdf/invoice.note-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5feca27628c0d0_17775023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e8cec1fd1d410952b5a6b37a758e6578f68ca19' => 
    array (
      0 => '/var/www/html/prestashop/pdf/invoice.note-tab.tpl',
      1 => 1609337325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5feca27628c0d0_17775023 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['order_invoice']->value->note) && $_smarty_tpl->tpl_vars['order_invoice']->value->note) {?>
	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="6" class="left">
			<table id="note-tab" style="width: 100%">
				<tr>
					<td class="grey"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
				</tr>
				<tr>
					<td class="note"><?php echo nl2br($_smarty_tpl->tpl_vars['order_invoice']->value->note);?>
</td>
				</tr>
			</table>
		</td>
		<td colspan="1">&nbsp;</td>
	</tr>
<?php }
}
}
