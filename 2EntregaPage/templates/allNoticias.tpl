{include file="header.tpl"}

<div class="col-md-12 text-center">
	<h1>Listado de Noticias</h1>
	<a href="crearNoticia" class="btn btn-success">Nueva Noticia</a>
	<hr>
	<table class="table">
		<thead>
			<th class="text-center">Id</th>
			<th class="text-center">Categoría</th>
			<th class="text-center">Título</th>
			<th class="text-center">Descripción</th>
			<th class="text-center">Publicar</th>
			<th class="text-center">Eliminar</th>
		</thead>
		<tbody>
			{foreach $noticias as $dato}
			<tr>
				<td class="text-center">{$dato.id_noticia}</td>
				<td class="text-center">{$dato.nombre}</td>
				<td class="text-center">{$dato.titulo}</td>
				<td class="text-center">{$dato.descripcion}</td>
				{if $dato.publicada == 0}
				<td class="text-center"><a class="btn btn-sm btn-success" href="publicarNoticia/{$dato.id_noticia}">Publicar</a></td>
				{else}
				<td class="text-center"><a class="btn btn-sm btn-warning" href="noPublicarNoticia/{$dato.id_noticia}">No Publicar</a></td>
				{/if}
				<td class="text-center"><a class="btn btn-sm btn-danger" href="borrarNoticia/{$dato.id_noticia}">Eliminar</a></td>
			</tr>
			{/foreach}
		</tbody>
	</table>
</div>

{include file="footer.tpl"}