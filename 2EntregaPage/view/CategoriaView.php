<?php
require_once "./libs/Smarty.class.php";
class CategoriaView {

  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }

  function mostrarCategoria($categoria){
     $this->smarty->assign("categoria", $categoria);
     $this->smarty->display("mostrarcategorias.tpl");
  }

  function mostrarVistaCrearCategoria($params = [])
  {
    $this->smarty->display("crearCategoria.tpl");
  }

  function mostrarDetalle($categoria, $estado){
    $this->smarty->assign('id_categoria', $categoria['id_categoria'] );
    $this->smarty->assign('nombre', $categoria['nombre'] );
    $this->smarty->assign('descripcion',$categoria['descripcion'] );
    $this->smarty->assign('estado',$estado );
    $this->smarty->display("mostrarDetalleCategoria.tpl");
  }
}
 ?>