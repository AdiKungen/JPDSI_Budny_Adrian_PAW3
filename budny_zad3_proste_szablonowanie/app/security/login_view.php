<?php
include _ROOT_PATH.'/templates/top.php';
?>

<div class="row">
	<div class="col-6"> Logowanie </div>
	<div class="col-6"> Blok informacyjny </div>
</div>

<div class="row align-items-start d-table">

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
	<div class="form-group">
    	<label for="id_log">Login: </label>
    	<input id="id_log" class="form-control" type="text" name="log" value="<?php out($form['log']); ?>" placeholder="Wprowadź login"/> <br />
	</div>

	<div class="form-group">
    	<label for="id_has">Hasło: </label>
    	<input id="id_has" class="form-control" type="password" name="has" placeholder="Wprowadź hasło"/> <br />
	</div>

    <input type="submit" value="Zaloguj" class="btn btn-primary btn-lg"/>
</form>	

</div>

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<?php
if(isset($messages)) {
	if (count($messages)>0) {
		foreach($messages as $key => $msg) {
			echo '<div class="bg-danger text-white py-1 border border-2 border-dark">'.$msg.'</div>';
		}
	}
}
?>
</div>

</div>

<?php
include _ROOT_PATH.'/templates/bottom.php';
?>