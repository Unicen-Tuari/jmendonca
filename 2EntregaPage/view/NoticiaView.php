<?php
require_once('libs/Smarty.class.php');

class NoticiaView
{
private $smarty;

function __construct()
{
  $this->smarty = new Smarty;
}

  function mostrarNoticia(){
      $this->smarty->display('noticia.tpl');
  }
  
}
?>