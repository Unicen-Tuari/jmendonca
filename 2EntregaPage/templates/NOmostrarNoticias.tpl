{include file="headerLogin.tpl"}
<h1>Lista de Noticias</h1>
<ul>

  {foreach from=$noticia item=noticia}
    {if $noticia['finalizada'] == 1}
      <li class="tachado">
    {else}
      <li>
    {/if}

      <a href="detalle/{$noticia['id_noticia']}">{$noticia['titulo']}</a>: {$noticia['descripcion']} <a href="borrar/{$noticia['id_noticia']}">Borrar</a> <a href="finalizar/{$noticia['id_noticia']}">Finalizar</a>
    </li>
  {/foreach}


</ul>
<a href="crear">Crear Noticia</a>
{include file="footer.tpl"}
