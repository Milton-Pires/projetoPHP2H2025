<?php
$numeros=[
    1,-5,3,5,6,-9,-40, 8,10, -5,
];

$positivo = 0;
$negativo = 0;
$par = 0;
$impar = 0;

foreach($numeros as $numero){
    if($numero > 0){
        $positivo++;
    }
    elseif($numero < 0){
        $negativo++;
    }

    if($numero % 2 == 0){
        $par++;
    }
    else{
        $impar++;
    }
}

echo("=================RESULTADOS================= <br />");

echo("Positivos: $positivo <br />");
echo("Negativos: $negativo <br />");
echo("Pares: $par <br />");
echo("Impares: $impar <br />");



?>