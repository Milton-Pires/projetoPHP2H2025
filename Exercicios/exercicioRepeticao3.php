<?php
/*
Criar um aplicativo em PHP que possibilite entrar com nome, sexo e idade de uma pessoa.

a. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a
mensagem: ACEITA.

b. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.

*/
$nome = 'Leticia';
$genero = 2;
$idade = 23;

if($genero == 2 && $idade < 25){
    echo("Parabens $nome, você foi ACEITA");
}
else{
    echo("Infelizmente você, $nome, NÃO FOI ACEITO");
}


?>