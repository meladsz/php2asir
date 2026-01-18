<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ejercicios para sesiones</title>
  </head>
  <body>

<?php
//Contador de visitas por sesion
session_start();

if (!isset($_SESSION["visitas"])) {
    $_SESSION["visitas"] = 0;
}
$_SESSION["visitas"]++;

echo "Has visitado esta página " . $_SESSION["visitas"] . " veces.";


// login basico
session_start();

$usuario = "admin";
$clave = "1234";

if ($_POST["user"] == $usuario && $_POST["pass"] == $clave) {
    $_SESSION["logueado"] = true;
    echo "Bienvenido, estás logueado.";
} else {
    echo "Credenciales incorrectas.";
}

//  cierre de sesion
session_start();
session_destroy();
echo "Sesion cerrada.";

// añadir productos a un carrito 
session_start();

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = array();
}

if (isset($_GET["producto"])) {
    $_SESSION["carrito"][] = $_GET["producto"];
}

print_r($_SESSION["carrito"]);

/*
<?php
session_name("EjFacil");
session_start();

if (!isset($_SESSION["num"])) {
    $_SESSION["num"] = 0;
}
?>

<form action="B.php" method="get">
    <button type="submit" name="accion" value="+">Sumar 1</button>
    <button type="submit" name="accion" value="0">Poner a 0</button>
</form>

<p>Valor actual: <?php echo $_SESSION["num"]; ?></p>
*/

// sumar y restar numeros de la sesion A
session_name("EjFacil");
session_start();

if ($_REQUEST["accion"] == "+") {
    $_SESSION["num"]++;
}
else if ($_REQUEST["accion"] == "0") {
    $_SESSION["num"] = 0;
}

header("Location: A.php");

?>