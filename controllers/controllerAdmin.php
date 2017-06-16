<?php
require_once('views/ViewHome.php');
require_once('models/ModelUsuario.php');

class controllerAdmin
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewHome();
      $this->modelo = new ModelUsuario();
  }

 ?>
