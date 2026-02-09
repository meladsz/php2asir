3️⃣ Máximo, mínimo y posición (una posición)
Cree un vector con números aleatorios. Muestre el vector mientras se rellena
 obtenga: el valor mínimo y el valor máximo
<?php

$tam = 10;
$vector = array();

for ($i = 0; $i < $tam; $i++) {

    $vector[$i] = rand(-50, 50);
    echo $vector[$i] . "<br> ";

    // inicializar en la primera vuelta
    if ($i == 0) {
        $min = $vector[$i];
        $max = $vector[$i];
    }

    if ($vector[$i] < $min) {
        $min = $vector[$i];
    }

    if ($vector[$i] > $max) {
        $max = $vector[$i];
    }
}

echo "<br>Minimo: " . $min;
echo "<br>Maximo: " . $max;

?>


4️⃣ Máximo, mínimo y todas las posiciones (duplicados)
Cree un vector con 10 números aleatorios entre 1 y 20
Encuentre: el valor mínimo y el valor máximo
la posición de la primera aparición de cada uno
Muestre el vector, el mínimo y el máximo con sus posiciones
<?php

$tam = 10;
$vector = array();

for ($i = 0; $i < $tam; $i++) {
    $vector[$i] = rand(1, 20);
    echo $vector[$i] . " ";
}

$min = $vector[0];
$max = $vector[0];
$posMin = 0;
$posMax = 0;

for ($i = 1; $i < $tam; $i++) {

    if ($vector[$i] < $min) {
        $min = $vector[$i];
        $posMin = $i; 
    }

    if ($vector[$i] > $max) {
        $max = $vector[$i];
        $posMax = $i; 
    }
}

echo "<br>Minimo: $min en posicion $posMin";
echo "<br>Maximo: $max en posicion $posMax";

?>

