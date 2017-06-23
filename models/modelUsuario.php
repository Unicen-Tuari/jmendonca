<?php
require_once('model.php');

class ModelUsuario extends Model
{

  function getUsuario(){
    $consulta = $this->db->prepare("SELECT * FROM Usuario");
    $result = $consulta->execute();
    return $consulta->fetchAll();
    }

}

?>
