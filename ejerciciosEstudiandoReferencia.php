<?php
// NIVEL 0 
// Crea una función que reciba un número por referencia y le sume 1.
// Luego imprime el número fuera de la función para ver que ha cambiado.
function nivelCero(&$num) {    
    $num += 1;
}
// programa principal
$num = 5;
nivelCero($num);
echo $num;

// NIVEL 1 
// Crea una función que reciba dos números por referencia y los intercambie.
// Luego imprime los números fuera de la función para comprobar que han cambiado.
function nivelUno(&$num1, &$num2) {
    $i = $num1;
    $num1 = $num2;
    $num2 = $i;
}

// programa principal
$num1 = 1;
$num2 = 2;
nivelUno($num1,$num2);
echo $num1 . "<br>";
echo $num2;

?>