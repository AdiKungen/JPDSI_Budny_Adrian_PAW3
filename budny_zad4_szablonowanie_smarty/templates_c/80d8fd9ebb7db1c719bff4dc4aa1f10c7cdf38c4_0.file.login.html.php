<?php
/* Smarty version 4.3.0, created on 2023-04-11 00:45:26
  from 'C:\xampp\htdocs\budny_zad4_szablonowanie_smarty\app\security\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6434918623c905_22114189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80d8fd9ebb7db1c719bff4dc4aa1f10c7cdf38c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\budny_zad4_szablonowanie_smarty\\app\\security\\login.html',
      1 => 1681166725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6434918623c905_22114189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2126902587643491862341a6_13120676', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.html");
}
/* {block 'content'} */
class Block_2126902587643491862341a6_13120676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2126902587643491862341a6_13120676',
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

<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" method="post">
	<div class="form-group">
    	<label for="id_log">Login: </label>
    	<input id="id_log" class="form-control" type="text" name="log" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['log'];?>
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

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <div class="bg-danger text-white py-1 border border-2 border-dark"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}?>
</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
