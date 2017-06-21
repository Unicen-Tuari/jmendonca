<?php
require_once('libs/Smarty.class.php');


class ViewQuienesSomos
{
private $smarty;
private $baseDir;

function __construct()
{
  $this->smarty = new Smarty;
  $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
}
function mostrarQuienesSomos(){
  $this->smarty->assign("baseDir", $this->baseDir);
  $this->smarty->display('quienessomos.tpl');
}
}
?>
