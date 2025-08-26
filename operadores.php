<?php 

	echo("Trabalhando com operadores em PHP <br />");
	echo("Operadores de soma <br/>");
	echo("Operadores de subtração <br/>");
	echo("Operadores de multiplicação <br/>");
	echo("Operadores de divisão <br/>");

	echo("Utilizando operadores: <br />");
	$num1 = 10;
	$num2 = 2;

	$resp = $num1 + $num2;
	$resp1 = $num1 - $num2;
	$resp2 = $num1 * $num2;
	$resp3 = $num1 / $num2;
	$resp4 = $num1 % $num2;

	echo ("A soma de $num1 e $num2 é: $resp <br />");
	echo ("A subtração de $num1 e $num2 é: $resp1 <br />");
	echo ("A multiplicação de $num1 e $num2 é: $resp2 <br />");
	echo ("A divisão de $num1 e $num2 é: $resp3 <br />");
	echo ("A resto divisão de $num1 e $num2 é: $resp4 <br />");
?>