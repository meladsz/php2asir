1️⃣ Contar pares e impares
2️⃣ Separar vector en positivos y negativos
3️⃣ Máximo, mínimo y posición (una posición)
4️⃣ Máximo, mínimo y todas las posiciones (duplicados)

1️⃣ Contar pares e impares
NIVEL 1 CONTAR PARES
<?php

$tam = 10; // tamaño del vector
$vector = array();
$pares = 0;

for ($i = 0; $i < $tam; $i++) {
    $vector[$i] = rand(1, 20);
    echo $vector[$i] . " ";

    if ($vector[$i] % 2 == 0) {
        $pares++;
    }
}
echo "<br>Cantidad de números pares: " . $pares;
?>


NIVEL 2 cuenta cuántos son pares, cuántos impares, cuántos positivos y cuántos negativos.
<?php
$tam = 10;
$vector = array();
$pares = 0;
$impares = 0;
$positivos = 0;
$negativos = 0;

echo "Vector: ";

for ($i = 0; $i < $tam; $i++) {
    $vector[$i] = rand(-10, 10);
    echo $vector[$i] . "<br> ";

    if ($vector[$i] % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }

    if ($vector[$i] > 0) {
        $positivos++;
    } else if ($vector[$i] < 0) {
        $negativos++;
    }
}

echo "<br>Pares: " . $pares;
echo "<br>Impares: " . $impares;
echo "<br>Positivos: " . $positivos;
echo "<br>Negativos: " . $negativos;

?>

2️⃣ Separar vector en positivos y negativos
NIVEL 1 Dado un vector de números aleatorios, crea un nuevo vector que contenga solo los positivos.
Muestra el vector original y el vector de positivos.
<?php
$tam = 10; 
$vector = array();
$positivos = array();

for ($i = 0; $i < $tam; $i++) {
    $vector[$i] = rand(-10, 10);
    echo $vector[$i] . " ";

    if ($vector[$i] > 0) {
        $positivos[] = $vector[$i];
    }
}

for ($i = 0; $i < count($positivos); $i++) {
    echo $positivos[$i] . " ";
}

?>

NIVEL 2 Dado un vector de números aleatorios, crea un array para positivos
y otro para negativos, muestra los 3 arrays
<?php

$tam = 10; 
$vector = array();
$positivos = array();
$negativos = array();

echo "Vector original: ";

for ($i = 0; $i < $tam; $i++) {
    $vector[$i] = rand(-10, 10);
    echo $vector[$i] . " ";

    if ($vector[$i] > 0) {
        $positivos[] = $vector[$i];
    } else if ($vector[$i] < 0) {
        $negativos[] = $vector[$i];
    }
}

echo "<br>Vector de positivos: ";
for ($i = 0; $i < count($positivos); $i++) {
    echo $positivos[$i] . " ";
}

echo "<br>Vector de negativos: ";
for ($i = 0; $i < count($negativos); $i++) {
    echo $negativos[$i] . " ";
}

?>





