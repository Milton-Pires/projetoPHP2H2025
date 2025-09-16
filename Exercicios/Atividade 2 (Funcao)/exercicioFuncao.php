<?php
/*Criar uma calculadora com as seguintes funções:
Soma; Subtração; Divisão; Muntiplicação;

No final deve apresentar ao usúario:
Os numeros digitados (Sem formulario);
A função escolhida;
O resultado;

OBS:
Utilizar funções (function);
*/
$num1 = 0; $num2 = 0; $resp = 0;

//Usuário escolhe a operação:
$escolha = 4;

//Soma
if ($escolha == 1){
    function somaValor($num1 , $num2){
        $resp = $num1 + $num2;
        return($resp);
    }
    $apecho = somaValor(100 , 50);
    echo('Você escolheu a operação: SOMA <br />');
    echo ("A soma dos valores é: $apecho");
}

//Subtração
else if($escolha == 2){
    function subValor($num1 , $num2){
        $resp = $num1 - $num2;
        return($resp);
    }
    $apecho = subValor(352 , 54);
    echo('Você escolheu a operação: SUBTRAÇÃO <br />');
    echo("A subtração dos valores é: $apecho");
}

//Divisão
else if($escolha == 3){
    function divValor($num1 , $num2){
        $resp = $num1/$num2;
        return($resp);
    }
    $apecho = divValor(200 , 25);
    echo('Você escolheu a operação: DIVISÃO <br />');
    echo("A divisão dos valores é: $apecho");
}

//Muntiplicação
else if ($escolha == 4){
    function muntValor($num1 , $num2){
        $resp = $num1 * $num2;
        return($resp);
    }
    $apecho = muntValor(50 , 12);
    echo('Você escolheu a operação: MUNTIPLICAÇÃO <br />');
    echo("A muntiplicação dos valores é: $apecho");
}
else{
    echo('Escolha um numero de 1 até 4!');
}
    
?>