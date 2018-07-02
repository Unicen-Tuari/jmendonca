"use strict";
/*---Variables---*/

let usado= [];//arreglo que guarda las cartas que ya salieron
let cant_aciertos=0;//me dice si encontre todas las x
let tablero=[];
let aciertos=0;
let errores=0;
const c_long_tab=8//indica la longitud total del tablero

/*---Ejecuta el juego---*/

function comenzar(){//cargo todo el arreglo con las probabilidades de salir algunos de los valores
    
    cant_aciertos = 0;
    for (let indice_tab = 0; indice_tab < c_long_tab; indice_tab++) {//recorro el arrreglo tablero
        let marca = '';
        let prob = Math.random();
        usado[indice_tab] = false;//hace que todos los elementos usados se vuelvan false
        if (prob < 0.4) {
            marca = 'x';
            cant_aciertos++;//por cada x agrega un acierto para encontrar
        }
        else {
            if (prob < 0.6) {
                marca = 'y';

            }
            else {
                marca = '';
            }
        }
        tablero[indice_tab] = marca;
    }
    if (tablero[0] == '') {//lo que hace es que si comienza vacio comience de vuelta hasta que tenga una marca(segun item opcional)
        comenzar();
//cambiar esto y pasarlo a las probabilidades 
    }
    else{

        console.log(tablero);
    }
        
    mostrar_carta();
    
}
/*---despues de cargar todo el tablero con "comenzar" al seleccionar el valor que quiero entra la funcion "jugar"---*/
function jugar(){
    
    let carta = (document.getElementById("elegir").selectedIndex)-1;//el selectedIndex-1 es para que funcione de 0 a 7
    if((usado[carta]==false) && (cant_aciertos>0)){//se asegura que de vuelta todas las cartas
        usado[carta] = true;//aca marco carta como usada
        girar_carta(carta);
        if (tablero[carta] == 'x'){
            aciertos++;
            cant_aciertos--;//resto la cantidad de aciertos que quedan para encontrar
            document.getElementById("A").innerHTML =aciertos;
            document.body.style.backgroundColor = "green";
            if (cant_aciertos == 0) {
                alert('ganastes el juego');
            }
        }
        else{
            if (tablero[carta] =='y'){
                errores++;
                aciertos--;
                document.getElementById("A").innerHTML = aciertos;
                document.getElementById("E").innerHTML = errores;
                document.body.style.backgroundColor = "red"; //cambio el color de fondo al salir el valor
            }
        }
    }
    else
     {
        alert('carta ya elegida');
    }
}
function mostrar_carta(){//lo que hace esta funcion es: cuando hago "comenzar" me muestra las imagenes durante 2 segundos
    
    for (let indice_tab = 0; indice_tab < c_long_tab; indice_tab++) {
        
        if (tablero[indice_tab] == '') {
            document.getElementById(indice_tab).src = "images/7.jpg";
        }
        if (tablero[indice_tab] == 'x') {
            document.getElementById(indice_tab).src = "images/0.jpg";
        }
        if (tablero[indice_tab] == 'y') {
            document.getElementById(indice_tab).src = "images/4.jpg";
        }
    }
    
    setTimeout(function () { ocultar_carta();},2000);
    
}

function ocultar_carta(){//luego de mostrar las oculta para poder elegir el valor

    for (let indice_tab = 0; indice_tab < c_long_tab; indice_tab++) {
        document.getElementById(indice_tab).src = "images/bg.png";
    }
    document.getElementById("eleccion").style.display = "block";// muestra el listado "elegir" despues de dar vuelta las cartas.

}

function girar_carta(carta){//para que queden las imagenes fijas y no se den vuelta cuando se elige el valor
   
    if (tablero[carta] == '') {
        document.getElementById(carta).src = "images/7.jpg";
    }
    if (tablero[carta] == 'x') {
        document.getElementById(carta).src = "images/0.jpg";
    }
    if (tablero[carta] == 'y') {
        document.getElementById(carta).src = "images/4.jpg";
    }
}
