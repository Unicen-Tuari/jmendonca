<?php
require_once('libs/Smarty.class.php');

class ContactoView
{
private $smarty;

function __construct()
{
  $this->smarty = new Smarty;
}

  function mostrarContacto(){
      $this->smarty->display('contacto.tpl');
  }
  
}
?>