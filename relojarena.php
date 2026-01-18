<!DOCTYPE html>
<html>
<body>
<pre>
<?php
$maxfilas = 7;
$repesv = 1;
$repesh = 2;
$total = $repesv * $repesh;

$maxcolumnas = $maxfilas * 2 - 1;

const piramideinversa = " ";
const piramide = "*";

function dibujaParteSuperior($maxfilas, $repesh)
{
    for ($fila = 0; $fila < $maxfilas; $fila++) 
    {
        for ($cont = 0; $cont < $repesh; $cont++)
        {
            for ($columna = 0; $columna < $maxfilas - $fila - 1; $columna++) 
            {
                echo piramideinversa;
            }

            for ($columna = 0; $columna < ($fila * 2 + 1); $columna++) 
            {
                echo piramide;
            }

            for ($columna = 0; $columna < $maxfilas - $fila - 1; $columna++) 
            {
                echo piramideinversa;
            }
        }
        echo "<br>";
    }
}

function dibujaParteInferior($maxfilas, $repesh)
{
    for ($fila = 0; $fila < $maxfilas; $fila++) 
    {
        for ($cont = 0; $cont < $repesh; $cont++)
        {
            for ($columna = 0; $columna < $fila; $columna++) 
            {
                echo piramideinversa;
            }

            for ($columna = 0; $columna < ($maxfilas - $fila) * 2 - 1; $columna++) 
            {
                echo piramide;
            }

            for ($columna = 0; $columna < $fila; $columna++) 
            {
                echo piramideinversa;
            }
        }
        echo "<br>";
    }
}

function dibujareloj($maxfilas, $repesv, $repesh)
{
    for ($i = 0; $i < $repesv; $i++) 
    {
        dibujaParteInferior($maxfilas, $repesh);
        dibujaParteSuperior($maxfilas, $repesh);
    }
}

dibujareloj($maxfilas, $repesv, $repesh); 


?>
</pre>
</body>
</html>
