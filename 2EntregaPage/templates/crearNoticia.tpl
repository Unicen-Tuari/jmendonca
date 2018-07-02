{include file="headerLogin.tpl"}
<form action="guardar" method="post">
<label for="id_noticia">id_noticia</label>
  <input type="text" name="id_noticia" value="">
  <label for="titulo">Titulo</label>
  <input type="text" name="titulo" value="">
  <label for="descripcion">Descripcion</label>
  <input type="text" name="descripcion" value="">
  <label for="Categoria_id_categoria">Categoria_id_categoria</label>
  <input type="text" name="Categoria_id_categoria" value="">
  <button type="submit" name="button">Crear Noticia</button>
</form>
{include file="footer.tpl"}
