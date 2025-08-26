<?php
    //Criando funçãO:
    function titulo(){
        echo('Calculando valores: <br />');
    }
   
    
    /*
    function somaValor(){
        $num1=10; $num2=10;
        $resp = $num1 + $num2;
        echo("A soma de $num1 e $num2 é $resp"); //Se não tiver o echo não mostra
    }
    //executando função:
    titulo();
    somaValor();
    */

    /*
    //Função com paramêtros:
    $valor1=10;$valor2=20;
    function somaValor($num1 , $num2){
        $resp = $num1 + $num2;
        echo ("A soma de $num1 e $num2 é $resp");
    }
    //Parametros dentro ()
    somaValor($valor1,$valor2);
    */

    //Usando o return
    $valor1=10;$valor2=20;
    function somaValor($num1,$num2){
        $resp = $num1 + $num2;
        return($resp);
    }
    $resposta = somaValor($valor1,$valor2);
    echo($resposta);
?>