{include file="header1.tpl"}

<section class="detalle col-md-12">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <h1 class="text-center">{$noticia['titulo']}</h1>
    <h3>Categoría: {$noticia['nombre']}</h3>
    <hr>
    <p>{$noticia['descripcion']}</p>
  </div>
  <div class="col-md-4"></div>
</section>

{include file="footer.tpl"}