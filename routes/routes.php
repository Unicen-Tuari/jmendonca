<?php
require_once('controllers/controllerMascotas.php');
//require_once('controllers/controllerAdmin.php');
require_once('controllers/controllerForm.php');
require_once('controllers/controllerLogin.php');
require_once('config/config_app.php');


// Las urls se construyen http://localhost/$RESOURCE_CONTROLADOR/$RESOURCE_METODO/parametros por get

class Route
{
    private $url;

    function __construct()
    {
        $this->url = array();
    }

    function parseUrl($url){
        $arr_data = explode ("/",$url);
        if (isset($arr_data[0])){
            $arrayReturn[ConfigApp::$RESOURCE_CONTROLADOR] = $arr_data[0];//controlador
        }
        if (isset($arr_data[1])){
            $arrayReturn[ConfigApp::$RESOURCE_METODO] = $arr_data[1];//metodo
        }
        if (isset($arr_data[2])){
            $arrayReturn[ConfigApp::$PARAMETERS] = isset($arr_data[2]) ? $arr_data[2] : null;//parametros get
        }
        return $arrayReturn;
    }

    function route($url){
        if($url[configApp::$ACTION] == "" ||
            $url[configApp::$ACTION] == configApp::$RESOURCE_HOME){//url vacia o home
                $controllerMascota = new controllerMascotas();
                $controllerMascota->mostrarHome();
        }else{
            $this->url = $this->parseUrl($url[configApp::$ACTION]);
            //var_dump($this->url);
            if(isset($this->url[ConfigApp::$RESOURCE_CONTROLADOR])){
              switch ($this->url[ConfigApp::$RESOURCE_CONTROLADOR]) {
                    case 'quienessomos':
                        $controlador = new controllerMascotas();
                        if(isset($this->url[ConfigApp::$RESOURCE_METODO])){
                            //code
                        }else{
                            $controlador->mostrarQuienesSomos();
                        }
                        break;
                    case 'mascotas':
                        $controlador = new controllerMascotas();
                        if(isset($this->url[ConfigApp::$RESOURCE_METODO])){
                            //code
                        }else{
                            $controlador->mostrarSessionMascota();
                        }
                        break;
                    case 'contacto':
                        $controlador = new controllerForm();
                        if(isset($this->url[ConfigApp::$RESOURCE_METODO])){
                            //code para elegir otro metodo dentro del controlador
                        }else{
                            $controlador->mostrarContacto();
                        }
                        break;
                    case 'login':
                        $controlador = new controllerLogin();
                        if(isset($this->url[ConfigApp::$RESOURCE_METODO])){
                            //code para elegir otro metodo dentro del controlador
                        }else{
                            $controlador->login($_POST);
                        }
                        break;


                }
            }


        }
    }
}
?>
