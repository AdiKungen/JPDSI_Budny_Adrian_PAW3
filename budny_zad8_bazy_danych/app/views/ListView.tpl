{extends file="main.tpl"}

{block name=content}

<div class = "center">

<table class="table table-bordered table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Kwota</th>
      <th scope="col">Lata</th>
      <th scope="col">Opro</th>
      <th scope="col">Rata</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <tbody>
    {foreach $wyniki as $w}
    {strip}
	    <tr>
		    <td>{$w["idHistoria"]}</td>
		    <td>{$w["kwota"]}</td>
		    <td>{$w["ileLat"]}</td>
        <td>{$w["oprocentowanie"]}</td>
        <td>{$w["rataMiesieczna"]}</td>
        <td>{$w["data"]}</td>
	    </tr>
    {/strip}
    {/foreach}
  </tbody>
</table>

</div>

{/block}