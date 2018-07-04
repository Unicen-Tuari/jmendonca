<?php
require_once "./controller/SecureController.php";
require_once "./model/CategoriaModel.php";
require_once "./view/CategoriaView.php";

class CategoriaController extends SecureController{

  private $CategoriaModel;
  private $CategoriaView;

  function __construct(){

    $this->CategoriaModel = new CategoriaModel();
    $this->CategoriaView = new CategoriaView();
  }

  function mostrarAllCategorias()
  {
    $categorias = $this->CategoriaModel->obtenerAllCategorias();
    $this->CategoriaView->mostrarAllCategorias($categorias);
  }

  function crearCategoria()//muestra el formulario
  {
    $this->CategoriaView->mostrarCrearCategoria();
  }


  function guardarCategoria($params = [])
  {
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];

    $this->CategoriaModel->guardarCategoria($nombre,$descripcion);
    PageHelpers::allCategorias();
  }

  function borrarCategoria($params = [])
  {
    $this->CategoriaModel->deleteCategoria($params[0]);
    PageHelpers::allCategorias();
  }

  function activarCategoria($params = [])
  {
    $this->CategoriaModel->activaCategoria($params[0]);
    PageHelpers::allCategorias();
  }

  function desactivarCategoria($params = [])
  {
    $this->CategoriaModel->desactivaCategoria($params[0]);
    PageHelpers::allCategorias();
  }

}
 ?>
