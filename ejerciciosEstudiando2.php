<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ejercicios para practicar</title>
  </head>
  <body>

<?php
// 5 tiradas y sumar cuanto sale al final  
$dados = array ();

for ($tir = 0; $tir < 5; $tir++) {
    $dados[$tir] = rand (1,6);
} 

echo "Resultados de los dados:";
for ($tir = 0; $tir < count($dados); $tir++) {
    echo "Dado " . ($tir + 1) . ": " . $dados[$tir] . "<br>";
}
// $suma = array_sum($dados);
$suma = $suma + $dados[$tir]; 
echo "<br>Suma total de los dados: " . $suma;

// 3 numeros en cada linea
$numeros = array(1, 2, 3);

for ($n = 0; $n < 3; $n++) {
    echo $numeros[$n] . "<br>";
}

// Crea un array con 4 colores.
// Muestra en pantalla solo el primer color y el último color.

$colores = array("rojo", "azul", "verde", "amarillo");

echo "Primer color: " . $colores[0] . "<br>";
echo "Último color: " . $colores[3];

// 5 numeros, mostrar los números que estén en posiciones pares.

$numeros = array(10, 20, 30, 40, 50);

for ($i = 0; $i < 5; $i++) {
    if ($i % 2 == 0) {
        echo $numeros[$i] . "<br>";
    }
}

// 6 numeros, números mayores que 3

$numeros = array(1,2,3,4,5,6);

for ($a = 0; $a < 6; $a++) {

if ($numeros[$a] > 3) {
  echo "Numero mayor que 3:" . $numeros[$a] . "<br>";
}
}

?>