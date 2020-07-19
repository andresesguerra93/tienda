<?php
/* Smarty version 3.1.33, created on 2020-07-19 13:03:11
  from 'C:\xampp\htdocs\tienda\admin467ufrotr\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f148adfef1467_64108391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aaf21e10cda9bf2430a2601ddd12dee0d80b224' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin467ufrotr\\themes\\default\\template\\content.tpl',
      1 => 1593805866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f148adfef1467_64108391 (Smarty_Internal_Template $_smarty_tpl) {
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
