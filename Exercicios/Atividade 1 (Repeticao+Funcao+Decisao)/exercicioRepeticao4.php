<?php
/*

Criar um aplicativo que possibilite entrar com 3 números e possa imprimi-los em ordem
decrescente (insira números diferentes).

*/
$n1 = 20; $n2 = 3; $n3 = 10;

$maior = 0; $menor = 0; $meio = 0;

$arrumado = FALSE;

while($arrumado == FALSE){
    if($n1>$n2 && $n1>$n3){
        $maior = $n1;
        if($n2>$n3){
            $meio = $n2;
            $menor = $n3;
        }
        else{
            $meio = $n3;
            $menor = $n2;
        }
        $arrumado = TRUE;
    }
    
    else if($n2>$n1 && $n2>$n3){
        $maior = $n2;
        if($n1>$n3){
            $meio = $n1;
            $menor = $n3;
        }
        else{
            $menor = $n1;
            $meio = $n3;
        }
        $arrumado = TRUE;
    }
    else{
        $maior = $n3;
        if($n1>$n2){
            $meio = $n1;
            $menor = $n2;
        }
        else{
            $menor = $n1;
            $meio = $n2;
        }
        $arrumado = TRUE;
    }
}
echo("Em ordem decrescente fica: $maior, $meio, $menor");

?>