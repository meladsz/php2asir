// practica
//Defina un vector con los numeros \[3, 5, 7, 9, 11]\.
//Calcule la suma de todos los elementos del vector.
//Imprima el resultado en pantalla.

<?php
$vector1 = [3, 5, 9, 11, 17]; // Ejemplo numero impares

foreach ($vector1 as $numero) {
    if ($numero % 2 != 0) {
        echo "$numero es impar <br>";
    }
}
?>

<?php
$vector1 = [10, 20, 30, 40, 50];
$vector2 = []; // Nuevo vector
// Recorremos $vector1 y multiplicamos cada elemento por 2
foreach ($vector1 as $numero) {
    $vector2[] = $numero * 2;
}
// Imprimimos el nuevo vector
print_r($vector2);
?>


<?php
$vector1 = [3, 6, 9, 12, 15];
$vector2 = []; //multiplos de 3

foreach ($vector1 as $numero) {
    if ($numero % 3 == 0) { 
        $vector2[] = $numero;
    }
}

print_r($vector2);
?>

<?php
$vector = [10, 20, 30, 40, 50]; // Definimos el vector
$suma = array_sum($vector); // Usamos array_sum() para sumar los elementos
echo "La suma es: " . $suma; // Mostramos el resultado
?>

<?php
$vector1 = [5,10,15,20,25]; //Multiplique cada numero del vector por 2.
$vector2 = [];
foreach ($vector1 as $numero) {
    $vector2[] = $numero * 2;
}
print_r($vector2);
?>

<?php
$vector1 = [1,2,3,4,5]; // Suma y divide por la cantidad de elementos
$promedio = array_sum($vector1) / count($vector1); 

echo "El promedio es: " . $promedio; 
?>

<?php
$maxcol = 5;
$maxfil = 5;

for ($fil = 0; $fil < $maxfil; $fil++) {
    for ($col = 0; $col < $maxcol; $col++) {
        echo "*";
    }
    echo "<br>";
}
?>

<?php
$maxfilas = 5;
$maxcols = 5;

for ($fila = 0; $fila < $maxfilas; $fila++) {
    for ($colu = 0; $colu < ($maxfilas - $fila); $colu++) { 
        echo "*";
    }
    echo "<br>"; 
}
?>

<?php
$maxcol = 5;
$maxfil =5;
for ($fil = 0; $fil < $maxfil; $fil++) {
    for ($colu = 0; $colu < $fil + 1; $colu++) {
        echo "*";
    }
    echo "<br>";
}
?>

<?php
$maxfilas = 5;
$maxcols = 6;

for($fila = 0; $fila <= $maxfilas;$fila++)
{
    for($gui = 0; $gui < $fila; $gui++)
    {
        echo "_";
    }

    for($aste = 0; $aste < $maxcols - $fila; $aste++)
    {
        echo "*";
    }
    echo "<br>";
}
?>

