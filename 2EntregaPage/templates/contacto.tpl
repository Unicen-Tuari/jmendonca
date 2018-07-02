{include file="headerContacto.tpl"}

<article>
            <section class="container-fluid">
                <h2 class="h2 text-center my-3"><u>contactate</u>:</h2>
                <form>
                    <fieldset>
                        <legend class="h4 text-center">
                        contactate con nosotros tambien por medio de las redes sociales
                        </legend>
                        <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Escribe tu nombre">
                        </div>
                        <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="tucorreo@example.com">
                        </div>
                        <div class="form-group">
                        <label>Mensaje</label>
                        <textarea class="form-control" rows="3" placeholder="escribe aqui"></textarea>
                        </div>
                        <div class="form-group text-center">
                        <input type="submit" id="envio" value="Enviar" class="btn btn-primary ">
                        </div>
                    </fieldset>
                </form>
            </section>
        </article>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
  window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
</script>
<script src="bootstrap/js/bootstrap.min.js"></script>

{include file="footerContacto.tpl"}