<?php
// NIVEL 1
// Cree un array vacío
//Rellene el array con 15 números aleatorios entre 50 y 100
// Muestre todos los números del array, uno por línea
$numero = array();
for ($i = 0; $i < 15; $i++) {
    $numero[$i] = rand(50,100);
    echo "Numero:" . $numero[$i] . "<br>";
}


// NIVEL 2
// Rellena un array de 15 números aleatorios entre 50 y 100
// Cuenta cuántos números del array son mayores que 80 y muestralo.
$numero = array();
$contador = 0;
for ($i = 0; $i < 15; $i++) {
    $numero[$i] = rand(50,100);

if ($numero[$i] > 80) {
    $contador++;
} 
    echo "Numero:" . $numero[$i] . "<br>";
}
    echo "Mayores que 5:" . $contador . "<br>";


// NIVEL 3
// Rellena un array de 5 números aleatorios entre 1 y 20
// Muestra todos los números
// Muestra cuál es el número mayor
$numero = array();
$mayor = 0;

for ($i = 0; $i < 5; $i++) {
    $numero[$i] = rand(1,20);
    echo "Numero: " . $numero[$i] . "<br>";

    if ($numero[$i] > $mayor) {
        $mayor = $numero[$i];
    }
}

echo "El mayor es: " . $mayor;


// NIVEL 4
// Rellene el array con 5 números aleatorios entre 1 y 20
// Mostrar el mayor y el menor
$numero = array();
$numero[0] = rand(1,20);
$mayor = $numero[0];
$menor = $numero[0];

echo "Numero: " . $numero[0] . "<br>";

for ($i = 1; $i < 5; $i++) {
    $numero[$i] = rand(1,20);
    echo "Numero: " . $numero[$i] . "<br>";

    if ($numero[$i] > $mayor) {
        $mayor = $numero[$i];
    }

    if ($numero[$i] < $menor) {
        $menor = $numero[$i];
    }
}

echo "El mayor es: " . $mayor . "<br>";
echo "El menor es: " . $menor;

?>