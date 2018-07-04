{include file="header.tpl"}


<div class="col-md-12">

<div class="col-md-4"></div>
<div class="col-md-4">
	<h1>Nueva Noticia</h1>
	<form action="guardarNoticia" method="post">
	  <label for="Categoria_id_categoria">Categoría</label>
	  <select  class="form-control" name="Categoria_id_categoria">
	  	{foreach $categorias as $dato}
	  	{if $dato.activa == 0} <!--solo muestra las categorias activas-->
	  		<option value="{$dato.id_categoria}">{$dato.nombre}</option>
	  	{/if}
	  	{/foreach}
	  </select>
	  <label for="titulo">Título</label>
	  <input  class="form-control" type="text" name="titulo">
	  <label for="descripcion">Descripcion</label>
	  <textarea class="form-control" type="text" name="descripcion"></textarea>
	  <br>
	  <button type="submit" name="button" class="btn btn-block btn-success">Crear Noticia</button>
	</form>
</div>
<div class="col-md-4"></div>
{include file="footer.tpl"}
