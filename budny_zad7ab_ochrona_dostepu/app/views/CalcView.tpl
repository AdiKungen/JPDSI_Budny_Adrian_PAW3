{extends file="main.tpl"}

{block name=content}

<div class="row">
	<div class="col-6"> Kalkulator </div>
	<div class="col-6"> Blok informacyjny </div>
</div>

<div class="row align-items-start d-table">

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<form action="{$conf->action_root}calcCompute" method="post">
	<div class="form-group">
		<label for="id_kwo">Kwota: </label>
		<input id="id_kwo" class="form-control" type="text" name="kwo" value="{$form->kwo}" placeholder="Podaj kwotę"/><br />
	</div>
	<div class="form-group">
		<label for="id_lat">Lata: </label>
		<input id="id_lat" class="form-control" type="text" name="lat" value="{$form->lat}" placeholder="Podaj ilość lat"/><br />
	</div>
	<div class="form-group">
    	<label for="id_opr">Oprocentowanie: </label>
		<input id="id_opr" class="form-control" type="text" name="opr" value="{$form->opr}" placeholder="Podaj wysokość oprocentowania"/><br />
	</div>

	<input type="submit" value="Oblicz" class="btn btn-primary btn-lg"/>
</form>

</div>

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

{include file = "messages.tpl"}

{if isset($res->result)}
    <div class="bg-success text-white py-1 border border-2 border-dark"> Rata miesięczna: {$res->result}</div>
{/if}

</div>

</div>

{/block}