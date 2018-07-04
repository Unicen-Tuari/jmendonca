{include file="header.tpl"}

<div class="container">
  <h1 class="parpadea texto text-center">Bienvenidos a Computech</h1>
      
  
<div class="listhome col-md-10 text-center">
    <u><h1 class="text-left">Estas son las noticias de la semana</h1></u>
    
    
    {foreach from=$noticias item=$noticia}
          <div class="col-md-6">
            <div class="thumbnail">
              <img class="zoom" src="images/intel core i9_opt.png" alt=" procesador core I9">
              <div class="caption">
                <h3>{$noticia['titulo']}</h3>
                <h4>Categoria: {$noticia['nombre']}</h4>
                <p><a href="verNoticia/{$noticia['id_noticia']}" class="btn btn-primary" role="button">+ Info</a></p>
              </div>
            </div>
          </div>
      {/foreach}

</div>





<aside class="col-md-2 text-center">
<br>

<h4><u>Usuarios</u></h4>
  <ul>
    <li>duki77</li>
    <li>pepo90</li>
    <li>pablo89</li>
    <li>mechaN</li>
    <li>daveX</li>
    <li>manuel785</li>
    <li>caroP9</li>
    <li>nacho85</li>
    <li>xavierCH</li>
    <li>helenaX789</li>
  </ul>
</aside>


{include file="footer.tpl"}