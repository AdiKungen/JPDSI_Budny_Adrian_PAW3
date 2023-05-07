<?php
/* Smarty version 4.3.0, created on 2023-05-07 23:23:36
  from 'C:\xampp\htdocs\budny_zad7ab_ochrona_dostepu\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_645816d8b65104_37734519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81613b843866e22905f0042f611b9792e75b32bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\budny_zad7ab_ochrona_dostepu\\app\\views\\CalcView.tpl',
      1 => 1683488712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_645816d8b65104_37734519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1733387545645816d8b5da57_19747595', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1733387545645816d8b5da57_19747595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1733387545645816d8b5da57_19747595',
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

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
    <div class="bg-success text-white py-1 border border-2 border-dark"> Rata miesięczna: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
</div>
<?php }?>

</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
