<?php
require_once("model.php")
class ModelMascota extends Model
{
  public function getMascotas()
  {
  $this->db->prepare("SELECT * FROM Mascota");
  $result = $consulta->execute();
    return $consulta->fetchAll();
  }
}

  ?>
