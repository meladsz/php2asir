<?php
function CambValo($Nume1,$Nume2)
{	
	$Auxi =$Nume1;
	$Nume1 =$Nume2;
	$Nume2 =$Auxi;
	echo "**Al acabar la función CambValo Nume1 vale". $Nume1 ."<br>";
	echo "**Al acabar la función CambValo Nume2 vale". $Nume2 ."<br>";
}

function CambRefe(&$Nume1,&$Nume2)
{	
	$Auxi =$Nume1;
	$Nume1 =$Nume2;
	$Nume2 =$Auxi;	
	echo "**Al acabar la función CambRefe Nume1 vale ". $Nume1 ."<br>";
	echo "**Al acabar la función CambRefe Nume2 vale ". $Nume2."<br>";
}

$Nume1 = 1;
$Nume2 = 2;

echo "Comienzo del programa :"."<br>"; 
echo "* Nume1 vale ". $Nume1."<br>";
echo "* Nume2 vale ". $Nume2."<br>";
CambValo($Nume1,$Nume2);
echo "*En el programa principal Nume1 vale ". $Nume1."<br>";
echo "*En el programa principal Nume2 vale ". $Nume2."<br>";
CambRefe($Nume1,$Nume2);
echo "*En el programa principal Nume1 vale ". $Nume1."<br>";
echo "*En el programa principal Nume2 vale ". $Nume2."<br>";
	

?>
