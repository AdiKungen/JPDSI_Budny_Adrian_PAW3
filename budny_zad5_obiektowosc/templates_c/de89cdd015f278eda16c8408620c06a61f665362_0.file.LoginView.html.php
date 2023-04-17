<?php
/* Smarty version 4.3.0, created on 2023-04-17 19:31:54
  from 'C:\xampp\htdocs\budny_zad5_obiektowosc\app\security\LoginView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_643d828a588f82_86253287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de89cdd015f278eda16c8408620c06a61f665362' => 
    array (
      0 => 'C:\\xampp\\htdocs\\budny_zad5_obiektowosc\\app\\security\\LoginView.html',
      1 => 1681752712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d828a588f82_86253287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_983760675643d828a580ca0_50407417', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.html");
}
/* {block 'content'} */
class Block_983760675643d828a580ca0_50407417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_983760675643d828a580ca0_50407417',
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

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/login.php" method="post">
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

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
        <div class="bg-danger text-white py-1 border border-2 border-dark"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
