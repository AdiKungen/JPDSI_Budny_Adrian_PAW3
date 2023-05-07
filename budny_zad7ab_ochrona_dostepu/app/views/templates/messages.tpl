{if $msgs->isInfo()}
	{foreach $msgs->getInfos() as $inf}
    {strip}
		<div class="bg-success text-white border border-2 border-dark w-100">{$inf}</div>
    {/strip}
    {/foreach}
{/if}

{if $msgs->isError()}
  <div class="bg-warning text-dark border border-2 border-dark w-100"> Odnaleziono błędy </div>
	{foreach $msgs->getErrors() as $err}
        {strip}
        <div class="bg-danger text-white py-1 border border-2 border-dark w-100">{$err}</div>
    	{/strip}
    {/foreach}
{/if}