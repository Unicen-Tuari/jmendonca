{include file="header.tpl"}
<div class="text-center row">
	<h1>Lista de Categorias</h1>
	<a href="crearCategoria" class="btn btn-success">Crear Categoría</a>	
<hr>
</div>



	<table class="table">
		<thead>
			<th class="text-center">Id</th>
			<th class="text-center">Nombre</th>
			<th class="text-center">Descripción</th>
			<th class="text-center">Activar</th>
			<th class="text-center">Eliminar</th>
		</thead>
		<tbody>
			{foreach $categorias as $cat}
			<tr>
				<td class="text-center">{$cat.id_categoria}</td>
				<td class="text-center">{$cat.nombre}</td>
				<td class="text-center">{$cat.descripcion}</td>
				{if $cat.activa == 0}
				<td class="text-center"><a class="btn btn-sm btn-warning" href="desactivarCategoria/{$cat.id_categoria}">Desactivar</a></td>
				{else}
				<td class="text-center"><a class="btn btn-sm btn-success" href="activarCategoria/{$cat.id_categoria}">Activar</a></td>
				{/if}
				<td class="text-center"><a class="btn btn-sm btn-danger" href="borrarCategoria/{$cat.id_categoria}">Eliminar</a></td>
			</tr>
			{/foreach}
		</tbody>
	</table>


{include file="footer.tpl"}
