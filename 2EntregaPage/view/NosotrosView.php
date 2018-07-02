<?php
require_once('libs/Smarty.class.php');

class NosotrosView
{
private $smarty;

function __construct()
{
  $this->smarty = new Smarty;
}

  function mostrarNosotros(){
      $this->smarty->display('nosotros.tpl');
  }
  
}
?>