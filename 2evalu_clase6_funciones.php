<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Funciones</title>
  </head>
  <body>

<?php
// function nombre de la funcion ([parametros]) + { [algoritmo] }
function funcsalu ($mens1) {
echo "******* <br>";
echo "$mens1 <br>";
echo "*______* <br>";  

}
function funcsalu2 () {
echo "********** <br>";
echo "como estas? <br>";
echo "__________ <br>";  
}

// programa principal
$mens1 = "hola gente";
$mens = array ("hola peña", "como estas?");
$alea = rand(1,2);
echo "salio el saludo $alea <br>";
if ($alea == 1)
funcsalu($mens[0]);
else 
funcsalu2();

?>