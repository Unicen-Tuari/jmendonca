<?php
require_once "./libs/Smarty.class.php";
class CategoriaView {

  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }

  function mostrarAllCategorias($categorias){
     $this->smarty->assign("categorias", $categorias);
     $this->smarty->display("mostrarCategorias.tpl");
  }

  function mostrarCrearCategoria()
  {
    $this->smarty->display("crearCategoria.tpl");
  }

}
 ?>