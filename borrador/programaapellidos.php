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
