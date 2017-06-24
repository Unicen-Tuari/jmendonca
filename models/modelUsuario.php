<?php
class ModelUsuario
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_mascotas;charset=utf8',
            'root', '');
  }

  function getUsuario(){
    $consulta = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $result = $consulta->execute(array($id_usuario));
    return $consulta->fetchAll();
    }

}
  ?>
