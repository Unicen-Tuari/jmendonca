<?php
require_once "./model/UsuarioModel.php";
require_once "./view/LoginView.php";

class LoginController {

  private $usuariosModel;
  private $loginView;

  function __construct(){
    $this->usuariosModel = new UsuariosModel();
    $this->loginView = new LoginView();
  }

  function login($params = [])
  {
    $this->loginView->mostrarLogin();

  }

  function logout($params = [])
  {
    session_start();
    session_destroy();
    PageHelpers::loginPage();
  }

  function validarLogin($params = [])
  {
    $usuario = $this->usuariosModel->obtenerUsuario($_POST['email']);
    $pass=$_POST['contrasenia'];
    $pass1=$usuario['contrasenia'];

    //if(md5($_POST['contrasenia']) == $usuario['pass']){
      session_start();

      $_SESSION['usuario'] = $_POST['usuario'];
      $_SESSION['ultima_conexion'] = time();
      PageHelpers::homePage();
    /*}
    else {
      PageHelpers::loginPage();
    }*/
  }
}
 ?>
