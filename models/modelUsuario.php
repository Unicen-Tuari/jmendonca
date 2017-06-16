<?php
require_once("model.php")
class ModelUsuario extends Model
{
  public function getUsuario()
  {
  $this->db->prepare("SELECT * FROM Usuario");
  $result = $consulta->execute();
    return $consulta->fetchAll();
  }
}
  ?>
