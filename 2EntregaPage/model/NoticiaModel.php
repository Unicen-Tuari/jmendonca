<?php

class NoticiaModel {

  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
               .'dbname=db_noticia;charset=utf8'
            , 'root', '');
  }

  function obtenerNoticia()
  {
    $sentencia = $this->db->prepare( "SELECT * from noticia");
    $sentencia->execute();
    return $sentencia->fetchAll();
  }

  function obtenerNoticia($id_noticia)
  {
    $sentencia = $this->db->prepare( "SELECT * from noticia where id=?");
    $sentencia->execute([$id_noticia]);
    return $sentencia->fetch();
  }

  function insertarNoticia($noticia)
  {
    $this->db->beginTransaction();
    $sentencia = $this->db->prepare("INSERT INTO noticia (id_noticia, titulo, descripcion, Categoria_id_categoria) VALUES (?,?,?,?)");
    $sentencia->execute([$noticia['id_noticia'], $noticia['titulo'], $noticia['descripcion'], $noticia['categoria_id_categoria']]);
    $this->db->commit();
    return $this->db->lastInsertId();
  }

  function deleteNoticia($id_noticia)
  {
    $sentencia = $this->db->prepare("DELETE from noticia where id=?");
    $sentencia->execute([$id_noticia]);
  }

  function finalizarNoticia($id_noticia)
  {
    $sentencia = $this->db->prepare("UPDATE noticia SET finalizada=1 where id=?");
    $sentencia->execute([$id_noticia]);
  }
}
?>
