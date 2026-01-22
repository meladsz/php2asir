<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Funciones 2</title>
  </head>
  <body>

<?php
// programa q una funcion recibe 3 numeros aleatorios, imprime la suma de los tres parametros
function funcsuma($paranum1, $paranum2, $paranum3) {
     echo "La suma de $paranum1 + $paranum2 + $paranum3 = " . ($paranum1 + $paranum2 + $paranum3); } 
// programa principal
$num1= rand(1,10);
$num2 = rand(1,10);
$num3 = rand(1,10);
funcsuma($num1, $num2, $num3);

// programa que calcule la potencia de dos numeros
// base y exponente
?>