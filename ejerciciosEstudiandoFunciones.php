<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ejercicios para sesiones</title>
  </head>
  <body>

<?php
// una función debe devolver el doble de ese número
// genera un número aleatorio entre 1 y 10
function funcdoble ($num) {
$doble = $num * 2; 
return $doble;
}

//programa principal
$num = rand (1,10);
funcdoble ($num);

// funcion que diga par o impar entre 1, 10 
function funcpar ($nume) {
    if ($nume % 2 == 0) {
        return "Par";
    }
    else {
        return "Impar";
    }
}
//programa principal
$nume = rand(1,10);
echo "numero :" . $nume . "<br>";
echo " resultado:" . funcpar ($nume);

?>