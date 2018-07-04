{include file="header.tpl"}
<div class="col-md-12">

<div class="col-md-4"></div>
<div class="col-md-4">
<form action="guardarCategoria" method="post">
	<h1>Nueva Categoría</h1>
	  <label for="titulo">Nombre</label>
	  <input  class="form-control" type="text" name="nombre">
	  <label for="descripcion">Descripcion</label>
	  <textarea class="form-control" type="text" name="descripcion"></textarea>
	  <br>
	  <button type="submit" name="button" class="btn btn-block btn-success">Crear Categoría</button>
	</form>
</div>


<div class="col-md-4"></div>

{include file="footer.tpl"}
