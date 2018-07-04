<?php

class NoticiaModel {

  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'
               .'dbname=db_noticia;charset=utf8'
            , 'root', '');
  }

  function obtenerNoticiasPublicadas()
  {
    $sentencia = $this->db->prepare( "SELECT n.id_noticia,n.titulo,c.nombre,n.descripcion FROM noticia n, categoria c WHERE c.id_categoria=n.Categoria_id_categoria AND n.publicada=1");
    $sentencia->execute();
    return $sentencia->fetchAll();
  }

  function obtenerNoticias()
  {
    $sentencia = $this->db->prepare( "SELECT n.id_noticia,n.titulo,c.nombre,n.descripcion,n.publicada FROM noticia n, categoria c WHERE c.id_categoria=n.Categoria_id_categoria");
    $sentencia->execute();
    return $sentencia->fetchAll();
  }

  function obtenerNoticia($id_noticia)
  {
    $sentencia = $this->db->prepare( "SELECT n.id_noticia,n.titulo,c.nombre,n.descripcion,n.publicada from noticia n, categoria c WHERE c.id_categoria=n.Categoria_id_categoria AND id_noticia='$id_noticia'");
    $sentencia->execute([$id_noticia]);
    return $sentencia->fetch();
  }

  function guardarNoticia($titulo,$descripcion,$cat)
  {
    $this->db->beginTransaction();
    $sentencia = $this->db->prepare("INSERT INTO noticia (titulo, descripcion, Categoria_id_categoria) VALUES ('$titulo','$descripcion',$cat)");
    $sentencia->execute(array($titulo,$descripcion,$cat));
    $this->db->commit();
    return $this->db->lastInsertId();
  }

  function deleteNoticia($id_noticia)
  {
    $sentencia = $this->db->prepare("DELETE FROM noticia where id_noticia='$id_noticia'");
    $sentencia->execute(array($id_noticia));
  }

  function publicarNoticia($id_noticia)
  {
    $sentencia = $this->db->prepare("UPDATE noticia SET publicada=1 where id_noticia='$id_noticia'");
    $sentencia->execute(array($id_noticia));
  }
  function noPublicarNoticia($id_noticia)
  {
    $sentencia = $this->db->prepare("UPDATE noticia SET publicada=0 where id_noticia='$id_noticia'");
    $sentencia->execute(array($id_noticia));
  }
}
?>
