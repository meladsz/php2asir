<?php
// línea de asteriscos con la misma cantidad de caracteres que el mensaje NIVEL 1
function mensaje_ast ($hola) {
  $cantidad = strlen($hola);
  echo $hola . "<br>";

  for ($i = 0; $i < $cantidad; $i++) {
    echo "*";
  }
}

//programa principal
$hola = "hola";
mensaje_ast($hola);


// mostrar tantos asteriscos como caracteres tenga el mensaje NIVEL 2
function asteriscos($mensaje) {
    $longitud = strlen($mensaje);
echo $mensaje . "<br>";

// mostrar asteriscos
for ($i = 0; $i < $longitud; $i++) {
      echo "*";
    }

  echo "<br>";

echo "Longitud: " . $longitud;
}

// programa principal
$mensaje = "Hola mundo";
asteriscos($mensaje);


/* mostrar un recuadro de asteriscos que contenga el mensaje. NIVEL 3
************
* Hola mundo *
************
*/
function recuadro($holamundo) {
    $longitud = strlen($holamundo);

    // fila superior
    for ($i = 0; $i < $longitud + 2; $i++) {
        echo "*";
    }
    echo "<br>";

    // fila del mensaje
    echo "*" . $holamundo . "* <br>";

    // fila inferior
    for ($i = 0; $i < $longitud + 2; $i++) {
        echo "*";
    }
    echo "<br>";
}

// programa principal
$holamundo = "Hola mundo";
recuadro($holamundo);

// funcion que reciba un numero entre 1-15
//que diga si es mayor, menor o igual a 10
function numeroale($numero) {
    if ($numero > 10) {
        return "Mayor a 10";
    } elseif ($numero < 10) {
        return "Menor a 10";
    } else {
        return "Igual a 10";
    }
}

// programa principal
$numero = rand(1, 15);
echo "Número: " . $numero . "<br>";
echo "Resultado: " . numeroale($numero);

?>

