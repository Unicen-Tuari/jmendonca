<?php
require_once "./libs/Smarty.class.php";
class NoticiasView {

  private $smarty;

  function __construct(){
    $this->smarty = new Smarty;
  }

  function mostrarNoticias($noticia){
     $this->smarty->assign("noticia", $noticia);
     $this->smarty->display("mostrarNoticias.tpl");
  }

  function mostrarVistaCrearNoticia($params = [])
  {
    $this->smarty->display("crearNoticia.tpl");
  }

  function mostrarDetalle($noticia, $estado){
    $this->smarty->assign('id_noticia', $noticia['id_noticia'] );
    $this->smarty->assign('titulo', $noticia['titulo'] );
    $this->smarty->assign('descripcion',$noticia['descripcion'] );
    $this->smarty->assign('Categoria_id_categoria', $noticia['Categoria_id_categoria'] );
    $this->smarty->assign('estado',$estado );
    $this->smarty->display("mostrarDetalleNoticia.tpl");
  }
}
 ?>