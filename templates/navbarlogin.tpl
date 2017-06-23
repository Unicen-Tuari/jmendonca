<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home">MASCOTAS.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home">Home</a></li>
        <li><a href="quienessomos">Quienes somos</a></li>
        <li><a href="mascotas">Mascotas</a></li>
        <li><a href="contacto">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="boton-login" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
            <div class="formulario-login">

                <!--   <form action="{{ConfigApp::$APP_URL}}/login" method="post">
  email: <input type="text" name="email"><br>
  password: <input type="text" name="password"><br>
  <input type="submit" value="Submit">
</form>-->

                    <form  action="{{ConfigApp::$APP_URL}}/login" method="POST">
                      <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" name="email" class="form-control" id="email">
                      </div>
                      <div class="form-group">
                      <label for="pwd">Password:</label>
                      <input type="password" name="password" class="form-control" id="pwd">
                      </div>
                      <input value="Enviar" type="submit" class="btn btn-default">
                    </form>
            </div>
    </div>
  </div>
</nav>
