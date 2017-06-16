<?php
require_once('views/ViewMascota.php');
require_once('models/ModelMascota.php');

class ControllerMascotas
{
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vista = new ViewMascota();
      $this->modelo = new ModelMascota();
  }
  ?>
