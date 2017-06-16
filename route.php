<?php
require_once('controllers/controllerMascota.php');
require_once('controllers/controllerAdmin.php');
require_once('controllers/controllerForm.php');
require_once('config/config_app.php');

function parseUrl($url){
  $arr_data = explode ("/",$url);
  $arrayReturn[ConfigApp::$RESOURCE] = $arr_data[0];
  $arrayReturn[ConfigApp::$ACTION] = $arr_data[1];
  $arrayReturn[ConfigApp::$PARAMETERS] = isset($arr_data[2]) ? $arr_data[2] : null;
  return $arrayReturn;
}
$controller = new controllerMascota();
$controller = new controllerAdmin();
$controller = new controllerForm();

 ?>
