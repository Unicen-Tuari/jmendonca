<?php

$acciones = [
	"" => "LoginController#login",
	"login" => "LoginController#validarLogin",
	"logout" => "LoginController#logout",
	"verHome" => "Controller#mostrarHome",
	"verNosotros" => "Controller#mostrarNosotros",
	"verContacto" => "Controller#mostrarContacto",

	"verNoticia" => "NoticiaController#mostrarNoticia", //una noticia especifica
	"verAllNoticias" => "NoticiaController#mostrarAllNoticias", //todas las noticias
	"crearNoticia" => "NoticiaController#crearNoticia",
	"guardarNoticia" => "NoticiaController#guardarNoticia",
	"borrarNoticia" => "NoticiaController#borrarNoticia",
	"publicarNoticia" => "NoticiaController#publicarNoticia",
	"noPublicarNoticia" => "NoticiaController#noPublicarNoticia",

	"verAllCategorias" => "CategoriaController#mostrarAllCategorias", //todas las categorias
	"crearCategoria" => "CategoriaController#crearCategoria", //muestra el formulario 
	"guardarCategoria" => "CategoriaController#guardarCategoria",
	"borrarCategoria" => "CategoriaController#borrarCategoria",
	"activarCategoria" => "CategoriaController#activarCategoria",
	"desactivarCategoria" => "CategoriaController#desactivarCategoria"
];
?>