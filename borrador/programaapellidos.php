<?php
include_once("wordix.php");

//// hola

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
function datosPartida(){


}

/** Una función que dada una colección de par das y el nombre de un jugador, retorne el índice de la primer
 *par da ganada por dicho jugador. Si el jugador ganó ninguna par da, la función debe retornar el valor-1.
 *(debe u lizar las instrucciones vistas en la materia, no u lizar funciones predefinidas de php).
 * 
 */
function primerPartidaGanada(){


}

/**Una función solicitarJugador sin parámetros formales que solicite al usuario el nombre de un jugador y
 retorne el nombre en minúsculas. La función debe asegurar que el nombre del jugador comience con una
 letra. (Utilice funciones predefinidas de string).
 * 
 */

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



/*
do {
    $opcion = ...;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
            //...
    }
} while ($opcion != X);
*/
