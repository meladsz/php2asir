Cree un vector de 10 números aleatorios entre 1 y 20.
Tenga una función que reciba el vector por referencia y calcule:
La suma de todos los números
El promedio
La función debe devolver el promedio y la suma por referencia.
Imprimir el vector completo, la suma y el promedio en el programa principal.
<?php
function calcularSumaPromedio($tam, $v, &$suma, &$promedio) {
    for ($i = 0; $i < $tam; $i++) {
    $vector[$i] = rand(1, 20);
    echo $vector[$i] . " ";
    $suma = 0; }

    for ($i = 0; $i < count($v); $i++) {
        $suma += $v[$i];
    }

    $promedio = $suma / count($v);
}

// ===== PROGRAMA PRINCIPAL =====
$tam = 10;
$vector = array();

$suma = 0;
$promedio = 0;

calcularSumaPromedio($tam, $vector, $suma, $promedio);
echo "<br>Suma: $suma";
echo "<br>Promedio: $promedio";

?>

Cree un vector de 10 números aleatorios entre 1 y 50.
Tenga una función que reciba el vector por referencia y cuente:
Cuántos números son pares
Cuántos números son impares
La función debe devolver ambos valores por referencia.
Imprimir el vector completo, la cantidad de pares y la cantidad de impares en el programa principal.
<?php
function contarParesImpares(&$v, $tam, &$pares, &$impares) {
    $v = array();
    $pares = 0;
    $impares = 0;

    echo "Vector: ";

    for ($i = 0; $i < $tam; $i++) {
        $v[$i] = rand(1, 50);
        echo $v[$i] . " ";

        if ($v[$i] % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }
}

// ===== PROGRAMA PRINCIPAL =====

$tam = 10;
$vector = array();
$pares = 0;
$impares = 0;

contarParesImpares($vector, $tam, $pares, $impares);
echo "<br>Pares: $pares";
echo "<br>Impares: $impares";

?>
