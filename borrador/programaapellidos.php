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


/** 
 * Esta funcion muestra ejemplos de partidas
 *@return array
 */
    function cargarPartidas (){
    //INT $i, array $ejemploPartidas
    $cantPart=10;
    $ejemploPartidas[0]= ["palabraWordix "=> "QUESO" , "jugador" => "maria", "intentos"=> 0, "puntaje" => 0];
    $ejemploPartidas[1]= ["palabraWordix "=> "MUJER" , "jugador" => "luis", "intentos"=> 1, "puntaje" => 15];
    $ejemploPartidas[2]= ["palabraWordix "=> "SILLA" , "jugador" => "micaela", "intentos"=> 3, "puntaje" => 13];
    $ejemploPartidas[3]= ["palabraWordix "=> "LIBRO" , "jugador" => "valeria", "intentos"=> 6, "puntaje" => 10];
    $ejemploPartidas[4]= ["palabraWordix "=> "FUEGO" , "jugador" => "rocio", "intentos"=> 0, "puntaje" => 0];
    $ejemploPartidas[5]= ["palabraWordix "=> "CASAS" , "jugador" => "maria", "intentos"=> 4, "puntaje" => 13];
    $ejemploPartidas[6]= ["palabraWordix "=> "RASGO" , "jugador" => "pablo", "intentos"=> 1, "puntaje" => 16];
    $ejemploPartidas[7]= ["palabraWordix "=> "VERDE" , "jugador" => "maximo", "intentos"=> 0, "puntaje" => 0];
    $ejemploPartidas[8]= ["palabraWordix "=> "MELON" , "jugador" => "federico", "intentos"=> 5, "puntaje" => 10];
    $ejemploPartidas[9]= ["palabraWordix "=> "RATAS" , "jugador" => "abril", "intentos"=> 2, "puntaje" => 16];
    $ejemploPartidas[10]= ["palabraWordix "=> "TINTO" , "jugador" => "lucas", "intentos"=> 4, "puntaje" => 13];
    for($i = 0;  $i < $cantPart;  $i++){ 
        echo "partidas: \n " . ($i+1)  . $ejemploPartidas[$i]["palabrawordix "]  .  $ejemploPartidas[$i]["jugador"] .
         $ejemploPartidas[$i]["intentos"] . $ejemploPartidas[$i]["puntaje"]. "\n";
    }
    return $ejemploPartidas;
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



/*
do {
    $opcion != 8;

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
            //Jugar al wordix con una palabra elegida
            echo "Ingrese su usuario: \n";
                $usuario = trim(fgets(STDIN));
            echo "Ingrese u número";
            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

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
} while ($opcion != 8);
*/


 cargarPartidas();
   