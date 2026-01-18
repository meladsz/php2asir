<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Array Parte 3</title>
  </head>
  <body>

<?php
// mostrar grafico de todas las temperaturas del mes, de todos los meses del año

$temperaturas = array();   // vector principal

for ($anio = 2020; $anio <= 2025; $anio++) {

    echo "<h2>Año $anio</h2>";

for ($mes = 1; $mes <= 12; $mes++) {

    $dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anio);

    echo "<h3>Mes $mes</h3>";

for ($dia = 1; $dia <= $dias; $dia++) {

    // Crear array del día
    $temperaturas[$anio][$mes][$dia] = array();

for ($hora = 0; $hora < 24; $hora++) {

for ($min = 0; $min < 60; $min++) {

    // Temperatura aleatoria
    $temp = rand(-2, 44);

    // Guardar en el vector
    $temperaturas[$anio][$mes][$dia][$hora][$min] = $temp;

    // Mostrar
    echo "Día $dia - $hora:$min → $temp ºC<br>";
}
}

echo "<br>";
}
echo "<hr>";
}
}
// vectores de 3 dimensiones o más 
// ejercicio de cartas
?>