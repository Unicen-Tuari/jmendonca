<?php
require_once('views/ViewMascotas.php');
require_once('views/ViewHome.php');
require_once('views/viewQuienesSomos.php');
require_once('models/ModelMascota.php');
require_once('models/ModelAlimento.php');

class ControllerMascotas
{
  private $vistaQuienesSomos;
  private $vistaHome;
  private $vista;
  private $modelo;

  function __construct()
  {
      $this->vistaHome = new ViewHome();
      $this->VistaQuienesSomos = new ViewQuienesSomos();
      $this->modeloAlimento = new ModelAlimento();
      $this->vista = new ViewMascotas();
      $this->modelo = new ModelMascota();
  }

  function mostrarHome(){
    $this->vistaHome->mostrarHome();
  }

  function getListadoMascotas(){
    $listaMascotas = $this->modelo->getMascotas();
    return $listaMascotas;
  }

  function getListadoAlimentos(){
    $listaAlimentos = $this->modeloAlimento->getAlimento();
    return $listaAlimentos;
  }

  function separarColores($listaMascotas){
    foreach($listaMascotas as $mascota){
      $id = $mascota['id_mascota'];
      $Colores = $mascota['listaColores'];
      $arrColores = explode ("/",$Colores);
      $listaColores[$id] = $arrColores;
    }
    return $listaColores;
  }

  function mostrarSessionMascota(){
    $listaMascotas = $this->getListadoMascotas();
    $listaAlimentos = $this->getListadoAlimentos();
    $listaColores = $this->separarColores($listaMascotas);
    $this->vista->mostrarSessionMascota($listaMascotas, $listaAlimentos, $listaColores);
  
  }
  function mostrarQuienesSomos(){
    $this->VistaQuienesSomos->mostrarQuienesSomos();
}
}
?>
