<?php
require_once "./controller/SecureController.php";
require_once "./model/CategoriaModel.php";
require_once "./view/categoriaView.php";

class CategoriaController extends SecureController{

  private $CategoriaModel;
  private $CategoriaView;

  function __construct(){

    $this->CategoriaModel = new CategoriaModel();
    $this->CategoriaView = new CategoriaView();
  }

  function mostrarCategorias($params = [])
  {
    $categoria = $this->CategoriaModel->obtenerCategorias();
    $this->CategoriaView->mostrarCategorias($categoria);
  }

  function crearCategoria($params = [])
  {
    $this->CategoriaView->mostrarVistaCrearCategoria();
  }

  function guardarCategoria($params = [])
  {
    $categoria = [
      'id_categoria' => $_POST['id_categoria'],
      'nombre' => $_POST['nombre'],
      'descripcion' => $_POST['descripcion']

    ];
    $this->CategoriaModel->insertarCategoria($categoria);
    PageHelpers::homePage();
  }

  function borrarCategoria($params = [])
  {
    $this->CategoriaModel->deleteCategoria($params[0]);
    PageHelpers::homePage();
  }

  function finalizaCategoria($params = [])
  {
    $this->CategoriaModel->finalizarCategoria($params[0]);
    PageHelpers::homePage();
  }

  function mostrarDetalle($params = [])
  {
    $categoria = $this->CategoriaModel->obtenerCategoria($params[0]);

    if ($categoria['finalizada'] == 1)
      $estado = "Esta Finalizada";
    else
      $estado = "NO Esta Finalizada";

    $this->CategoriaView->mostrarDetalle($categoria, $estado);
  }


}
 ?>
