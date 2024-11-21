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

     if($opcion > 8 || $opcion < 1) {
     echo "Ese número no corresponde a ninguna de las opciones, ingrese uno del 1-8";
    }

    
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
} while ($opcion != 8);
*/
