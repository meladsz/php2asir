<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Array Parte 1</title>
    <h1> Comprobación entre Rand y mt_Rand</h1>
  </head>
  <body>

<?php
// Vectores
// como hacer q un random sea bueno, q no repita un numero en muchas veces
// comparar la calidad de rand() y mt_rand()

// Definimos el valor máximo y mínimo que pueden tomar los aleatorios.
$max = 2;
$min = 0;

// Contadores de "fallos" para cada función aleatoria.
$ContfallosRandom =0;
$ContfallosMTRandom =0;

// Número de repeticiones de generación de aleatorios por experimento.
$CantNume=100;

// Bucle externo: repetimos el experimento 50 veces tanto del rand como el mt_Rand 
for ($RepeProg =1; $RepeProg <=50 ; $RepeProg ++)
{
$numeros = array(0,0,0); 

/* En el caso de querer MAS posiciones sin poner (0,0,0,...) se hace el siguiente for: 
$numeros = array ()
$min = 0;
$max = 8;
for ($posarray = $min; $posarray <= $max; $posarray++) { 
    $numeros[$posarray] = 0; 
} 
*/

// crear Array para contar cuántas veces sale cada número

// Bucle para generar 100 números aleatorios con rand()
for ($i = 1; $i <= $CantNume; $i++) { 

    $numeale= rand($min,$max); // (0-2)
    
    $numeros[$numeale]++;  // Valor aleatorio como índice del array y sumamos 1.

    //guardar el array
}
// Calculamos la desviación del rand()
$Desv_Random= 0;
$Medi= $CantNume / ($max+1); // Media normal: veces que debería salir cada número
  echo " <br> la media deberia haber sido  ". $Medi;

// Recorremos los valores posibles (0, 1 y 2)
for ($i = 0; $i <= $max; $i++) { 

// Calculamos la desviación de este valor con respecto a la media
   $Desv_Random = $Desv_Random + abs( $numeros [$i]  - $Medi); // suma la desviación para tener la desviación total

// muestra cuanto ha salido cada numero y la diferencia de la media real y lo ideal
  echo " <br> El valor ". $i  ." ha salido ". $numeros [$i] .  " se ha desviado " .  abs( $numeros [$i]  - $Medi); // abs(340 - 333.33) = abs(66.67) = 66.67

} 

echo " <br> El desvio total es" . " $Desv_Random <br>" ;

/*******************************************/
// Ahora repetimos el mismo experimento pero usando mt_rand()

$numeros = array(0,0,0);  // Reiniciamos el array de contadores a 0
$Desv_Mt_Random= 0;

// Bucle para generar 100 números aleatorios con mt_rand()
for ($i = 1; $i <= $CantNume; $i++) {

    $numeale= mt_rand($min,$max); // con numero aleatorio (0-2)

    $numeros[$numeale]++; //contador


    //guardar el array
}

// Volvemos a mostrar la media teórica (es la misma que antes)
  echo " <br> la media deberia haber sido  ". $Medi;


for ($i = 0; $i <= $max; $i++) {  // Recorremos los valores posibles para mt_rand()

    // Calculamos y acumulamos la desviación para este valor
     $Desv_Mt_Random =  $Desv_Mt_Random + abs( $numeros [$i]  - $Medi); // abs(350 - 333.33) = abs(66.67) = 66.67


    //mostramos cuantas veces salió cada numero y la desviacion mt_rand ideal y real
    echo " <br> El valor ". $i  ." ha salido ". $numeros [$i] .  " se ha desviado " .  abs( $numeros [$i]  - $Medi)  ;
  }

    echo " <br> El desvio total es   " .  $Desv_Mt_Random ;

 
// Comparamos cuál de los dos ha tenido más desviación en este experimento.
if ($Desv_Random > $Desv_Mt_Random )
    $ContfallosRandom ++;
else
  $ContfallosMTRandom ++;

echo "<br><br><strong>Desviación menos precisa:</strong><br>";

echo "rand():    " . str_repeat("█", $ContfallosRandom) . " ($ContfallosRandom)<br>"; // // str_repeat("█", $ContfallosRandom) hace que se repita tantas veces como fallos.
echo "mt_rand(): " . str_repeat("█", $ContfallosMTRandom) . " ($ContfallosMTRandom)<br>";

}
// Despues de repetir el experimento X veces, mostramos el resultado final.
echo " <br> el random ha fallado " . $ContfallosRandom ;

echo " <br> el mt random ha fallado " . $ContfallosMTRandom ;



/*
// array de 15 posiciones, num del 50-100
$num = array();
$num[0] = rand(50,100);

for ($pos=1;$pos<15;$pos++) {
  $nr = rand(50,100);
  $num[$pos] = $nr;
}
print_r ($num);
*/
?>