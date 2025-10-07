<?php
$cadastro = [
    ["nome" => "Muriel", "cidade" => "São Paulo" , "idade" => 16 , "sexo" => "F"],
    ["nome" => "João", "cidade" => "São Paulo" , "idade" => 17 , "sexo" => "M"],
    ["nome" => "Thales", "cidade" => "Osasco" , "idade" => 19 , "sexo" => "M"],
    ["nome" => "Victor", "cidade" => "Osasco" , "idade" => 18 , "sexo" => "M"],
    ["nome" => "Raphael", "cidade" => "Santos" , "idade" => 17 , "sexo" => "M"],
    ["nome" => "Camila", "cidade" => "Santos" , "idade" => 18 , "sexo" => "F"],
    ["nome" => "Bruna", "cidade" => "Osasco" , "idade" => 16 , "sexo" => "F"],
    ["nome" => "Rodrigo", "cidade" => "São Paulo" , "idade" => 18 , "sexo" => "M"],
    ["nome" => "Helena", "cidade" => "Santos" , "idade" => 17 , "sexo" => "F"],
    ["nome" => "Lyz", "cidade" => "Belo Horizonte" , "idade" => 17 , "sexo" => "F"],
];

//TODOS OS NOMES E IDADES:
echo("<pre>");
var_dump($cadastro["nome"]);
echo("</pre> <br />");

//Nomes de quem mora em Santos

if($cadastro["cidade"] == "Santos"){
    echo("<pre>");
    var_dump($cadastro["nome"]);
    echo("</pre> <br />");
}




?>