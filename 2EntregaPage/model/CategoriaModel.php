<?php

class CategoriaModel {

  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
               .'dbname=db_noticia;charset=utf8'
            , 'root', '');
  }

  function obtenerCategoria()
  {
    $sentencia = $this->db->prepare( "SELECT * from categoria");
    $sentencia->execute();
    return $sentencia->fetchAll();
  }

  function obtenerCategoria($id_categoria)
  {
    $sentencia = $this->db->prepare( "SELECT * from categoria where id=?");
    $sentencia->execute([$id_categoria]);
    return $sentencia->fetch();
  }

  function insertarCategoria($categoria)
  {
    $this->db->beginTransaction();
    $sentencia = $this->db->prepare("INSERT INTO categoria (id_categoria, nombre, descripcion) VALUES (?,?,?)");
    $sentencia->execute([$categoria['id_categoria'], $categoria['nombre'], $categoria['descripcion']]);
    $this->db->commit();
    return $this->db->lastInsertId();
  }

  function deleteCategoria($id_categoria)
  {
    $sentencia = $this->db->prepare("DELETE from categoria where id=?");
    $sentencia->execute([$id_categoria]);
  }

  function finalizarCategoria($id_categoria)
  {
    $sentencia = $this->db->prepare("UPDATE categoria SET finalizada=1 where id=?");
    $sentencia->execute([$id_categoria]);
  }
}
?>
