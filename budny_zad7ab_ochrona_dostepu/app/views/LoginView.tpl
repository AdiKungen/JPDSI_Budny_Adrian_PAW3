{extends file="main.tpl"}

{block name=content}

<div class="row">
	<div class="col-6"> Logowanie </div>
	<div class="col-6"> Blok informacyjny </div>
</div>

<div class="row align-items-start d-table">

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

<form action="{$conf->action_root}login" method="post">
	<div class="form-group">
    	<label for="id_log">Login: </label>
    	<input id="id_log" class="form-control" type="text" name="log" value="{$form->log}" placeholder="Wprowadź login"/> <br />
	</div>

	<div class="form-group">
    	<label for="id_has">Hasło: </label>
    	<input id="id_has" class="form-control" type="password" name="has" placeholder="Wprowadź hasło"/> <br />
	</div>

    <input type="submit" value="Zaloguj" class="btn btn-primary btn-lg"/>
</form>	

</div>

<div class="col-2 m-2 p-5 border border-3 border-white rounded d-table-cell">

{include file = "messages.tpl"}

</div>

</div>

{/block}