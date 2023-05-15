<?php
/* Smarty version 4.3.0, created on 2023-05-15 21:08:05
  from 'C:\xampp\htdocs\budny_zad8_bazy_danych\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64628315f12a96_73667276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '633ff9757db9482a18345789908edd6f72b93317' => 
    array (
      0 => 'C:\\xampp\\htdocs\\budny_zad8_bazy_danych\\app\\views\\LoginView.tpl',
      1 => 1683487677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_64628315f12a96_73667276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7124167164628315eab9d9_27787303', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_7124167164628315eab9d9_27787303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7124167164628315eab9d9_27787303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="row">
	<div class="col-6"> Logowanie </div>
	<div class="col-6"> Blok informacyjny </div>
</div>

<div class="row align-items-start d-table">

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post">
	<div class="form-group">
    	<label for="id_log">Login: </label>
    	<input id="id_log" class="form-control" type="text" name="log" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->log;?>
" placeholder="Wprowadź login"/> <br />
	</div>

	<div class="form-group">
    	<label for="id_has">Hasło: </label>
    	<input id="id_has" class="form-control" type="password" name="has" placeholder="Wprowadź hasło"/> <br />
	</div>

    <input type="submit" value="Zaloguj" class="btn btn-primary btn-lg"/>
</form>	

</div>

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
