<?php

require_once "./view/HomeView.php";
require_once "./view/NosotrosView.php";
require_once "./view/NoticiaView.php";
require_once "./view/ContactoView.php";

require_once "./model/UsuarioModel.php";
require_once "./model/NoticiaModel.php";
require_once "./model/CategoriaModel.php";

class Controller {
  private $HomeView;
  private $NosotrosView;
  private $NoticiaView;
  private $ContactoView;

  private $CategoriasModel;
  private $NoticiasModel;

  function __construct(){
    
    $this->HomeView = new HomeView();
    $this->NosotrosView = new NosotrosView();
    $this->NoticiaView = new NoticiaView();
    $this->ContactoView = new ContactoView();

    $this->CategoriasModel = new CategoriaModel();
    $this->NoticiasModel = new NoticiaModel();  
  }

  function mostrarHome($params = [])
  {
    $noticias=$this->NoticiasModel->obtenerNoticiasPublicadas();
    $this->HomeView->mostrarHome($noticias);
  }

function mostrarNosotros($params = [])
  {
    $this->NosotrosView->mostrarNosotros();
  }

  function mostrarNoticia($params = [])
  {
    $this->NoticiaView->mostrarNoticia($noticia);
  }

  function mostrarContacto($params = [])
  {
    $this->ContactoView->mostrarContacto();
  }
}
?>