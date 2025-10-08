<?php
$cadastros = [
    ["nome" => "Muriel", "cidade" => "São Paulo" , "idade" => 16 , "sexo" => "F"],
    ["nome" => "João", "cidade" => "São Paulo" , "idade" => 17 , "sexo" => "M"],
    ["nome" => "Thales", "cidade" => "Osasco" , "idade" => 19 , "sexo" => "M"],
    ["nome" => "Victor", "cidade" => "Osasco" , "idade" => 18 , "sexo" => "M"],
    ["nome" => "Raphael", "cidade" => "Santos" , "idade" => 17 , "sexo" => "M"],
    ["nome" => "Camila", "cidade" => "Santos" , "idade" => 18 , "sexo" => "F"],
    ["nome" => "Bruna", "cidade" => "Osasco" , "idade" => 16 , "sexo" => "F"],
    ["nome" => "Rodrigo", "cidade" => "São Paulo" , "idade" => 18 , "sexo" => "M"],
    ["nome" => "Helena", "cidade" => "Santos" , "idade" => 17 , "sexo" => "F"],
    ["nome" => "Lyz", "cidade" => "Santos" , "idade" => 17 , "sexo" => "F"],
];

//TODOS OS NOMES E IDADES:
foreach($cadastros as $cadastro){
    echo ("Nome: " . $cadastro["nome"] . "- Idade: " . $cadastro["idade"] . " <br />");
}
echo("<br />");

//Nomes de quem mora em Santos
foreach($cadastros as $cadastro){
    if($cadastro["cidade"] == "Santos"){
        echo($cadastro["nome"]." Mora em Santos <br />");
    }
    
}
echo("<br />");

//Quem tem mais de 18 anos
foreach($cadastros as $cadastro){
    if($cadastro["idade"] >= 18){
        echo($cadastro["nome"] . " tem " . $cadastro["idade"] . "anos <br />");
    }
}
echo("<br />");
//Cadastro do sexo masculino

foreach($cadastros as $cadastro){
    if($cadastro["sexo"] == "M"){
        echo($cadastro["nome"] . " é do sexo masculino <br />");
    }
}


?>