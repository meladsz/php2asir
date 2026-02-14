<?php
/*
Realizar un programa que cuente los números pares /impares de un vector
función que rellene  con valores aleatorios 1 vector pasado por referencia
-devuelva por retorno un ko si hay algún cero en el vector y si no devolverá ok
- 1 función imprimirá el vector si el valor es ok, y el número de pares e impares
*/
// Rellenar vector
function rellenarVector(&$v, $tam) {
    for ($i = 0; $i < $tam; $i++) {
        $v[$i] = rand(-10, 10);
    }
}

// Contar
function contarDatos($v, &$pares, &$impares) {

    $pares = 0;
    $impares = 0;
    
        }
        if ($n % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

// Imprimir
function imprimirVector($v, $pares, $impares) {

    echo "Vector:<br>";

for ($i = 0; $i < count($v); $i++) {
        echo $v[$i] . "<br> ";
    }

    echo "<br>Pares: $pares";
    echo "<br>Impares: $impares";
}

// PROGRAMA PRINCIPAL

$tam = 15;   
$vector = array ();

rellenarVector($vector, $tam);

$resultado = contarDatos($vector, $pares, $impares);

if ($resultado == "OK") {

    imprimirVector($vector, $pares, $impares);

} else {
    echo "KO — hay al menos un cero en el vector";
}
?>

<?php
/*
Realizar un programa que teniendo un vector de números + y negativos obtenga dos vectores uno solo con positivos y otro con negativos
*Tendrá una  función que rellene  con valores aleatorios 1 vector pasado por referencia
* Tendrá una función que reciba un vector con números + y - y devuelve por referencia 2 vectores uno con positivos y otro con negativos.
* Tendrá una función que imprimirá los 3 vectores con mensajes  
                 completo:   ______
                 positivos _____
                 negativos _____
    */
// Rellenar vectores
function rellenarVectores(&$v, $tam) {
    for ($i = 0; $i < $tam; $i++) {
        $v[$i] = rand(-20, 20);
    }
}

// Separar par e impar
function separarVector($v, &$positivos, &$negativos) {

    $positivos = array();
    $negativos = array();

    $p = 0;
    $n = 0;

    for ($i = 0; $i < count($v); $i++) {

        if ($v[$i] >= 0) {
            $positivos[$p] = $v[$i];
            $p++;
        } else {
            $negativos[$n] = $v[$i];
            $n++;
        }
    }
}

// Imprimir
function imprimirVectores($v, $positivos, $negativos) {

    echo "Completo: ";
    for ($i = 0; $i < count($v); $i++) {
        echo $v[$i] . " ";
    }

    echo "<br>Positivos: ";
    for ($i = 0; $i < count($positivos); $i++) {
        echo $positivos[$i] . " ";
    }

    echo "<br>Negativos: ";
    for ($i = 0; $i < count($negativos); $i++) {
        echo $negativos[$i] . " ";
    }
}


// PROGRAMA INICIAL

$tam = 12;

$vector = array();
$vecPos = array();
$vecNeg = array();

rellenarVectores($vector, $tam);
separarVector($vector, $vecPos, $vecNeg);
imprimirVectores($vector, $vecPos, $vecNeg);

?>

<?php
/*
Realizar un programa que de un vector con valores aleatorios 
devuelva indique cual es el máximo, el mínimo y las posición en la que se encuentran. 
"Tu decides la modularización del programa"
    */
// buscar min y max
function buscarMinMax($v, &$min, &$posMin, &$max, &$posMax) {
    $min = $v[0];
    $max = $v[0];
    $posMin = 0;
    $posMax = 0;

    for ($i = 1; $i < count($v); $i++) {
        if ($v[$i] < $min) {
            $min = $v[$i];
            $posMin = $i;
        }
        if ($v[$i] > $max) {
            $max = $v[$i];
            $posMax = $i;
        }
    }
}

// imprimir
function imprimirResultados($v, $min, $posMin, $max, $posMax) {
    echo "Vector: ";
    for ($i = 0; $i < count($v); $i++) {
        echo $v[$i] . " ";
    }
    echo "<br>Minimo: $min en posicion $posMin";
    echo "<br>Maximo: $max en posicion $posMax";
}

// PROGRAMA PRINCIPAL
$tam = 12;
$vector = array();

for ($i = 0; $i < $tam; $i++) {
    $vector[$i] = rand(1, 100);
}

$min = 0; $max = 0; $posMin = 0; $posMax = 0;

buscarMinMax($vector, $min, $posMin, $max, $posMax);
imprimirResultados($vector, $min, $posMin, $max, $posMax);

?>

<?php
/*
Modificar el programa anterior para que en caso de tener varios mínimos o varios máximos, devuelva todos
*/
// buscar min y max con duplicados
function buscarMinMaxTodos($v, &$min, &$vecPosMin, &$max, &$vecPosMax) {
    $min = $v[0];
    $max = $v[0];
    $vecPosMin = array(0);
    $vecPosMax = array(0);

    for ($i = 1; $i < count($v); $i++) {
        if ($v[$i] < $min) {
            $min = $v[$i];
            $vecPosMin = array($i); // reinicia posiciones del mínimo
        } else if ($v[$i] == $min) {
            $vecPosMin[] = $i;
        }

        if ($v[$i] > $max) {
            $max = $v[$i];
            $vecPosMax = array($i); // reinicia posiciones del máximo
        } else if ($v[$i] == $max) {
            $vecPosMax[] = $i;
        }
    }
}

// imprimir
function imprimirResultadosTodos($v, $min, $vecPosMin, $max, $vecPosMax) {
    echo "Vector: ";
    for ($i = 0; $i < count($v); $i++) {
        echo $v[$i] . " ";
    }

    echo "<br>Minimo: $min en posiciones: ";
    for ($i = 0; $i < count($vecPosMin); $i++) {
        echo $vecPosMin[$i] . " ";
    }

    echo "<br>Maximo: $max en posiciones: ";
    for ($i = 0; $i < count($vecPosMax); $i++) {
        echo $vecPosMax[$i] . " ";
    }
}

// PROGRAMA PRINCIPAL
$tam = 12;
$vector = array();

for ($i = 0; $i < $tam; $i++) {
    $vector[$i] = rand(1, 20);
}

$min = 0; $max = 0;
$vecPosMin = array();
$vecPosMax = array();

buscarMinMaxTodos($vector, $min, $vecPosMin, $max, $vecPosMax);
imprimirResultadosTodos($vector, $min, $vecPosMin, $max, $vecPosMax);

?>




