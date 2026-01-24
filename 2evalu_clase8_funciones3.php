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

?>
