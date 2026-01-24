<?php
// mostrar tantos asteriscos como caracteres tenga el mensaje
function asteriscos($mensaje) {
    $longitud = strlen($mensaje);
echo $mensaje . "<br>";

// mostrar asteriscos
for ($i = 0; $i < $longitud; $i++) {
      echo "*";
    }

  echo "<br>";

// mostrar longitud
echo "Longitud: " . $longitud;
}

// programa principal
$mensaje = "Hola mundo";
asteriscos($mensaje);


?>
