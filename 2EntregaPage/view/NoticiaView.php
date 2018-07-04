<?php
require_once('libs/Smarty.class.php');

class NoticiaView
{
private $smarty;

function __construct()
{
  $this->smarty = new Smarty;
}

  function mostrarNoticia($noticia){
  	$this->smarty->assign('noticia',$noticia);
    $this->smarty->display('noticia.tpl');
  }

  function mostrarNoticias($noticias){ // todas las noticias
  	$this->smarty->assign('noticias',$noticias);
    $this->smarty->display('allNoticias.tpl');
  }

  //ABM
  function mostrarVistaCrearNoticia($categorias)
  {
  	$this->smarty->assign('categorias',$categorias);
    $this->smarty->display("crearNoticia.tpl");
  }
  
}
?>