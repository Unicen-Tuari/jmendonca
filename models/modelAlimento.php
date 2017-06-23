<?php
require_once('model.php');
class ModelAlimento extends Model
{

  function getAlimento(){
  $consulta = $this->db->prepare("SELECT * FROM Alimento");
  $result = $consulta->execute();
  return $consulta->fetchAll();
  }
  
}

?>
