<?php

include("cabecalho.php");

$idade = 17;
if($idade < 18 && $idade >= 16){
    include("votacao_maior16.php");
}
else if($idade >= 18){
    include("votacao_maior18.php");
}
else{
    include("votacao_menor16.php");
}

include("rodape.php");

?>

