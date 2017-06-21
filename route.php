<?php
require_once('controllers/controllerMascotas.php');
//require_once('controllers/controllerAdmin.php');
require_once('controllers/controllerForm.php');
require_once('config/config_app.php');

function parseUrl($url){
  $arr_data = explode ("/",$url);
  if (isset($arr_data[0])){
    $arrayReturn[ConfigApp::$RESOURCE_HOME] = $arr_data[0];
  }
  if (isset($arr_data[1])){
    if( $arr_data[1] == ConfigApp::$RESOURCE_MASCOTAS){
      $arrayReturn[ConfigApp::$TASK] = $arr_data[1];
    }
    if( $arr_data[1] == ConfigApp::$RESOURCE_QUIENESSOMOS){
      $arrayReturn[ConfigApp::$TASK] = $arr_data[1];
    }
    if( $arr_data[1] == ConfigApp::$RESOURCE_CONTACTO){
      $arrayReturn[ConfigApp::$TASK] = $arr_data[1];
    }
  }
  if (isset($arr_data[2])){
    $arrayReturn[ConfigApp::$PARAMETERS] = isset($arr_data[2]) ? $arr_data[2] : null;
  }
  return $arrayReturn;
}

if(!isset($_REQUEST[configApp::$ACTION])){//url vacia
    $controllerMascota = new controllerMascotas();
    $controllerMascota->mostrarHome();
}else{
  if (($_REQUEST[configApp::$ACTION]) == configApp::$RESOURCE_HOME){// mascota/home
    $controllerMascota = new controllerMascotas();
    $controllerMascota->mostrarHome();
  }else{
    $url = parseUrl($_REQUEST[configApp::$ACTION]);// mascota/home/mascotas
    if(isset($url[configApp::$TASK])){
      if($url[configApp::$TASK] == configApp::$RESOURCE_MASCOTAS){
        $controllerMascota = new controllerMascotas();
        $controllerMascota->mostrarSessionMascota();
      }
      if($url[configApp::$TASK] == configApp::$RESOURCE_QUIENESSOMOS){// mascota/home/quienessomos
        $controllerMascota = new controllerMascotas();
        $controllerMascota->mostrarQuienesSomos();
      }
      if($url[configApp::$TASK] == configApp::$RESOURCE_CONTACTO){// mascota/home/contacto
        $controllerForm = new controllerForm();
        $controllerForm->mostrarContacto();
      }
    }else{
      $controllerMascota = new controllerMascotas();//si escribe el user algo en otro lado lo manda al home
      $controllerMascota->mostrarHome();
    }
  }
}
?>