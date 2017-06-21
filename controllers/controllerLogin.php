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
  function logout(){
    session_start();
    session_destroy();
    $this->view->mostrar("");
  }
   function validarEmail($email){
 $email = strtolower($email);//strtolower — Convierte una cadena a minúsculas
 $repeate = $this->modelLogin->getEmail($email);
 if ($repeate){
   return true;
 }
 else{
   return false;
 }//completar xq no llegue
}
}
?>
