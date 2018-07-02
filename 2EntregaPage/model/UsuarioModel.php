<?php

class UsuarioModel {

  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
               .'dbname=db_noticia;charset=utf8'
            , 'root', '');
  }

  function obtenerUsuario($email)
  {
    $sentencia = $this->db->prepare( "SELECT * from usuario where email = ?");
    $sentencia->execute([$email]);
    return $sentencia->fetch();
  }
}
?>
