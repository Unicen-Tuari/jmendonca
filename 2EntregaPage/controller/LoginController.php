<?php
require_once "./model/UsuarioModel.php";
require_once "./view/LoginView.php";

class LoginController {

  private $usuarioModel;
  private $loginView;

  function __construct(){
    $this->UsuarioModel = new UsuarioModel();
    $this->LoginView = new LoginView();
  }

  function login($params = [])
  {
    $this->LoginView->mostrarLogin();
  }

  function logout($params = [])
  {
    session_start();
    session_destroy();
    PageHelpers::loginPage();
  }

  function validarLogin($params = [])
  {
    $usuario = $this->UsuarioModel->obtenerUsuario($_POST['email']);
    if(password_verify($_POST['password'], $usuario['password'])){
      session_start();
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['ultima_conexion'] = time();
      PageHelpers::homePage();
    }
    else {
      PageHelpers::loginPage();
    }
  }
}
 ?>
