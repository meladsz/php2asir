<?php
// rellenar un vector de numeros aleatorios no repetidos con FUNCIONES
// parametro por referencia "&"
/*
$aux = $n1;
$num1=$num2;
$num2=$aux; */
function numerosNoRepetidos($tamano) {     
    $numeros = array();                         

    while (count($numeros) < $tamano) {         
        $aleatorio = rand(1, 10);               
        $repetido = false;                  

        for ($i = 0; $i < count($numeros); $i++) { 
            if ($numeros[$i] == $aleatorio) {   
                $repetido = true;  
            }
        }

        if ($repetido == false) {               
            $numeros[] = $aleatorio;             
        }
    }

    return $numeros;                           
}
// programa principal 
$vector = numerosNoRepetidos(5);         

for ($i = 0; $i < count($vector); $i++) {
    echo "Número: " . $vector[$i] . "<br>"; 
}

?>
