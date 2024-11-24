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
 * funcion que utiliza un arreglo indexado para almacenar palabras, y retorna dicho arreglo.
 * @return array
 */
function cargarColeccionPalabras() {
    
    $coleccionPalabras = [
        "MUJER", "QUESO", "FUEGO", "CASAS", "RASGO",
        "GATOS", "GOTAS", "HUEVO", "TINTO", "NAVES",
        "VERDE", "MELON", "YUYOS", "PIANO", "PISOS",
        "NEGRO", "LIBRO", "RATAS", "SILLA", "JABON",
    ];

    return ($coleccionPalabras);
}

/** 
 * función que usa un arreglo multidimensional con una estructura de datos con ejemplos de partidas y retorna
 * dicho arreglo.
 * @return array
 */
function cargarPartidas() {
    $coleccionPartidas[0] = ["palabraWordix"=> "QUESO" , "jugador" => "pau", "intentos"=> 0, "puntaje" => 0];
    $coleccionPartidas[1] = ["palabraWordix"=> "CASAS" , "jugador" => "alex", "intentos"=> 3, "puntaje" => 14];
    $coleccionPartidas[2] = ["palabraWordix"=> "QUESO" , "jugador" => "agus", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[3] = ["palabraWordix"=> "SILLA" , "jugador" => "alejo", "intentos"=> 4, "puntaje" => 20];
    $coleccionPartidas[4] = ["palabraWordix"=> "FUEGO" , "jugador" => "pau", "intentos"=> 2, "puntaje" => 15];
    $coleccionPartidas[5] = ["palabraWordix"=> "YUYOS" , "jugador" => "alex", "intentos"=> 6, "puntaje" => 0];
    $coleccionPartidas[6] = ["palabraWordix"=> "RASGO" , "jugador" => "agus", "intentos"=> 1, "puntaje" => 15];
    $coleccionPartidas[7] = ["palabraWordix"=> "NAVES" , "jugador" => "linda", "intentos"=> 4, "puntaje" => 0];
    $coleccionPartidas[8] = ["palabraWordix"=> "QUESO" , "jugador" => "valen", "intentos"=> 6, "puntaje" => 10];
    $coleccionPartidas[9] = ["palabraWordix"=> "NEGRO" , "jugador" => "pau", "intentos"=> 4, "puntaje" => 0];
    $coleccionPartidas[10] = ["palabraWordix"=> "CASAS" , "jugador" => "angela", "intentos"=> 3, "puntaje" => 14];

    return $coleccionPartidas;
}

/**
 * funcion que muestra una serie de opciones para que el usuario elija, retorna la opcion seleccionada.
 * @return int
 */
function seleccionarOpcion() {
    echo " Menú de opciones: \n";
    echo "1 - Jugar al wordix con una palabra elegida \n";
    echo "2 - Jugar al wordix con una palabra aleatoria \n";
    echo "3 - Mostrar una partida \n";
    echo "4 - Mostrar la primer partida ganadora \n";
    echo "5 - Mostrar resumen de Jugador \n";
    echo "6 - Mostrar listado de partidas ordenadas por jugador y por palabra \n";
    echo "7 - Agregar una palabra de 5 letras a Wordix \n";
    echo "8 - Salir \n";
    
    $opcion = solicitarNumeroEntre(1, 8); 

    return $opcion;
}

/**
 * funcion que dado un arreglo de partidas y un numero, muetra en pantalla ese numero de partida
 * y en cuantos intentos el jugador adivino la palabra, en caso de no adivinar nunca tambien lo
 * muestra en pantalla.
 * @param array
 * @param int
 */
function datosPartida($cargarPartidas, $nro) {
    echo "Partida WORDIX ".$nro.": palabra ".$cargarPartidas[$nro-1]["palabraWordix"]."\n";
    echo "Jugador: ".$cargarPartidas[$nro-1]["jugador"]. " \n";
    echo "Puntaje: ".$cargarPartidas[$nro-1]["puntaje"]." puntos \n";

        if ($cargarPartidas[$nro-1]["intentos"]==0){
            echo "No adivinó la palabra \n";
        } else {
            echo "Adivinó la palabra en ".$cargarPartidas[$nro-1]["intentos"]." intentos \n";
        }
}

/** funcion que agrega una palabra nueva ingresada por el usuario a un arreglo de coleccion de palabras.
 * @param array
 * @param string
 * @return array
 */
function agregarPalabra($coleccionPalabras, $palabraNueva) { 

    if (!in_array($palabraNueva, $coleccionPalabras)) { ///in_array: comprueba si un valor existe en un array
        $coleccionPalabras[] = $palabraNueva;
    }

    return $coleccionPalabras;
}

/**
 * funcion que dada una coleccion de partidas y el nombre de algun jugador, retorna el indice de la primer
 * partida ganada por dicho jugador. Si el jugador ganó ninguna partida, retorna el valor -1. 
 */
function partidaGanada($coleccionPartida, $nombre) {
    //int $n, $i, $j;
    $n = count($coleccionPartida); /// count: cuenta todos los elementos de un array o algo de un objeto
    $i = 0;
    $j = -1;

    while ($i < $n && ($coleccionPartida[$i]["jugador"] != $nombre && $coleccionPartida[$i]["puntaje"] < 1)) {

        if ($coleccionPartida[$i]["puntaje"] > 0) {
            $j = $i;
        }

        $i++;
    }
        return $j;
}

/** 
 * funcion que almacena el resumen de un jugador que tendrá los siguientes datos: jugador, 
 * partidas,puntaje, victorias, intento1, intento2, intento3, intento4, intento5, intento6.
 * @param array
 * @param string
 * @return array 
 */
 function resumenJugador($partidas, $nombreJugador) {
    //int $n, $i, $intento1, $intento2, $intento3, $intento4, $intento5, $intento6, $victorias, $partidas, $puntaje;
    //array $resumen;
    $n = count($partidas); ///count: cuenta todos los elementos de un array o algo de un objeto
    $i = 0;
    $intento1 = 0;
    $intento2 = 0;
    $intento3 = 0;
    $intento4 = 0;
    $intento5 = 0;
    $intento6 = 0;
    $victorias = 0;
    $totalPartidas = 0;
    $nombre = $nombreJugador;
    $puntaje = 0;
    $resumen = [];

    for ($i=0; $i < $n ; $i++) { 
        if ($partidas[$i]["jugador"] == $nombre) {
            $totalPartidas++;
            $puntaje = $puntaje + $partidas[$i]["puntaje"];
            if ($partidas[$i]["puntaje"] > 0) {
                $victorias++;
            }

            switch ($partidas[$i]["intentos"]) {
                case 1:
                    $intento1++;
                    break;
                case 2:
                    $intento2++;
                    break;
                case 3:
                    $intento3++;
                    break;
                case 4:
                    $intento4++;
                    break;
                case 5:
                    $intento5++;
                    break;
                case 6:
                    $intento6++;
                    break;
                
            }
        }
    }

    $resumen = ["jugador" => $nombreJugador, "partidas" => $totalPartidas,
                "puntaje" => $puntaje, "victorias" => $victorias,
                "intento1" => $intento1, "intento2" => $intento2,
                "intento3" => $intento3,"intento4" => $intento4,
                "intento5" => $intento5,"intento6" => $intento6,
                ];

        return $resumen;
    
}

/**
 * función que solicita al usuario el nombre de un jugador y retorna el nombre en minúsculas,
 * tambien se asegura que el nombre del jugador este compuesto solo por letras.
 * @return string
 */
function solicitarJugador() {
    do { 
        echo "Ingrese su nombre: \n";
        $nomJugador = strtolower(trim(fgets(STDIN))); /// strtolower: convierte un string a minúsculas

            if (esPalabra($nomJugador)==false){
                echo "Nombre de usuario no válido \n";
            }

        } while (esPalabra($nomJugador)!=true);

        return $nomJugador;
} 

////  FALTA  Una función sin retorno que, dada una colección de partidas, muestre la colección de partidas ordenada
//// por el nombre del jugador y por la palabra. U lice la función predefinida uasort de php y print_r.

/**
 * funcion que identifica si el usuario ya jugo con esa palabra antes o si esta ingresando palabra
 * que ya esta en el arreglo de coleccion de palabras.
 * @param string
 * @param string
 * @param string
 * @return boolean 
 */
function palabraRepetida($nombre, $palabra, $historial) {
            
    $encontrada = false;

    foreach($historial as $partida) {

        if ($partida["jugador"] == $nombre && $partida["palabraWordix"] == $palabra) {
            $encontrada = true;
        }
        
    }

    return $encontrada;
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:

$coleccionPalabras = cargarColeccionPalabras();
$partidas = cargarPartidas(); 
$max = count($coleccionPalabras);
$limite = count($partidas);

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
