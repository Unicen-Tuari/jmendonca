{include file="headerLogin.tpl"}
<h1>Lista de categorias</h1>
<ul>

  {foreach from=$categoria item=categoria}
    {if $categoria['finalizada'] == 1}
      <li class="tachado">
    {else}
      <li>
    {/if}

  <a href="detalle/{$categoria['id_categoria']}">{$categoria['nombre']}</a>: {$categoria['descripcion']} <a href="borrar/{$categoria['id_categoria']}">Borrar</a> <a href="finalizar/{$categoria['id_categoria']}">Finalizar</a>
  </li>
  {/foreach}


</ul>
<a href="crear">Crear Categoria</a>
{include file="footer.tpl"}
