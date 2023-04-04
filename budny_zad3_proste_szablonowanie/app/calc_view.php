<?php
include _ROOT_PATH.'/templates/top.php';
?>

<div class="row">
	<div class="col-6"> Kalkulator </div>
	<div class="col-6"> Blok informacyjny </div>
</div>

<div class="row align-items-start d-table">

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<div class="form-group">
		<label for="id_kwo">Kwota: </label>
		<input id="id_kwo" class="form-control" type="text" name="kwo" value="<?php out($kwo); ?>" placeholder="Podaj kwotę"/><br />
	</div>
	<div class="form-group">
		<label for="id_lat">Lata: </label>
		<input id="id_lat" class="form-control" type="text" name="lat" value="<?php out($lat); ?>" placeholder="Podaj ilość lat"/><br />
	</div>
	<div class="form-group">
    	<label for="id_opr">Oprocentowanie: </label>
		<input id="id_opr" class="form-control" type="text" name="opr" value="<?php out($opr); ?>" placeholder="Podaj wysokość oprocentowania"/><br />
	</div>

	<input type="submit" value="Oblicz" class="btn btn-primary btn-lg"/>
</form>

</div>

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<?php
if (isset($infos)) {
	if (count ( $infos ) > 0) {
		foreach ( $infos as $key => $msg ) {
			echo '<div class="bg-success text-white border border-2 border-dark">'.$msg.'</div>';
		}
	}
}
?>

<?php
if(isset($messages)) {
	if (count($messages)>0) {
		echo '<div class="bg-warning text-dark border border-2 border-dark w-100"> Odnaleziono błędy </div>';
		foreach($messages as $key => $msg) {
			echo '<div class="bg-danger text-white border border-2 border-dark w-100">'.$msg.'</div>';
		}
	}
}
?>

<?php 
if(isset($result)) {
	echo '<div class="bg-success text-white border border-2 border-dark"> Obliczono ratę miesięczną </div>';
    echo '<div class="bg-success text-white border border-2 border-dark"> Rata miesięczna: '.$result.'</div>';
}
?>

</div>

</div>

<?php
include _ROOT_PATH.'/templates/bottom.php';
?>