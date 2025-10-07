<?php
$meses = [
    1 => "Janeiro" ,
    2 => "Fevereiro" ,
    3 => "Março" ,
    4 => "Abril" ,
    5 => "Maio" ,
    6 => "Junho" ,
    7 => "Julho" ,
    8 => "Agosto" ,
    9 => "Setembro" ,
    10 => "Outubro" ,
    11 => "Novembro" ,
    12 => "Dezembro" ,

    
];

$escolhaUsuario = 7;

if($escolhaUsuario >= 1 && $escolhaUsuario <= 12){
    echo("O mês do numero $escolhaUsuario é: " . $meses[$escolhaUsuario]);
    
}

else{
    echo("Número invalido");
}





?>