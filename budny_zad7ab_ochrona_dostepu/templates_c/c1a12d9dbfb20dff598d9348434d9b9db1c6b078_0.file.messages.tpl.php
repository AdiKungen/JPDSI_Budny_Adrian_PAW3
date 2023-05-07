<?php
/* Smarty version 4.3.0, created on 2023-05-07 23:23:33
  from 'C:\xampp\htdocs\budny_zad7ab_ochrona_dostepu\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645816d5916fa4_89698095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1a12d9dbfb20dff598d9348434d9b9db1c6b078' => 
    array (
      0 => 'C:\\xampp\\htdocs\\budny_zad7ab_ochrona_dostepu\\app\\views\\templates\\messages.tpl',
      1 => 1683488679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645816d5916fa4_89698095 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
    <div class="bg-success text-white border border-2 border-dark w-100"><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
  <div class="bg-warning text-dark border border-2 border-dark w-100"> Odnaleziono błędy </div>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
        <div class="bg-danger text-white py-1 border border-2 border-dark w-100"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
