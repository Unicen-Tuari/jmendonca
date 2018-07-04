{include file="headerLogin.tpl"}
<div class="container">
  <div class="col-md-12">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  <form class="form-signin" method="post" action="login">
    <h1 class="form-signin-heading">Ingrese sus datos</h1>
    <label for="email" class="sr-only"></label>
    <input type="email" id="usuario" name="usuario" class="form-control" placeholder="Email address" required autofocus><br>
    <label for="password" class="sr-only"></label>
    <input type="password" id="contrasenia" name="contrasenia" class="form-control" placeholder="Password" required>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Recordarme
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  </form>
</div>
  <div class="col-md-4"></div>
</div>
</div> <!-- /container -->
{include file="footer.tpl"}
