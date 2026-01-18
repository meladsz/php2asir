<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ejercicios para practicar</title>
  </head>
  <body>

<?php
// Vectores
/*
Declare un array con 3 animales.
Muestre por pantalla el primer, segundo y tercer elemento del array usando echo.
Muestra cuantos elementos tiene el array usando count().
*/

$animales = array("perro", "gato", "raton");

echo "Animal 1: " . $animales[0] . "<br>";
echo "Animal 2: " . $animales[1] . "<br>";
echo "Animal 3: " . $animales[2] . "<br>";

echo "<br>Total de animales: " . count($animales);

/*
Declare una variable $num_notas con el valor 4.
Use un bucle for para rellenar un array llamado $notas con 4 números aleatorios entre 1 y 10.
Muestra cada nota 
*/
$num_notas = 4;
$notas = array();

for ($n = 0; $n < $num_notas; $n++) {
    $notas[$n] = rand(1,10);
    echo "Notas " . ($n + 1) . ":" . $notas[$n] . "<br>"; 
}
/*
3 numeros de cartas.
array de palos con los valores "oros", "copas", "espadas" y "bastos"
hacer un bucle de cada posicion contenga un palo aleatorio
*/
$num_cartas = 3;
$cartas_palo = array();

for ($posi = 0; $posi < $num_cartas; $posi++) {

    $num_palo = rand(1, 4);

    if ($num_palo == 1) {
        $cartas_palo[$posi] = "oros";
    }
    if ($num_palo == 2) {
        $cartas_palo[$posi] = "copas";
    }
    if ($num_palo == 3) {
        $cartas_palo[$posi] = "espadas";
    }
    if ($num_palo == 4) {
        $cartas_palo[$posi] = "bastos";
    }

    echo "Carta " . ($posi + 1) . ": " . $cartas_palo[$posi] . "<br>";
}

/*
3 cartas con valores entre 1 y 12 y mostrar en pantalla.
si el valor es mayor que 9 es figura
*/
$numeroc = 3;
$valores = array ();

for ($n = 0; $n < $numeroc; $n++) {
    $valores [$n] = rand (1,12);

echo "saque" . ($n + 1) . "->". $valores [$n]; 

if ($valores[$n] > 9) {
    echo "figura";
}
echo "<br>";
}

/*
5 jugadores, mostrar cada jugador en la pantalla 
despues generar un numero aleatorio entre 0 y 4 para elegir el impostor
mostrar quien fue elegido como impostor
*/

$num_jugadores = 5;
$jugadores = array ("rojo", "azul", "verde", "amarillo", "rosa");

for ($jug = 0; $jug < $num_jugadores; $jug++) {
echo "Jugador " . ($jug + 1) . ": " . $jugadores[$jug] . "<br>";
}
$impostor = rand(0, $num_jugadores - 1);
echo "<br>El impostor es: " . $jugadores[$impostor];

?>
