<?php
/*
Faça um programa em PHP que leia a altura, a idade e o sexo de 50 pessoas e forneça
as seguintes informações:
A maior altura e a menor altura;
A média de altura de mulheres;
A idade do homem mais velho e da mulher mais nova.

*/

//EXPLICANDO:
/*Pega um contador e cada altura seria como um INPUT então dentro do while a gnt pede a altura e guarda ela numa variavel temporaria, e depois compara a variavel temporaria
com a nova altura digitada sabendo qual a maior altura e depois compara com a maior altura anterior e vai substituindo, e por ultimo aumenta o contador para continuar o ciclo */
$cont = 0;
while($cont < 50){
    $alt1 = 105;
    $temp = $alt1;
    $alt2 = 103;
    if($temp >= $alt1){
        $maioralt = $temp;
        $alt1 = $menoralt;
    };
    if($maioralt <= $temp){
        $maioralt = $temp;
    }
    
    $cont++;
}
echo("A maior altura é de $maioralt centimetros");




?>