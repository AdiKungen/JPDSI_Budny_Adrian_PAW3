<?php
/* Smarty version 4.3.0, created on 2023-04-24 04:10:48
  from 'C:\xampp\htdocs\budny_zad6ab_kontroler_glowny\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6445e528c5acf3_12277667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a5cd7120564ba4da5be742b0b39b7edd23227e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\budny_zad6ab_kontroler_glowny\\app\\views\\CalcView.tpl',
      1 => 1682299895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6445e528c5acf3_12277667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_615723736445e528c4fd96_62333891', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_615723736445e528c4fd96_62333891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_615723736445e528c4fd96_62333891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row">
	<div class="col-6"> Kalkulator </div>
	<div class="col-6"> Blok informacyjny </div>
</div>

<div class="row align-items-start d-table">

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
	<div class="form-group">
		<label for="id_kwo">Kwota: </label>
		<input id="id_kwo" class="form-control" type="text" name="kwo" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwo;?>
" placeholder="Podaj kwotę"/><br />
	</div>
	<div class="form-group">
		<label for="id_lat">Lata: </label>
		<input id="id_lat" class="form-control" type="text" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lat;?>
" placeholder="Podaj ilość lat"/><br />
	</div>
	<div class="form-group">
    	<label for="id_opr">Oprocentowanie: </label>
		<input id="id_opr" class="form-control" type="text" name="opr" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->opr;?>
" placeholder="Podaj wysokość oprocentowania"/><br />
	</div>

	<input type="submit" value="Oblicz" class="btn btn-primary btn-lg"/>
</form>

</div>

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
    <div class="bg-success text-white border border-2 border-dark"><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
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
    <div class="bg-danger text-white border border-2 border-dark w-100"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>


<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
    <div class="bg-success text-white border border-2 border-dark"> Rata miesięczna: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
</div>
<?php }?>

</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
