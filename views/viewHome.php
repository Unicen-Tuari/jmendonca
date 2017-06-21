<?php
require_once('libs/Smarty.class.php');

class ViewHome
{
private $smarty;
private $baseDir;

function __construct()
{
  $this->smarty = new Smarty;
  $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
}

  function mostrarHome(){
      $this->smarty->assign("baseDir", $this->baseDir);
      $this->smarty->display('home.tpl');
  }
  
}
?>
