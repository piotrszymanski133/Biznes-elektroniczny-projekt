<?php
/* Smarty version 3.1.33, created on 2020-12-30 18:09:37
  from '/var/www/html/prestashop/admin026bqejd0/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fecb45133eed7_47129967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3998a6ca0b57ec9110987165bad0a258b162e0c7' => 
    array (
      0 => '/var/www/html/prestashop/admin026bqejd0/themes/default/template/content.tpl',
      1 => 1609337323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fecb45133eed7_47129967 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
