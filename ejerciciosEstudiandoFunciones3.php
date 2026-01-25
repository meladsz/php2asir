<?php
// 2 numeros sumarlos y devolver el resultado NIVEL 1 CALCULADORA
function sumas($numero1, $numero2) {
    $resultado = $numero1 + $numero2;
    return $resultado;
}
// programa principal
$numero1 = rand(1,10);
$numero2 = rand(1,10);
echo "Número 1:" . $numero1;
echo "Número 2:" . $numero2;
echo "Resultado:" . sumas($numero1,$numero2);

// Sumarlos si el primer número es mayor o igual que el segundo
// Restarlos si el primer número es menor que el segundo 
// NIVEL 2 CALCULADORA
function sumaresta($numero1,$numero2) {
    if ($numero1 >= $numero2) {
        return $numero1 + $numero2;
    }
    else {
        return $numero1 - $numero2;
    }
}

// programa principal
$numero1 = rand(1,10);
$numero2 = rand(1,10);
echo "Número 1:" . $numero1;
echo "Número 2:" . $numero2;
echo "Resultado:" . sumaresta($numero1,$numero2);

// Guarda las operaciones en un array: "+", "-", "*"
// Elige una operación aleatoria del array NIVEL 4

function minicalculadora($numero1, $numero2, $operador) {
    if ($operador == "+") {
        return $numero1 + $numero2;
    } 
    elseif ($operador == "-") {
        return $numero1 - $numero2;
    } 
    else {
        return $numero1 * $numero2;
    }
}

// programa principal
$numero1 = rand(1,10);
$numero2 = rand(1,10);
$operaciones = array("+", "-", "*");

// elegir operación aleatoria
$pos = rand(0, 2);
$operador = $operaciones[$pos];

echo "Número 1: " . $numero1 . "<br>";
echo "Número 2: " . $numero2 . "<br>";
echo "Operación: " . $operador . "<br>";
echo "Resultado: " . minicalculadora($numero1, $numero2, $operador);


?>