<?php
require_once('libs/Smarty.class.php');

class ViewContacto
{
private $smarty;
private $baseDir;

function __construct()
{
  $this->smarty = new Smarty;
  $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
}
?>
