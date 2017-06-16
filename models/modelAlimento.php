<?php
require_once("model.php")
class ModelAlimento extends Model
{
  public function getAlimento()
  {
  $this->db->prepare("SELECT * FROM Alimento");
  $result = $consulta->execute();
    return $consulta->fetchAll();
  }
}

  ?>
