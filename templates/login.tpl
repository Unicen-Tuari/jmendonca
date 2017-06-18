{include file="header.tpl"}
{include file="navbar.tpl"}
<ul class="nav navbar-nav navbar-right">
        <li><a class="boton-login" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
            <div class="formulario-login">
                    <form>
                    <div class="form-group">
                    <label for="email">Dirección de email:</label>
                    <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                    <label><input type="checkbox"> Recordarme</label>
                    </div>
                    <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
            </div>
    </div>
  </div>
</nav>
{include file="footerlogin.tpl"}
