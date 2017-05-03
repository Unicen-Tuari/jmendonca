    'use strict'
    window.onload = function() {
        var inputs = document.getElementById('btn-select').getElementsByTagName('input');
     
        inputs[0].checked = true;//cuando recargo la pag me deja la piedra fija

        var lista = [   {nombre:'Piedra',url:'img/piedra.png'},
                        {nombre:'Papel',url:'img/papel.png'},
                        {nombre:'Tijera',url:'img/tijera.png'}  ];
//var global

        var seleccion = 0;
        var partida = 0;
        var ganador = "";
    
        
        document.getElementById("btn-jugar").onclick = jugar;

        function jugar() {
            partida++;
            var tiro = Math.floor(Math.random() * 3) + 1;
            tiro--; 
            document.getElementById("img-ordenador").src = lista[tiro].url;
                    
            if(lista[tiro].nombre === lista[seleccion].nombre) {
                ganador = "Empate";
                jugadas();
                return "Empate";
            }else{               
                if(lista[tiro].nombre === 'Piedra'){
                    if(lista[seleccion].nombre === 'Tijera'){
                        ganador = "Gana Computadora";
                        jugadas();
                        return "Gana Computadora";
                        
                    }else{
                        ganador = "Gana Jugador";
                        jugadas();
                        return "Gana Jugador";
                    }
                } 
                if(lista[tiro].nombre === 'Tijera'){
                    if(lista[seleccion].nombre === 'Papel'){
                        ganador = "Gana Computadora";
                        jugadas();
                        return "Gana Computadora";
                    }else{
                        ganador = "Gana Jugador";
                        jugadas();
                        return "Gana Jugador";
                    }
                } 
                if(lista[tiro].nombre === 'Papel'){
                    if(lista[seleccion].nombre === 'Piedra'){
                        ganador = "Gana Computadora";
                        jugadas();
                        return "Gana Computadora";
                    }else{
                        ganador = "Gana Jugador";
                        jugadas();
                        return "Gana Jugador";
                    }
                } 
            }
        }    

        function jugadas(){
            // Find a <table> element with id="myTable":
            var table = document.getElementById("Partidas");

            // Create an empty <tr> element and add it to the 1st position of the table:
            var row = table.insertRow(0);

            // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);

            // Add some text to the new cells:
            cell1.innerHTML = partida;
            cell2.innerHTML = ganador;
        }

        document.getElementById("btn-select").onclick = imagenSwap;
       
        function imagenSwap() {    
            /*for (var i = 0; i < inputs.length; i++) {
                console.log(inputs[i].checked)                             
            } muestra la propiedad que cambia con el onclick*/ 
            /*log(inputs)*/
            for (var i = 0; i < inputs.length; i++) {
                if(inputs[i].checked){//si esta checkeado
                    seleccion = i;
                    document.getElementById("img-jugador").src = lista[i].url;
                }                              
            }           
        }
 
};
        



