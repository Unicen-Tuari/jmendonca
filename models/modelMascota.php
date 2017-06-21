<?php
class ModelMascota
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_mascotas;charset=utf8',
            'root', '');
  }

  function getMascotas(){
    $consulta = $this->db->prepare("SELECT * FROM Mascota");
    $result = $consulta->execute();
    return $consulta->fetchAll();
    }

}
?>
