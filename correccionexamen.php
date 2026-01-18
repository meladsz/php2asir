<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ejemplo PHP</title>
  </head>
  <body>

<?php
// EJERCICIO 1
$dife = abs($anch - $alto); // Corrección: sin 'num:' y con variables bien escritas

if ($dife < 20) {
    $colo = "blue";
} elseif ($dife < 50) {
    $colo = "yellow";
} else {
    $colo = "red";
}

echo "Color asignado: $colo";


// EJERCICIO 2
// Mostrar todas las cartas 
for ($Palo = 1; $Palo <= 4; $Palo++) {

    if ($Palo == 1) {
        $PaloLetr .= "o"; // oros
    } elseif ($Palo == 2) {
        $PaloLetr .= "c"; // copas
    } elseif ($Palo == 3) {
        $PaloLetr .= "e"; // espadas
    } elseif ($Palo == 4) {
        $PaloLetr .= "b"; // bastos
    }
}

// EJERCICIO 3
$NumeTotaPalo = 4;
$NumeTotaCart = 12;

// Primera carta
$ValoCar1 = rand(1, $NumeTotaCart);
$ValoPal1 = rand(1, $NumeTotaPalo);

do {
    // Segunda carta
    $ValoCar2 = rand(1, $NumeTotaCart);
    $ValoPal2 = rand(1, $NumeTotaPalo);

    // Tercera carta
    $ValoCar3 = rand(1, $NumeTotaCart);
    $ValoPal3 = rand(1, $NumeTotaPalo);

    // Inicializar repetición como falsa
    $CartRepe = FALSE;

    // Comprobar si hay cartas repetidas
    if (
        ($ValoCar1 == $ValoCar2 && $ValoPal1 == $ValoPal2) ||
        ($ValoCar1 == $ValoCar3 && $ValoPal1 == $ValoPal3) ||
        ($ValoCar2 == $ValoCar3 && $ValoPal2 == $ValoPal3)
    ) {
        $CartRepe = TRUE;
    }

} while ($CartRepe == TRUE);

// Mostrar las cartas
echo "Carta 1: $ValoCar1 de palo $ValoPal1<br>";
echo "Carta 2: $ValoCar2 de palo $ValoPal2<br>";
echo "Carta 3: $ValoCar3 de palo $ValoPal3<br>";

// EJERCICIO 4
if ($ValoCar1 > $ValoCar2) {
    echo "Gana jugador 1";
} else {
    if ($ValoCar1 == $ValoCar2) {
        if ($ValoPal1 < $ValoPal2) {
            echo "Gana jugador 1";
        } else {
            echo "Gana jugador 2";
        }
    } else {
        echo "Gana jugador 2";
    }
}

?>
