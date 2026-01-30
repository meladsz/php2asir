<?php
// PRACTICAR PARA CONSEGUIR HACER EL CLASE9_FUNCIONES4
// NIVEL INTERMEDIO TODA ESTA PAGINA 
// Crear una función que reciba un array de números y un número,
// devuelva true si el número está dentro del array y false si no lo está.
// Luego probar la función con un array de ejemplo.
function arrafun($arr, $num) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $num) {
            return true;
        }
    }
    return false;
}

// programa principal
$arr = array(6, 3, 8, 1);
$num = rand(1, 10);

$resultado = arrafun($arr, $num);

if ($resultado == true) {
    echo "Sí está el número: " . $num;
} else {
    echo "No está el número: " . $num;
}

// Crear una función que reciba un array de números y devuelva el número más grande
// Luego mostrar el resultado
function grandes($arr) {
    $mayor = $arr[0]; // empieza suponiendo que el primero es el mayor
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $mayor) {
            $mayor = $arr[$i]; // guardamos el número más grande encontrado
        }
    }
    return $mayor;
}

// programa principal
$arr = array(1, 6, 8, 2);
$resultado = grandes($arr);
echo "El número más grande es: " . $resultado;


// cuente cuántos números son mayores que 5
// Luego mostrar el resultado desde el programa principal.
function mayores($arr, $num) {
    $cont = 0; // inicializamos el contador
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $num) {
            $cont++;
        }
    }
    return $cont; // devolvemos cuántos números son mayores que $num
}

// programa principal
$arr = array(3, 7, 9, 4);
$num = 5;
$resultado = mayores($arr, $num);
echo "Hay " . $resultado . " números mayores que " . $num;


// array de números y un número dado
// cuente cuántos números en el array son menores que ese número
function menores($arr, $num) {
    $cont = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $num) {
            $cont++;
        }
    }
    return $cont;
}

// programa principal 
$num = 5;
$arr = array(5,2,6,7);
$resultado = menores($arr, $num);
echo "Hay " . $resultado . "menores que " . $num;


?>