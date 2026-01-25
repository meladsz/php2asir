<?php
// hacer que la longitud de los asteriscos sea igual que el mensaje 

function mostrarAsteriscos($mensaje) {
    $longitud = strlen($mensaje);

    for ($i = 0; $i < $longitud; $i++) {
        echo "*";
    }
}

// programa principal
$mensaje = "Hola mundo";

echo $mensaje . "<br>";
mostrarAsteriscos($mensaje);

// programa que sea una pequeña calculadora, que reciba una operacion de 2 numeros sea multi, rest, sum,.. 
function calculadora($num1, $num2, $operacion) {
    if ($operacion == "+") {
        return $num1 + $num2;
    } elseif ($operacion == "-") {
        return $num1 - $num2;
    } elseif ($operacion == "*") {
        return $num1 * $num2;
    } elseif ($operacion == "/") {
        return $num1 / $num2;
    }
}

// programa principal
$num1 = rand(1,10);
$num2 = rand(1,10);
$operacion = "*";

echo "Número 1: " . $num1 . "<br>";
echo "Número 2: " . $num2 . "<br>";
echo "Operación: " . $operacion . "<br>";
echo "Resultado: " . calculadora($num1, $num2, $operacion);

?>
