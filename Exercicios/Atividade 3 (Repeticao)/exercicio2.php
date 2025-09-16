<?php
$cont = 1;

while($cont <= 100){
    if($cont % 10 == 0){
        echo("<br />$cont é muntiplo de 10");
        $cont++;
    }
    else{
        echo("<br />$cont");
        $cont++;
    }
}


?>