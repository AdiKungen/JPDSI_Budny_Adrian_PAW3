<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$page_description|default:'Opis domyślny'}">
	<title>{$page_title|default:"Tytuł domyślny"}</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid text-white text-center bg-secondary position-absolute top-0 bottom-0 overflow-auto">

<div class="container">
	<h1>{$page_title|default:"Tytuł domyślny"}</h1>
	<h2>{$page_header|default:"Tytuł domyślny"}</h1>
	<p>
		{$page_description|default:"Opis domyślny"}
	</p>
</div>

<div class="container">
{block name=content} Domyślna treść zawartości .... {/block}
</div>

<div class="container p-3">
    Zalogowano jako <b>
        {if isset($user->rola)} 
            {$user->rola}
            <a href="{$conf->action_root}logout" class="link-danger">Wyloguj</a>
        {else}
            nikt
        {/if}
        </b>	
	<p> 
		Strona główna <a class="btn btn-primary" href="{$conf->action_root}calcShow" role="button">Click</a>
		Historia wyników <a class="btn btn-primary" href="{$conf->action_root}showList" role="button">Click</a> 
	</p>   
	<p>
		Widok oparty na frameworku <a href="https://getbootstrap.com/" class="link-warning" target="_blank">Bootstrap</a>.
	</p>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>