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
function suma($num1, $num2) {
    return $num1 + $num2;
}
function resta($num1, $num2) {
    return $num1 - $num2;
}
function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}
function division($num1, $num2) {
    return $num1 / $num2;
}

// programa principal
$num1 = rand(1,10);
$num2 = rand(1,10);
$operacion = "multiplicacion"; // nombre de la función

$resultado = $operacion($num1, $num2);

echo "<br> Número 1: " . $num1 . "<br>";
echo "Número 2: " . $num2 . "<br>";
echo "Operación: " . $operacion . "<br>";
echo "Resultado: " . $resultado;
?>
