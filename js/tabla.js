"use strict";

function pedirInfoPorItem(item){
  $.ajax({
    method: "GET",
    dataType: 'html',
    url: item,
    success: function(resultData){
      var html = "";
      html += resultData;
      $("#contenedorCentral").html(html);
      if (item === "../html/catalogo.html") {
        pedirInfoPorGrupo();
        $("#agregar").on("click", function(){
          guardarInformacion();
        });
      }
      else if (item === "../html/productos.html") {
        cargarProductos();
        cargarLinkAProducto();
      }
      else if (item === "../html/home.html") {
        cargarLinkAProducto();
      }
    },
    error:function(jqxml, status, errorThrown){
      console.log(errorThrown);
    }
  });
}

function cargarLinkAProducto(){
  $(".reloh")[0].onclick = function(){
    pedirInfoPorItem("../html/produ.html");
  }
}

/*function inputsCatalogo(){
  var string = "<div>Agregar valores nuevos: </div>"
  string += '<span class="col-xs-6 col-sm-2">CODIGO: </span>';
  string += '<input type="text" class="btn col-xs-6 col-sm-2 Valores"></input> ';
  string += '<span class="col-xs-6 col-sm-2">DESCRIPCION: </span>';
  string += '<input type="text" class="btn col-xs-6 col-sm-2 Valores"></input> ';
  string += '<span class="col-xs-6 col-sm-2">PRECIO: </span>';
  string += '<input type="number" class="btn col-xs-6 col-sm-2 Valores"></input> ';
  string += '<input id="agregar" type="button" class="btn col-xs-12 col-sm-6 col-sm-offset-3" value="AGREGAR">'
  string += '<div class="col-xs-12" id="guardarAlert"></div>';
  return string;
}*/

function crearTabla(resultData){
  var html = "";
  for (var i = 0; i < resultData.information.length; i++) {
    html += '<tr>';
    html += '<td>'+resultData.information[i]['thing'].nombre+'</td>';
    html += '<td>'+resultData.information[i]['thing'].raza+'</td>';
    html += '<td>$'+resultData.information[i]['thing'].edad+'</td>';
    html += '<td>$'+resultData.information[i]['thing'].sexo+'</td>'
    html += '<td><input class="btn eliminar" type="button" value="eliminar"></input>'
    html += '</tr>';
  }
  $("#tabla").html(html);
  var botonesEliminar = $(".eliminar");
  for (var i = 0; i < botonesEliminar.length; i++) {
    asignarEliminar(i, resultData.information[i]['_id']);
  }
}

function asignarEliminar(i, id){
  var boton = $(".eliminar")[i];
  boton.onclick = function(){
    borrarInfoPorItem(id);
  }
}

function borrarInfoPorItem(item) {
  var id=item;
  $.ajax({
    url:"http://web-unicen.herokuapp.com/api/delete/" + id,
    method:"DELETE",
    success: function(resultData){
      console.log(resultData);
      pedirInfoporGrupo();
    },
    error:function(jqxml, status, errorThrown){
      alert('Error!');
      console.log(errorThrown);
    }
  });
}

function pedirInfoporGrupo(){
  var grupo = 30;
  $.ajax({
    method: "GET",
    dataType: 'JSON',
    url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
    success:function (resultData){
      crearTabla(resultData);
    },
    error:function(jqxml, status, errorThrown){
      console.log(errorThrown);
    }
  });
}

function guardarInformacion(){
  var grupo = 30;
  var informacion = {
    nombre: null,
    raza: null,
    edad: null,
    sexo: null
  };
  var inputs = $(".Valores");
  for (var i = 0; i < inputs.length; i++) {
    if (inputs[i].value == "") {
      alert('debe llenar todos los campos');
      return;
    }
  }
  informacion.nombre = inputs[0].value;
  informacion.raza = inputs[1].value;
  informacion.edad = inputs[2].value;
  informacion.sexo = inputs[3].value;
  var info = {
    "group": grupo,
    "thing": informacion
  };
  $.ajax({
    method: "POST",
    dataType: 'JSON',
    data: JSON.stringify(info),
    contentType: "application/json; charset=utf-8",
    url: "http://web-unicen.herokuapp.com/api/create",
    success: function(resultData){
      $("#guardarAlert").removeClass("alert-danger")
      $("#guardarAlert").addClass("alert-success")
      $("#guardarAlert").html("Guardado");
      console.log(resultData.information);
      pedirInfoporGrupo();
    },
    error:function(jqxml, status, errorThrown){
      console.log(errorThrown);
      $("#guardarAlert").addClass("alert-danger");
      $("#guardarAlert").html("Error por favor intente mas tarde");
    }
  },
  $("#guardarAlert").html("Cargando...")
);
}

function mostrar(numero, boton){
  var listas = $(".prodfiltrado");
  boton.onclick = function(){
    for (var i = 0; i < listas.length; i++){
      borrarListas(listas[i]);
    }
    listas[numero].style.display = 'block';
  }
}

function borrarListas(lista) {
  lista.style.display = 'none';
}

function cargarmascotas() {
  var botones = $(".filtro input");
  for (var i = 0; i < botones.length; i++) {
    mostrar(i, botones[i]);
  }
}
