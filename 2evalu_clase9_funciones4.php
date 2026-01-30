<?php
// rellenar un vector de numeros aleatorios no repetidos con FUNCIONES
// parametro por referencia "&"

function compRepe($indi, $val) {
    $repe = false;
    for ($cont = 0; $cont<$indi;$cont++) {
        if ($val[$cont]==$val[$indi]) {
            $repe = true;
        }
    }
    return ($repe);
}
?>
<?php 
$infe= 0;
$supe= 6;
for ($indi =0;$indi<6;$indi++) {
    do {
        $val[$indi]=rand($infe,$supe);
    }
    while (compRepe($indi, $val));
    echo "Posición: " . ($indi+1) . " es " . $val[$indi] . "<br>";
}

?>
