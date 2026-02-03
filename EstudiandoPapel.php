<?php
// nivel 2 del dia 6 de EDU
// array de mensajes
$mensajes = ["Hola peña", "Buen día", "Qué tal?"];

function saludo($texto) {
    echo "*****<br>";
    echo $texto . "<br>";
    echo "*****<br>";
}

// programa principal
$i = rand(0, 2); 
echo "Salió el mensaje $i <br>";

// mostrar el mensaje aleatorio
saludo($mensajes[$i]);

?>
<?php
// nivel -2 del dia 7 de EDU
// función que muestra un número
function mostrarNumero($num) {
    echo "El número es: " . $num . "<br>";
}

// programa principal
$numero = rand(1, 10); // número aleatorio entre 1 y 10
mostrarNumero($numero);

?>

