<?php

/*Diga qual foi o valor recebido com os seguintes descontos:
INSS:14%
IR - TABELA DE IR 2025 (27,5%)
VALOR BRUTO: R$6300
MOSTRAR NO FINAL:
SALARIO FOLHA;
DESCONTO INSS;
DESCONTO IR;
DESCONTO CLUBE;
SALARIO LIQUIDO;
*/

$desc = 0; $valorBruto = 1500; $valorLiquido = 0; $porc = 0;

//Descobrindo porcentagem de desconto
function porcIR($valorBruto){
   if ($valorBruto < 2259.20){
        $porc = 0;
        return $porc;
    }
    else if($valorBruto >= 2259.21 && $valorBruto <= 2826.65 ){
        $porc = 7.5/100;
        return $porc;
    }
    else if($valorBruto >= 2826.66 && $valorBruto <= 3751.05){
        $porc = 15/100;
        return $porc;
    }
    else if ($valorBruto >= 3751.06 && $valorBruto < 4664.68){
        $porc = 22.5/100;
        return $porc;
    }
    else{
        $porc = 27.5/100;
        return $porc;
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

//Desconto clube:

$esClube = "C"; $valorClube = 0;

function desClube($esClube){
    if($esClube == "A"){
        $valorClube = 50;
    }
    else if ($esClube == "B"){
        $valorClube = 30;
    }
    else if ($esClube == "C"){
        $valorClube = 20;
    }
    else{
        return $valorClube;
    }
    return $valorClube;

}
$mostraClube = desClube($esClube);

//Valor liquido:

$valorLiquido = $valorBruto - $valorClube - ($mostra + $mostraIR);

//Mostrando o final:
echo("O seu salario bruto é $valorBruto <br />");
echo("O desconto do INSS é de $mostra <br />");
echo("O desconto do IR é de $mostraIR <br />");
echo("O desconto do clube $esClube é $mostraClube <br />");
echo("O valor liquido é $valorLiquido");
?>