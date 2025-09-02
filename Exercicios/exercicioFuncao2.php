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

$desc = 0; $valorBruto = 6300; $valorLiquido = 0;

//Função mostra o desconto do INSS
function descINSS($valorBruto){
    $desc = $valorBruto * 0.14;
    return $desc;
}
$mostra = descINSS($valorBruto);

//Função mostra o desconto do IR
function descIR($valorBruto){
    $desc = $valorBruto * 0.275;
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