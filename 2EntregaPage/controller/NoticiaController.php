<?php
require_once "./controller/SecureController.php";
require_once "./model/NoticiaModel.php";
require_once "./view/NoticiaView.php";

require_once "./model/CategoriaModel.php";

class NoticiaController extends SecureController{

  private $NoticiaModel;
  private $NoticiaView;
  private $CategoriaModel;

  function __construct(){

    $this->NoticiaModel = new NoticiaModel();
    $this->NoticiaView = new NoticiaView();
    $this->CategoriaModel = new CategoriaModel();
  }

  function mostrarNoticia($params = [])
  {
    $noticia = $this->NoticiaModel->obtenerNoticia($params[0]);
    $this->NoticiaView->mostrarNoticia($noticia);
  }

  function mostrarAllNoticias()
  {
    $noticias = $this->NoticiaModel->obtenerNoticias();
    $this->NoticiaView->mostrarNoticias($noticias);
  }


  function crearNoticia()
  {
    $categorias = $this->CategoriaModel->obtenerAllCategorias();
    $this->NoticiaView->mostrarVistaCrearNoticia($categorias);
  }

  function guardarNoticia($params = [])
  {
    $titulo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];
    $cat=$_POST['Categoria_id_categoria'];
    
    $this->NoticiaModel->guardarNoticia($titulo,$descripcion,$cat);
    PageHelpers::allNoticias();
  }

  function borrarNoticia($params = [])
  {
    $this->NoticiaModel->deleteNoticia($params[0]);
    PageHelpers::allNoticias();
  }

  function publicarNoticia($params = []) //falta terminar
  {
    $this->NoticiaModel->publicarNoticia($params[0]);
    PageHelpers::allNoticias();
  }
  function noPublicarNoticia($params = []) //falta terminar
  {
    $this->NoticiaModel->noPublicarNoticia($params[0]);
    PageHelpers::allNoticias();
  }

}
 ?>
