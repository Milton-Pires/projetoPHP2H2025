<?php 
/*
Construir um app em PHP que leia 2 números e efetue a adição.
a. Caso o valor somado seja maior que 20, este deverá ser apresentando somandose a ele mais 8;
b. Caso o valor somado seja menor ou igual a 20, este deverá ser apresentado
subtraindo-se 5
*/
$num1 = 0; $num2 = 0; $resp = 0;


function somaValor($num1 , $num2){
    $resp = $num1 + $num2;
    return($resp);
};
$mostra = somaValor(5, 6);
//A:
if($mostra > 20){
    $mostra += 8;
}
//B:
else if($mostra <= 20){
    $mostra = $mostra - 5;
}

echo("Resposta do exercicio: $mostra");


?>