<?php

require_once "./view/HomeView.php";
require_once "./view/NosotrosView.php";
require_once "./view/NoticiaView.php";
require_once "./view/ContactoView.php";

class Controller {
  private $HomeView;
  private $NosotrosView;
  private $NoticiaView;
  private $ContactoView;

  function __construct(){
    $this->HomeView = new HomeView();
    $this->NosotrosView = new NosotrosView();
    $this->NoticiaView = new NoticiaView();
    $this->ContactoView = new ContactoView();
  }

  function mostrarHome($params = [])
  {
    $this->HomeView->mostrarHome($home);
  }

function mostrarNosotros($params = [])
  {
    $this->NosotrosView->mostrarNosotros($nosotros);
  }

  function mostrarNoticia($params = [])
  {
    $this->NoticiaView->mostrarNoticia($noticia);
  }

  function mostrarContacto($params = [])
  {
    $this->ContactoView->mostrarContacto($contacto);
  }