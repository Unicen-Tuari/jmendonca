<?php
require_once('libs/Smarty.class.php');

class HomeView
{
private $smarty;

function __construct()
{
  $this->smarty = new Smarty;
}

  function mostrarHome($noticias){
  	$this->smarty->assign('noticias',$noticias);
    $this->smarty->display('home.tpl');
  }
  
}
?>