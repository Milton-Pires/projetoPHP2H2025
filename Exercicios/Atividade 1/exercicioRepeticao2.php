<?php
/*
Criar um aplicativo em PHP entrar com um número e informar
a. se ele é divisível por 10, por 5, por 2 ou
b. se não é divisível por nenhum destes

*/

$num1 = 10;

if ($num1 % 10 == 0){
    echo("O numero $num1 é divisivel por 10, por 5 e por 2");
}
else if ($num1 % 5 == 0 ){
    echo("O numero $num1 é divisivel por 5");
}

else if ($num1 % 2 == 0){
    echo("O numero $num1 é divisivel por 2");
}
else{
    echo("O numero $num1 não é divisivel por 10, por 5 nem por 2");
}

?>