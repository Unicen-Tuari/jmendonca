<?php
class ModelLogin{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
                        .'dbname=db_mascotas;charset=utf8',
                        'root', '');
  }

  function GetUsuario($id_usuario){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE id_usuario = ?");
    $result = $consulta->execute(array($id_usuario));
    return $consulta->fetchAll();
    }
  }
?>
