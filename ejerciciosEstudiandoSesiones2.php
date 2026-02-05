Inicie sesión 
Guarde en sesión una variable llamada "usuario" con valor "Laura"
No muestre nada
<?php
session_start();
$_SESSION["usuario"] = "Laura";
?>

Inicie sesión
Muestre en pantalla el valor de "usuario" guardado en la sesión
<?php
session_start();
echo $_SESSION["usuario"];
?>

Inicie sesión
Si no existe $_SESSION["contador"], la cree con valor 1
Si existe, sume +1
Muestre el contador
<?php
session_start();

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}

echo $_SESSION["contador"];
?>

Inicie sesión
Cree un array con 5 números aleatorios (1–100) usando for
Guarde el array en $_SESSION["numeros"]
<?php
session_start();

$numeros = [];

for ($i = 0; $i < 5; $i++) {
    $numeros[] = rand(1, 100);
}

$_SESSION["numeros"] = $numeros;
?>


Inicie sesión
Recorra con for el array $_SESSION["numeros"]
Calcule la suma total
Muestre la suma
<?php
session_start();

$suma = 0;

for ($i = 0; $i < count($_SESSION["numeros"]); $i++) {
    $suma += $_SESSION["numeros"][$i];
}

echo $suma;
?>


Reciba un número límite
Lea $_SESSION["numeros"]
Cuente cuántos valores son mayores que el límite
Devuelva ese contador
<?php
session_start();

function contarMayores($limite) {
    $contador = 0;

    for ($i = 0; $i < count($_SESSION["numeros"]); $i++) {
        if ($_SESSION["numeros"][$i] > $limite) {
            $contador++;
        }
    }

    return $contador;
}

echo contarMayores(50);
?>












