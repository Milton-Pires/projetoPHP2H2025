<?php
/*
Faça um programa em PHP que leia a altura, a idade e o sexo de 50 pessoas e forneça
as seguintes informações:
A maior altura e a menor altura;
A média de altura de mulheres;
A idade do homem mais velho e da mulher mais nova.

*/

//EXPLICANDO:

$idade_M = 0;
$idade_F = 0;
$altura_M = 0;
$altura_F = 0;
$g1 = "F";
$g2 = "M";
$somaAltF = 0;
$cont = 0;
//Funcao para fazer a media das alturas das mulheres
function medAltF($somaAltF) {
	$media = $somaAltF / 25;
	echo "média de altura das mulheres é: $media </br>";
}
//qnd o contador chegar em 25 
while($cont <= 25){
$idade_M = 30;
$idade_F = 17;
$altura_M = 1.80;
$altura_F = 1.70;
$g1 = "F";
$g2 = "M";
$somaAltF = $somaAltF + $altura_F;
$cont++;

}
	if($altura_M > $altura_F) {
		echo "A maior altura é: $altura_M </br> e a menor altura é: $altura_F </br>";
	} else{
		echo "A maior altura é: $altura_F </br> e a menor altura é: $altura_M </br>";
	};

		if($idade_M > $idade_F) {
		echo "Maior idade masculina é: $idade_M </br> e a menor idade feminina é: $idade_F </br>";
	} else{
		echo "Maior altura é de $altura_F </br> e a menor altura é: $altura_M </br>";
	};


	echo(medAltF($somaAltF));
 ?>
