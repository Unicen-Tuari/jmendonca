<?php
require_once('views/ViewContacto.php');

class controllerForm
{
  private $vista;

  function __construct()
  {
      $this->vista = new ViewContacto();
  }
function mostrarContacto(){
    $this->vista->mostrarContacto();
  }
}
 ?>
