<?php
require_once('models/ModelUsuario.php');

class controllerLogin
{
    private $usuario;

    function __construct()
    {
        $this->usuario = new ModelUsuario();
    }
    function login($post){
        if(isset($post)){
            var_dump($post);
            echo "entrastes al puto login";
        }
        //$this->vista->mostrarContacto();
    }
}




?>
