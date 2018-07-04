<?php

class CategoriaModel {

  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
               .'dbname=db_noticia;charset=utf8'
            , 'root', '');
  }

  function obtenerAllCategorias()
  {
    $sentencia = $this->db->prepare( "SELECT * FROM categoria");
    $sentencia->execute();
    return $sentencia->fetchAll();
  }

  function guardarCategoria($nombre,$descripcion)
  {
    $this->db->beginTransaction();
    $sentencia = $this->db->prepare("INSERT INTO categoria (nombre, descripcion) VALUES ('$nombre','$descripcion')");
    $sentencia->execute(array($nombre,$descripcion));
    $this->db->commit();
    return $this->db->lastInsertId();
  }

  function deleteCategoria($id_categoria)
  {
    $sentencia = $this->db->prepare("DELETE FROM categoria where id_categoria='$id_categoria'");
    $sentencia->execute(array($id_categoria));
  }

  function activaCategoria($id_categoria)
  {
    $sentencia = $this->db->prepare("UPDATE categoria SET activa=0 where id_categoria='$id_categoria'");
    $sentencia->execute(array($id_categoria));
  }

  function desactivaCategoria($id_categoria)
  {
    $sentencia = $this->db->prepare("UPDATE categoria SET activa=1 where id_categoria='$id_categoria'");
    $sentencia->execute(array($id_categoria));
  }
}
?>
