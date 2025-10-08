<?php
$a =[                
    [25, 12, 35],
    [85, 47, 98],
    [32, 38, 105],
];

$c = [];
$escolhaUsuario = 10;


for($i = 0; $i < 3; $i++ ){
    for($j = 0; $j < 3; $j++){
        $c[$i][$j] = $a[$i][$j] * $escolhaUsuario;
    }
}

echo("<pre>");
var_dump($c);
echo("</pre>");



?>