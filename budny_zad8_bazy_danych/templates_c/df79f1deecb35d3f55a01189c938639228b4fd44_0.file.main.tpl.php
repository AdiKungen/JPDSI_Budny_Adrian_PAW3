<?php
/* Smarty version 4.3.0, created on 2023-05-15 21:08:06
  from 'C:\xampp\htdocs\budny_zad8_bazy_danych\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64628316045a29_44949420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df79f1deecb35d3f55a01189c938639228b4fd44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\budny_zad8_bazy_danych\\app\\views\\templates\\main.tpl',
      1 => 1684176661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64628316045a29_44949420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid text-white text-center bg-secondary position-absolute top-0 bottom-0 overflow-auto">

<div class="container">
	<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<p>
		<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

	</p>
</div>

<div class="container">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158323166364628316041736_25242533', 'content');
?>

</div>

<div class="container p-3">
    Zalogowano jako <b>
        <?php if ((isset($_smarty_tpl->tpl_vars['user']->value->rola))) {?> 
            <?php echo $_smarty_tpl->tpl_vars['user']->value->rola;?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="link-danger">Wyloguj</a>
        <?php } else { ?>
            nikt
        <?php }?>
        </b>	
	<p> 
		Strona główna <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcShow" role="button">Click</a>
		Historia wyników <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showList" role="button">Click</a> 
	</p>   
	<p>
		Widok oparty na frameworku <a href="https://getbootstrap.com/" class="link-warning" target="_blank">Bootstrap</a>.
	</p>
</div>

</div>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'content'} */
class Block_158323166364628316041736_25242533 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_158323166364628316041736_25242533',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
