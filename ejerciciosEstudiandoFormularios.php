// PRIMER ENUNCIADO Muestre el triple del número ingresado.
<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="procesa.php" method="post">
  Ingrese un número:
  <input type="text" name="num">
  <br>
  <input type="submit" value="Calcular">
</form>
</body>
</html>

// SOLUCION
<?php
$multi = $_REQUEST['num'] * 3;
echo "El triple es: " . $multi;
?>

// SEGUNDO ENUNCIADO 
<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="opera.php" method="post">
  Número 1:
  <input type="text" name="n1">
  <br>
  Número 2:
  <input type="text" name="n2">
  <br>
  <input type="checkbox" name="sumar"> Sumar
  <br>
  <input type="submit" value="Calcular">
</form>
</body>
</html>

// SOLUCION
<?php
if (isset($_REQUEST['sumar'])) {
    $suma = $_REQUEST['n1'] + $_REQUEST['n2'];
    echo "La suma es: " . $suma;
}
?>

// TERCER ENUNCIADO 
<html>
<head>
<title>Problema</title>
</head>
<body>

<form action="calculo.php" method="post">
  Número 1:
  <input type="text" name="n1">
  <br>
  Número 2:
  <input type="text" name="n2">
  <br>
  <input type="checkbox" name="sumar"> Sumar
  <br>
  <input type="checkbox" name="multiplicar"> Multiplicar
  <br>
  <input type="submit" value="Calcular">
</form>
</body>
</html>

// SOLUCION
<?php
if (isset($_REQUEST['sumar']))
    echo "Suma: " . ($_REQUEST['n1'] + $_REQUEST['n2']) . "<br>";

if (isset($_REQUEST['multiplicar']))
    echo "Multiplicación: " . ($_REQUEST['n1'] * $_REQUEST['n2']);
?>

// ENUNCIADO RADIO BOTTONS elige una operacion y leala con los numeros
<html>
<head>
<title>Operaciones</title>
</head>
<body>
<form action="calculo_radio.php" method="post">
  Número 1:
  <input type="text" name="n1">
  <br>
  Número 2:
  <input type="text" name="n2">
  <br>
  <input type="radio" name="operacion" value="sumar"> Sumar
  <input type="radio" name="operacion" value="restar"> Restar
  <input type="radio" name="operacion" value="multiplicar"> Multiplicar
  <br>
  <input type="submit" value="Calcular">
</form>
</body>
</html>

// SOLUCION
<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

// recogemos la operación elegida
$op = $_POST['operacion'];

if ($op == "sumar") {
    echo "La suma es: " . ($n1 + $n2);
} elseif ($op == "restar") {
    echo "La resta es: " . ($n1 - $n2);
} elseif ($op == "multiplicar") {
    echo "La multiplicación es: " . ($n1 * $n2);
}
?>
