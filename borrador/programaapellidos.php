<?php
include_once("wordix.php");



/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Lizarraga, Frescia. 5497. Tecnicatura Universitaria en Desarrollo Web. lizarragafrescia@gmail.com. fresciaabril */
/* López, Verónica. 5481. Tecnicatura Universitaria en Desarrollo Web. verolm2006@gmail.com. vero-1770 */


/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Obtiene una colección de palabras
 * @return array
 */
function cargarColeccionPalabras()
{
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "NEGRO", "LIBRO", "RATAS", "SILLA", "JABON",
    ];

    return ($coleccionPalabras);
}


/** Una función llamada cargarPartidas, que inicialice una estructura de datos con ejemplos de Partidas y que
 * retorne la colección de partidas descripta en la sección EXPLICACION 2. Mínimo debe cargar 10 partidas
* donde vayan variando los jugadores, las palabras, los intentos y los puntajes, en algunos casos los
 *jugadores se deben repetir.
 * 
 */
function cargarPartidas( ){


}






/** Unafunción que le pida al usuario ingresar una palabra de 5 letras, y retorne la palabra.
 * 
 */
function retornarPalabra(){


}


/**Una función que dado un número de partida,muestre en pantalla los datos de la partida como lo indica la
 sección EXPLICACIÓN 1
 * 
 */
    function mostrarDatosPartida(){
        //INT $numPart,
        echo "Ingrese un el numero de partida que desea ver: \n";
        $numPart=trim(fgets(STDIN));

    }



/** Una función que dada una colección de partidas y el nombre de un jugador, retorne el índice de la primer
 *partida ganada por dicho jugador. Si el jugador ganó ninguna partida, la función debe retornar el valor-1.
 *(debe utilizar las instrucciones vistas en la materia, no utilizar funciones predefinidas de php).
 * 
 */
    function primerPartidaGanada($coleccionPartidas, $nombre){
        //INT $primerPartG,$i
        $gano=-01;
        $i=0; //el i es la variable de numero de la coleccion
        $partGan=false;
        while ($partGan && $coleccionPartidas[$i]["ganadas"]!= 0)
        if($coleccionPartidas[$i]["nombre"] == $nombre){
            $gano="indice";
            
        }
        return $gano;
    }

/**Una función solicitarJugador sin parámetros formales que solicite al usuario el nombre de un jugador y
 retorne el nombre en minúsculas. La función debe asegurar que el nombre del jugador comience con una
 letra. (Utilice funciones predefinidas de string).
 * 
 */
    function solicitarJugador(){
        echo "Ingrese el nombre de un jugador ";
        $nomJugador=trim(fgets(STDIN));
        strtolower(string:$nomJugador);
    }

/* ****COMPLETAR***** */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

$partida = jugarWordix("MELON", strtolower("MaJo"));
//print_r($partida);
//imprimirResultado($partida);


/* Para visualizar el menú de opciones (que siempre es el mismo), una función seleccionarOpcion que
muestre las opciones del menú en la pantalla (ver sección EXPLICACION 1), le solicite al usuario una
opción válida (si la opción no es válida vuelva a solicitarla en la misma función hasta que la opción sea
válida), y retorne el número de la opción. La última opción del menú debe ser “Salir”. */
/*
/* Para visualizar el menú de opciones (que siempre es el mismo), una función seleccionarOpcion que
muestre las opciones del menú en la pantalla (ver sección EXPLICACION 1), le solicite al usuario una
opción válida (si la opción no es válida vuelva a solicitarla en la misma función hasta que la opción sea
válida), y retorne el número de la opción. La última opción del menú debe ser “Salir”. */

function seleccionarOpcion() {
    do {
         echo "Menú de opciones: \n";
     echo "1 - Jugar al wordix con una palabra elegida \n";
     echo "2 - Jugar al wordix con una palabra aleatoria \n";
     echo "3 - Mostrar una partida \n";
     echo "4 - Mostrar la primer partida ganadora \n";
     echo "5 - Mostrar resumen de Jugador \n";
     echo "6 - Mostrar listado de partidas ordenadas por jugador y por palabra \n";
     echo "7 - Agregar una palabra de 5 letras a Wordix \n";
     echo "8 - salir \n";
    
        $opcion = trim(fgets(STDIN)); 
    } while ($opcion != 8);

        return $opcion;
    }
    
    //// principal 

    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
            //Jugar al wordix con una palabra elegida
            echo "Ingrese su usuario: \n";
                $usuario = trim(fgets(STDIN));
            echo "Ingrese un número: \n";

        $min = 1;
        $max = count(cargarColeccionPalabras());

        solicitarNumeroEntre($min, $max);

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2
            echo "Ingrese su usuario: \n";
                $usuario = trim(fgets(STDIN));
            
            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        case 4:

            break;
        case 5 :

            break;
        case 6:
        
            break;
        case 7: 

            break;
        
            
    }

