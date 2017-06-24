<?php
require_once('views/ViewHome.php');
require_once('models/ModelUsuario.php');

class controllerLogin
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewHome();
      $this->modelo = new ModelUsuario();
  }
   function mostrarLogin(){
    $this->vista->mostrarLogin();
  }

  function iniciarSesion(){
    if ((isset($_POST['email']) && strlen(trim($_POST['email'])) > 0) && (isset($_POST['password']) && strlen(trim($_POST['password'])) > 0)){
      $email = $_POST["email"];
      $password = $_POST["password"];
      $mail = $this->modelo->GetEmail($email);
      if (password_verify($password, $email['password'])){
        session_start();
        $_SESSION["logueado"] = true;
        header('Location: http://localhost/jmendonca-master');
      }else{
        header('Location: http://localhost/jmendonca-master/login');
      }
    }else{
      header('Location: http://localhost/jmendonca-master/login');
    }
  }
}
?>
