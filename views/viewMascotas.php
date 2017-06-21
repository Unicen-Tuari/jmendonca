<?php
require_once('libs/Smarty.class.php');

class ViewMascotas
{
private $smarty;
private $baseDir;

function __construct()
{
  $this->smarty = new Smarty;
  $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
}

  function mostrarSessionMascota($listaMascotas, $listaAlimentos, $listaColores){
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->assign("listaMascotas", $listaMascotas);
    $this->smarty->assign("listaColoresxMascota", $listaColores);
    $this->smarty->assign("listaAlimentos", $listaAlimentos);
    $this->smarty->display('mascotas.tpl');
  }
}

?>
