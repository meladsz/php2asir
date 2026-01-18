<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Array Parte 4</title>
  </head>
  <body>

<?php
// repasar matriz de 3
// repasar cartas jugadores 1,2,3 y guardar en fichero
// REPASAR FORMULARIOS
// mirar sesiones 
// Preparar número de cartas
$num_cartas = 2;

// Jugador 1
for ($i = 0; $i < $num_cartas; $i++) {
    $jug1val[$i] = rand(1, 12);      // valor de la carta
    $jug1palo[$i] = rand(1, 4);      // palo numérico
}

// Asignar palo como letra (o, c, e, b) después del for
for ($i = 0; $i < $num_cartas; $i++) {
    if ($jug1palo[$i] == 1) {
        $jug1palo[$i] = "o"; // oros
    }
    if ($jug1palo[$i] == 2) {
        $jug1palo[$i] = "c"; // copas
    }
    if ($jug1palo[$i] == 3) {
        $jug1palo[$i] = "e"; // espadas
    }
    if ($jug1palo[$i] == 4) {
        $jug1palo[$i] = "b"; // bastos
    }
}

// Jugador 2
for ($i = 0; $i < $num_cartas; $i++) {
    $jug2val[$i] = rand(1, 12);
    $jug2palo[$i] = rand(1, 4);
}

// Asignar palo como letra
for ($i = 0; $i < $num_cartas; $i++) {
    if ($jug2palo[$i] == 1) {
        $jug2palo[$i] = "o";
    }
    if ($jug2palo[$i] == 2) {
        $jug2palo[$i] = "c";
    }
    if ($jug2palo[$i] == 3) {
        $jug2palo[$i] = "e";
    }
    if ($jug2palo[$i] == 4) {
        $jug2palo[$i] = "b";
    }
}

// Mostrar cartas con imágenes
echo "<h3>Jugador 1</h3>";
for ($i = 0; $i < $num_cartas; $i++) {
    $ruta = "imagencarta/" . $jug1val[$i] . $jug1palo[$i] . ".jpg";
    echo "<img src='$ruta' width='120'><br>";
    echo "Carta: {$jug1val[$i]}{$jug1palo[$i]}<br><br>";
}

echo "<h3>Jugador 2</h3>";
for ($i = 0; $i < $num_cartas; $i++) {
    $ruta = "imagencarta/" . $jug2val[$i] . $jug2palo[$i] . ".jpg";
    echo "<img src='$ruta' width='120'><br>";
    echo "Carta: {$jug2val[$i]}{$jug2palo[$i]}<br><br>";
}
?>