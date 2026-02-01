<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Array Parte 2</title>
  </head>
  <body>

<?php
// $cadeMayu = strtoupper($cade);
// $cadereve = strrev($cadequit);
// strcmp
// mostrar 5 numeros aleatorios no repetidos
$nume = array();
$sacadas = 5;
$min = 1;
$max = 12;
$posi = 0;
$rep = false; 

while ($posi < $sacadas) {
  
    $nume[$posi] = rand($min, $max);

    $rep = false;   // ← REINICIAR bandera
    $reco = 0;      // ← REINICIAR recorrido

    // Comprobar repetidos
    while ($reco < $posi) {
        if ($nume[$posi] == $nume[$reco]) {
            $rep = true; 
        }
        $reco++;
    }

    // Si no está repetido, avanzar
    if ($rep == false) { 
        echo "Aleatorio = " . $nume[$posi] . "<br>";
        $posi++;
    }
}


?>
