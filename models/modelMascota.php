<?php
require_once('model.php');
class ModelMascota extends Model
{

  function getMascotas(){
    $consulta = $this->db->prepare("SELECT * FROM Mascota");
    $result = $consulta->execute();
    return $consulta->fetchAll();
    }
function editar_mascota(){
    
}
    function borrar_mascota(){
        
    }
}
?>
