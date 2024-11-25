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
 * @return array $coleccionPalabras
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
 * @return array $coleccionPartidas
 */
function cargarPartidas() {

        $coleccionPartidas[0] = ["palabraWordix"=> "QUESO" , "jugador" => "pau", "intentos"=> 0, "puntaje" => 0];
        $coleccionPartidas[1] = ["palabraWordix"=> "CASAS" , "jugador" => "alex", "intentos"=> 3, "puntaje" => 14];
        $coleccionPartidas[2] = ["palabraWordix"=> "QUESO" , "jugador" => "agus", "intentos"=> 6, "puntaje" => 10];
        $coleccionPartidas[3] = ["palabraWordix"=> "SILLA" , "jugador" => "alejo", "intentos"=> 4, "puntaje" => 12];
        $coleccionPartidas[4] = ["palabraWordix"=> "FUEGO" , "jugador" => "pau", "intentos"=> 2, "puntaje" => 12];
        $coleccionPartidas[5] = ["palabraWordix"=> "YUYOS" , "jugador" => "alex", "intentos"=> 6, "puntaje" => 12];
        $coleccionPartidas[6] = ["palabraWordix"=> "RASGO" , "jugador" => "agus", "intentos"=> 1, "puntaje" => 16];
        $coleccionPartidas[7] = ["palabraWordix"=> "NAVES" , "jugador" => "linda", "intentos"=> 4, "puntaje" => 14];
        $coleccionPartidas[8] = ["palabraWordix"=> "QUESO" , "jugador" => "valen", "intentos"=> 6, "puntaje" => 0];
        $coleccionPartidas[9] = ["palabraWordix"=> "NEGRO" , "jugador" => "pau", "intentos"=> 4, "puntaje" => 13];
        $coleccionPartidas[10] = ["palabraWordix"=> "CASAS" , "jugador" => "angela", "intentos"=> 3, "puntaje" => 14];

    return $coleccionPartidas;
}

/**
 * funcion que muestra una serie de opciones para que el usuario elija, retorna la opcion seleccionada.
 * @return int $opcion
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
    echo " - elija una opcion -  \n";
    $opcion = trim(fgets(STDIN));
    return $opcion;
}

/**
 * funcion que recibe como parametros: un arreglo multidimensional de partidas y un numero; muestra en pantalla los datos 
 * de la partida junto con el numero de partida y en cuantos intentos el jugador adivino la palabra, en caso de no adivinar 
 * tambien lo muestra en pantalla.
 * @param array $cargarPartidas
 * @param int $nro
 */
function datosPartida($cargarPartidas, $nro) {
    echo "Partida WORDIX ".$nro.": palabra ".$cargarPartidas[$nro-1]["palabraWordix"]."\n";
    echo "Jugador: ".$cargarPartidas[$nro-1]["jugador"]. " \n";
    echo "Puntaje: ".$cargarPartidas[$nro-1]["puntaje"]." puntos \n";

        if ($cargarPartidas[$nro-1]["intentos"] == 0){
            echo "No adivinó la palabra \n";
        } else {
            echo "Adivinó la palabra en ".$cargarPartidas[$nro-1]["intentos"]." intentos \n";
        }
}

/** 
 * funcion que recibe como parametros: un arreglo indexado de palabras y una palabra nueva, revisa si dicha palabra se encuentra 
 * o no en el arreglo, de no encontrarse la agrega al arreglo y lo retorna actualizado.
 * @param array $coleccionPalabras
 * @param string $palabraNueva
 * @return array $coleccionPalabras
 */
function agregarPalabra($coleccionPalabras, $palabraNueva) { 

    if (!in_array($palabraNueva, $coleccionPalabras)) { ///in_array: comprueba si un valor existe en un array
        $coleccionPalabras[] = $palabraNueva;
        echo "La palabra se agrego correctamente \n";
    } else {
        echo "La palabra ya esta en la coleccion \n"; 
    }

    return $coleccionPalabras;
}

/**
 * funcion recibe como parametros: un arreglo multidimensional de partidas y el nombre de un jugador, y retorna el indice de la primer
 * partida ganada por dicho jugador. Si el jugador ganó ninguna partida, retorna el valor -1. 
 * @param array $coleccionPartidas
 * @param string $jugador
 * @return int $ganada
 */
function primerPartidaGanada($coleccionPartidas, $usuario) {
    $ganada = -1;

    foreach ($coleccionPartidas as $indice => $partida) {

        if ($partida["jugador"] == $usuario && $partida["puntaje"] > 0) {
            $ganada = $indice; // Retorna el índice de la primera partida ganada
        }
    }
        return $ganada;
}

/** 
 * funcion que almacena el resumen de un jugador que tendrá los siguientes datos: jugador, 
 * partidas,puntaje, victorias, intento1, intento2, intento3, intento4, intento5, intento6.
 * @param array $coleccionPartidas
 * @param string $nombreJugado
 * @return array $resumen
 */
 function resumenJugador($coleccionPartidas, $nombreJugador) {
    //int $n, $i, $intento1, $intento2, $intento3, $intento4, $intento5, $intento6, $victorias, $partidas, $puntaje;
    //array $resumen;
    $partida=$coleccionPartidas;
    $n = count($partida);  //count: cuenta todos los elementos de un array o algo de un objeto
    $i = 0;
    $intento1 = 0;
    $intento2 = 0;
    $intento3 = 0;
    $intento4 = 0;
    $intento5 = 0;
    $intento6 = 0;
    $victorias = 0;
    $porcent = 0;
    $totalPartidas = 0;
    $puntaje = 0;
    $resumenJugador = [];

    for ($i = 0; $i < $n ; $i++) { 
        if ($partida[$i]["jugador"] == $nombreJugador) {
            $totalPartidas++;
            $puntaje = $puntaje + $partida[$i]["puntaje"];
            if ($partida[$i]["puntaje"] > 0) {
                $victorias++;
            }

            switch ($partida[$i]["intentos"]) {
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

    $porcent= (INT)(($victorias*100)/$n);
    $resumenJugador = ["jugador" => $nombreJugador, "partidas" => $totalPartidas, "puntaje" => $puntaje,
                        "victorias" => $victorias, "porcentaje" => $porcent, "intento1" => $intento1, 
                        "intento2" => $intento2, "intento3" => $intento3,"intento4" => $intento4,
                        "intento5" => $intento5,"intento6" => $intento6,
                        ];

        return $resumenJugador;
    
}

/**
 * función que solicita al usuario el nombre de un jugador y retorna el nombre en minúsculas,
 * tambien se asegura que el nombre del jugador este compuesto solo por letras.
 * @return string $nomJugador
 */
function solicitarJugador() {
    do { 
        echo "Ingrese su nombre: \n";
        $nomJugador = strtolower(trim(fgets(STDIN))); /// strtolower: convierte un string a minúsculas

            if (esPalabra($nomJugador) == false) {
                echo "Nombre de usuario no válido \n";
            }

        } while (esPalabra($nomJugador)!=true);

        return $nomJugador;
} 

/**
 * funcion que recibe como parametro una colección de partidas  y muestra dicha coleccion ordenada
 * por el nombre del jugador y por la palabra.
 * @param array $coleccionPartidas
 */
function partidasOrdenadas($coleccionPartidas) {
    uasort($partidas, 'compararPartidas');
    print_r($partidas);
}

/**
 * funcion que dadas 2 opciones las compara, si son iguales retorna "0" si una es menor que la otra retorna "-1
 * @param array $partidaUno
 * @param array $partidaDos
 * @return array
 */
function compararPartidas($partidaUno, $partidaDos) {
    if ($partidaUno["jugador"] == $partidaDos["jugador"]) {
      if ($partidaUno["palabraWordix"] == $partidaDos["palabraWordix"]) {
        $orden = 0;
      } else {
        $orden = ($partidaUno["palabraWordix"] < $partidaDos["palabraWordix"]) ? -1 : 1;
      }
    } else {
      $orden = ($partidaUno["jugador"] < $partidaDos["jugador"]) ? -1 : 1;
    }
    return $orden;
  }
  

/**
 * funcion que recibe como parametros: el nombre del jugador, una palabra y el historial del jugador,
 * la funcion identifica si el usuario ya jugo con esa palabra antes.
 * @param string $nombre
 * @param string $palabra
 * @param array $historial
 * @return boolean $encontrada
 */
function palabraRepetida($nombre, $palabra, $historial) {
            
    $encontrada = false;

    foreach( $historial as $partida) {

        if ($partida["jugador"] == $nombre && $partida["palabraWordix"] == $palabra) {
            $encontrada = true;
        }
        
    }
    return $encontrada;
}

/**
 * funcion que recibe como parametros una coleccion de partidas y un jugador, llama a la funcion resumenJugador
 * y muestra en pantalla el resumen de dicho jugador.
 * @param array $coleccionPartidas
 * @param string $jugador
 */
function mostrarResumen($coleccionPartidas, $jugador) {

    $resumen = (resumenJugador($coleccionPartidas, $jugador)); 
    echo "Jugador: " . $jugador . "\n"; 
    echo "Partidas: " . $resumen["partidas"] . "\n";
    echo "Puntaje: ". $resumen["puntaje"] . "\n";
    echo "Victorias: " . $resumen["victorias"] . "\n";
    echo "Porcentaje: " . $resumen["porcentaje"] . "% \n";
    echo "Intento 1: " . $resumen["intento1"] . "\n";
    echo "Intento 2: " . $resumen["intento2"] . "\n";
    echo "Intento 3: " . $resumen["intento3"] . "\n";
    echo "Intento 4: " . $resumen["intento4"] . "\n";
    echo "Intento 5: " . $resumen["intento5"] . "\n";
    echo "Intento 6: " . $resumen["intento6"] . "\n";

}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:
/** 
 * int $opcionIngresada, $num, $max, $nro, $numeroPartida, $valor
 * string $usuario, $palabraN, $word, $palabraR
 * array $coleccionPalabras, $partidas, $nuevaPartida, $resumen
 */ 

//Inicialización de variables:

$coleccionPalabras = cargarColeccionPalabras();
$partidas = cargarPartidas(); 

//Proceso:

do {

    $opcionIngresada =  seleccionarOpcion();

    switch ($opcionIngresada) {
        case 1: // Jugar al wordix con una palabra elegida    
            $usuario = solicitarJugador();
            $max = count($coleccionPalabras); /// count: cuenta todos los elementos de un array o algo de un objeto
                do {
                    $num = solicitarNumeroEntre(1, $max);
                    $word = $coleccionPalabras[$num-1];
                    $palabraR = palabraRepetida($usuario, $word, $partidas);
                        if ($palabraR == true) {
                            echo "Ya jugaste con esta palabra \n";
                        } 
                } while ($palabraR == true);
            $nuevaPartida = jugarWordix($coleccionPalabras[$num - 1], $usuario);   
            $partidas[] = $nuevaPartida;
            break;

        case 2: // Jugar al wordix con una palabra aleatoria
            $usuario = solicitarJugador();
            $max = count($coleccionPalabras); /// count: cuenta todos los elementos de un array o algo de un objeto
               do {
                    $nro = rand(0, $max-1); /// rand: genera un número entero aleatorio
                    $word = $coleccionPalabras[$nro-1];
                    $palabraR = palabraRepetida($usuario, $word, $partidas);
               } while ($palabraR == true);
            $nuevaPartida = jugarWordix($coleccionPalabras[$nro], $usuario);
            $partidas[] = $nuevaPartida;
            break;

        case 3: //Mostrar una partida 
            $numeroPartida = solicitarNumeroEntre(1, count($partidas));
            datosPartida($partidas, $numeroPartida - 1);
            break;

        case 4: //Mostrar la primer partida ganadora
            $usuario = solicitarJugador();
            $valor = primerPartidaGanada($partidas, $usuario);
                if($valor == -1) {
                    echo "El jugador ".$usuario." no gano ninguna partida \n";
                } else {
                echo "Su primer partida ganada es la número: ".$valor."\n";
                }
            break;

        case 5 : //Mostrar resumen de un jugador
            $usuario = solicitarJugador();
            mostrarResumen($partidas, $usuario);
            break;

        case 6:  //Mostrar listado de partidas ordenadas por jugador y por palabra
            partidasOrdenadas($partidas);
            break;

        case 7: //Agregar una palabra de 5 letras a Wordix
            $palabraN = leerPalabra5Letras();     
            $coleccionPalabras = agregarPalabra($coleccionPalabras,$palabraN);
           /// Falta verificar si funciona al 100%
            break;

        case 8: ///salir
            break;  

        default: 
            echo "Ingrese una opción válida.";
            break;    
    }

} while($opcionIngresada!=8);
?>