<?php
/* Smarty version 3.1.33, created on 2020-07-19 13:32:18
  from 'C:\xampp\htdocs\tienda\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1491b27f3578_55512778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a78fb22baa28492115f647cd43d47339a9c4b928' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1593805866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1491b27f3578_55512778 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
