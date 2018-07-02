{include file="headerLogin.tpl"}
<div class="container">

        <form class="form-signin">
            <h2 class="form-signin-heading">Acceder</h2>
            <label for="inputEmail" class="sr-only">Correo electrónico</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Recordarme
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
        </form>

    </div>
    <!-- /container -->
{include file="footer.tpl"}