<?php
/*
Informacoes:
    Tabuleiro = 8x8;
    q1 = 1
    q2 = 2
    q3 = 4
    q4 = 8...
*/
 $cont = 0; $q = 1; $soma = 0;

 while($cont <= 63){
    $soma = $soma + $q;
    $q = $q * 2;
    $cont++;
 }
 echo("A rainha teria que dar ao monge $soma graos de trigo");