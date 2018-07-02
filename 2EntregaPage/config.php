<?php

$acciones = [
    "ver" => "Controller#mostrarHome",
    "ver" => "Controller#mostrarNosotros",
    "ver" => "Controller#mostrarNoticia",
    "ver" => "Controller#mostrarContacto",
       "" => "LoginController#login",
  "login" => "LoginController#validarLogin",
 "logout" => "LoginController#logout",
    "ver" => "NoticiaController#mostrarNoticias",
  "crear" => "NoticiaController#crearNoticia",
"guardar" => "NoticiaController#guardarNoticia",
 "borrar" => "NoticiaController#borrarNoticia",
 "finalizar" => "NoticiaController#finalizaNoticia",
"detalle" => "NoticiaController#mostrarDetalle",
    "ver" => "CategoriaController#mostrarCategorias",
  "crear" => "CategoriaController#crearCategoria",
"guardar" => "CategoriaController#guardarCategoria",
 "borrar" => "CategoriaController#borrarCategoria",
 "finalizar" => "CategoriaController#finalizaCategoria",
"detalle" => "CategoriaController#mostrarDetalle"
];
?>