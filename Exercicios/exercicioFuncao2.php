<?php

/*Diga qual foi o valor recebido com os seguintes descontos:
INSS:14%
IR - TABELA DE IR 2025 (27,5%)
VALOR BRUTO: R$6300
MOSTRAR NO FINAL:
SALARIO FOLHA:
DESCONTO INSS:
DESCONTO IR:
SALARIO LIQUIDO:
*/

$desc = 0; $valorBruto = 2500; $valorLiquido = 0; $porc = 0;

//Descobrindo porcentagem de desconto
function porcIR($valorBruto){
   if ($valorBruto < 2259.20){
    return 0;
    }
    else if($valorBruto >= 2259.21 && $valorBruto <= 2826.65 ){
    return 0.075;
    }
    else if($valorBruto >= 2826.66 && $valorBruto <= 3751.05){
    return 0.15;
    }
    else if ($valorBruto >= 3751.06 && $valorBruto < 4664.68){
    return 0.225;
    }
    else{
    return 0.275;
    } 
}


//Função mostra o desconto do INSS
function descINSS($valorBruto){
    $desc = $valorBruto * 0.14;
    return $desc;
}
$mostra = descINSS($valorBruto);

//Função mostra o desconto do IR
function descIR($valorBruto){
    $porc = porcIR($valorBruto);
    $desc = $valorBruto * $porc;
    return $desc;
}
$mostraIR = descIR($valorBruto);
//Valor liquido:

$valorLiquido = $valorBruto - ($mostra + $mostraIR);

//Mostrando o final:
echo("O seu salario bruto é $valorBruto <br />");
echo("O desconto do INSS é de $mostra <br />");
echo ("O desconto do IR é de $mostraIR <br />");
echo("O valor liquido é $valorLiquido");
?>