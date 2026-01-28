<?php
// NIVEL 6
// Rellene el array con 5 números aleatorios entre 1 y 10
// Genere un número aleatorio entre 1 y 10
// Compruebe si ese número aparece en el array y en que posicion
$numero = array();
$encontrado = false;
$buscado = rand(1,10);

for ($i = 0; $i < 5; $i++) {
    $numero[$i] = rand(1,10);
    echo "Numero: " . $numero[$i] . "<br>";

    if ($numero[$i] == $buscado) {
        $encontrado = true;
        $posicion = $i;
    }
}

echo "Numero a buscar: " . $buscado . "<br>";

if ($encontrado == true) {
    echo "El numero aparece en la posicion: " . $posicion;
} else {
    echo "El numero no aparece en el array";
}

// NIVEL 6.1
// Rellene el array con 5 números aleatorios entre 1 y 10
// Compruebe si ese número aparece en el array
$numero = array();
$encontrado = false;
$buscado = rand(1,10);

for ($i = 0; $i < 5; $i++) {
    $numero[$i] = rand(1,10);
    echo "Numero: " . $numero[$i] . "<br>";

    if ($numero[$i] == $buscado) {
        $encontrado = true;
    }
}

echo "Numero a buscar: " . $buscado . "<br>";

if ($encontrado == true) {
    echo "El número aparece";
} else {
    echo "El número NO aparece";
}


// NIVEL 6.2
// Rellena un array de 5 números aleatorios entre 1 y 10
// Genera un número a buscar
// Muestra TODAS las posiciones donde aparece
$numero = array();
$buscado = rand(1,10);
$encontrado = false;

echo "Número buscado: " . $buscado . "<br><br>";

for ($i = 0; $i < 5; $i++) {
    $numero[$i] = rand(1,10);
    echo "Número [$i]: " . $numero[$i] . "<br>";

    if ($numero[$i] == $buscado) {
        echo "Aparece en la posición: " . $i . "<br>";
        $encontrado = true;
    }
}

if (!$encontrado) {
    echo "No aparece en el array";
}


// NIVEL 7 
// Rellenar un array de 5 posiciones con números aleatorios entre 1 y 10,
// NO puede aparecer el número 5.
$numeros = array();

for ($i = 0; $i < 5; $i++) {
    do {
        $numeros[$i] = rand(1,10);
    } while ($numeros[$i] == 5);

    echo "Numero: " . $numeros[$i] . "<br>";
}

?>