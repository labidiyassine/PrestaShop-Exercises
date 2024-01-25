<?php
/* Smarty version 3.1.33, created on 2024-01-25 09:22:38
  from 'C:\xampp\htdocs\exercice\admin1643zuspp\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_65b21a4ed90ef0_60273458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1da29f7b7a9813620c9d74362b4260a51f394e8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\exercice\\admin1643zuspp\\themes\\default\\template\\content.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b21a4ed90ef0_60273458 (Smarty_Internal_Template $_smarty_tpl) {
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
