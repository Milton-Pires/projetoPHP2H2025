<?php

$n1 = 0; $n2 = 0; $n3 = 0; $final = 8; $maior = 0; $temp = 0;
$cont = 0;

while($final != 0){
    $n1 = 37;
    $n2 = 67;
    $n3 = 54;
    if($n1 > $temp){
      $temp = $n1;  
      $maior = $temp;
    }
    if($n2 > $temp){
        $temp = $n2;  
        $maior = $temp;
    }
    if($n3 > $temp){
        $temp = $n3;  
        $maior = $temp;
    }
    echo($maior);
    $final = 0;
}

