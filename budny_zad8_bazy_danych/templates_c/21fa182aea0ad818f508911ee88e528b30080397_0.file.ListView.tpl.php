<?php
/* Smarty version 4.3.0, created on 2023-05-15 21:08:11
  from 'C:\xampp\htdocs\budny_zad8_bazy_danych\app\views\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6462831b12ab43_12950385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21fa182aea0ad818f508911ee88e528b30080397' => 
    array (
      0 => 'C:\\xampp\\htdocs\\budny_zad8_bazy_danych\\app\\views\\ListView.tpl',
      1 => 1684176536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6462831b12ab43_12950385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14548383996462831b122791_83923503', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_14548383996462831b122791_83923503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14548383996462831b122791_83923503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class = "center">

<table class="table table-bordered table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Kwota</th>
      <th scope="col">Lata</th>
      <th scope="col">Opro</th>
      <th scope="col">Rata</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wyniki']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
    <tr><td><?php echo $_smarty_tpl->tpl_vars['w']->value["idHistoria"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["ileLat"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["oprocentowanie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["rataMiesieczna"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["data"];?>
</td></tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

</div>

<?php
}
}
/* {/block 'content'} */
}
