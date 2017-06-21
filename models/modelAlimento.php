<?php
class ModelAlimento
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_mascotas;charset=utf8',
            'root', '');
  }

  function getAlimento(){
  $consulta = $this->db->prepare("SELECT * FROM Alimento");
  $result = $consulta->execute();
  return $consulta->fetchAll();
  }
  
}

?>
