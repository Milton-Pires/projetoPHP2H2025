<?php
//Exemplo slide 3 aula 8
/*
$nome = array("Maria", "João" , "Pedro" , "José", "Rafael");

echo "Os nomes no array são: <br />";
foreach($nome as $nomes){
    echo("<br />" . $nomes);
}

echo "<br />";
echo "<br />";
*/
//Exemplo slide 12 aula 8
$num = array(1, 2, 3, 4 ,5);

foreach($num as $valor){
    echo "Valor é $valor <br />";
}
echo "<br />";
$num[0] = "um";
$num[1] = "dois";
$num[2] = "três";
$num[3] = "quatro";
$num[4] = "cinco";

foreach($num as $valor){
    echo "Valor é $valor <br />";
}
echo "<br />";

//Exemplo de aula com array associativo
$nome["MA"] = "Maria";
$nome["PE"] = "Pedro";
$nome["JO"] = "João";

echo("<pre>");
var_dump($nome);
echo("</pre>");

echo("<pre>");
print_r($nome);
echo("</pre>");

//Exemplo slide 16 aula 8

$salarios = array("João" => 2000, "Pedro" => 1000, "Maria" => 500);

echo "O salario de João é " . $salarios['João'] . "<br />";
echo "O salario de Pedro é " . $salarios['Pedro'] . "<br />";
echo "O salario de Maria é " . $salarios['Maria'] . "<br />";

$salarios['João'] = "Alto";
$salarios['Pedro'] = "Médio";
$salarios['Maria'] = "Baixa";

echo "O salario de João é " . $salarios['João'] . "<br />";
echo "O salario de Pedro é " . $salarios['Pedro'] . "<br />";
echo "O salario de Maria é " . $salarios['Maria'] . "<br />";

//Funções predefinidas estão nos slides seguintes da aula 8!


?>