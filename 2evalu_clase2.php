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
$contNoRe = 0;
$reco = 0;
$rep = "N";

while ($contNoRe < $sacadas) {
  
    $nume[$contNoRe] = rand($min, $max);

    $rep = "N";
    $reco = 0;

    // Comprobar repetidos
    while ($reco < $contNoRe) {
        if ($nume[$contNoRe] == $nume[$reco]) {
            $rep = "S";
        }
        $reco++;
    }

    // Si no está repetido, avanzar
    if ($rep == "N") {
        echo "Aleatorio = " . $nume[$contNoRe] . "<br>";
        $contNoRe++;
    }
}

?>