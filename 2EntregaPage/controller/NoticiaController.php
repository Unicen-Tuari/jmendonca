<?php
require_once "./controller/SecureController.php";
require_once "./model/NoticiaModel.php";
require_once "./view/NoticiasView.php";

class NoticiaController extends SecureController{

  private $NoticiaModel;
  private $NoticiasView;

  function __construct(){

    $this->NoticiaModel = new NoticiaModel();
    $this->NoticiasView = new NoticiasView();
  }

  function mostrarNoticias($params = [])
  {
    $tareas = $this->NoticiaModel->obtenerNoticias();
    $this->NoticiasView->mostrarNoticias($noticia);
  }

  function crearNoticia($params = [])
  {
    $this->NoticiasView->mostrarVistaCrearNoticia();
  }

  function guardarNoticia($params = [])
  {
    $noticia = [
      'id_noticia' => $_POST['id_noticia'],
      'titulo' => $_POST['titulo'],
      'descripcion' => $_POST['descripcion'],
      'Categoria_id_categoria' => $_POST['Categoria_id_categoria']

    ];
    $this->NoticiaModel->insertarNoticia($noticia);
    PageHelpers::homePage();
  }

  function borrarNoticia($params = [])
  {
    $this->NoticiaModel->deleteNoticia($params[0]);
    PageHelpers::homePage();
  }

  function finalizaNoticia($params = [])
  {
    $this->NoticiaModel->finalizarNoticia($params[0]);
    PageHelpers::homePage();
  }

  function mostrarDetalle($params = [])
  {
    $noticia = $this->NoticiaModel->obtenerNoticia($params[0]);

    if ($noticia['finalizada'] == 1)
      $estado = "Esta Finalizada";
    else
      $estado = "NO Esta Finalizada";

    $this->NoticiasView->mostrarDetalle($noticia, $estado);
  }


}
 ?>
